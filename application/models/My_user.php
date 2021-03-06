<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * User: John Muchiri
 * Date: 11/9/2014
 */
class MY_user extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function first($id)
    {
        return $this->get($id);
    }

    /**
     * @param $password
     * @param $email
     * @param array $additional_data
     * @param array $groups
     * @return bool
     */
    public function reg($password, $email, $additional_data = array(), $groups = array())
    {
        $this->load->model('ion_auth_model');
        $this->ion_auth->trigger_events('pre_register');
        $manual_activation = $this->config->item('manual_activation', 'ion_auth');
        if ($this->ion_auth->email_check($email)) {
            $this->ion_auth->set_error('account_creation_duplicate_email');
            return FALSE;
        }

        // IP Address
        $ip_address = $this->input->ip_address();
        $password = $this->ion_auth->hash_password($password);
        // Users table.
        $data = array(
            'password' => $password,
            'email' => $email,
            'ip_address' => $ip_address,
            'created_at' => date_stamp(),
            'last_login' => date_stamp(),
            'active' => ($manual_activation === false ? 1 : 0)

        );
        //filter out any data passed that doesnt have a matching column in the users table
        //and merge the set user data and the additional data
        $userData = array_merge($this->ion_auth->_filter_data('users', $additional_data), $data);
        $this->ion_auth->trigger_events('extra_set');
        $this->db->insert('users', $userData);
        $id = $this->db->insert_id();

        if (!empty($groups)) {
            //add to groups
            foreach ($groups as $group) {
                $this->ion_auth->add_to_group($group, $id);
            }
        }
        //add to default group if not already set
        $default_group = $this->ion_auth->where('name', $this->config->item('default_reg_group', 'ion_auth'))->group()->row();
        if ((isset($default_group->id) && empty($groups)) || (!empty($groups) && !in_array($default_group->id, $groups))) {
            $this->ion_auth->add_to_group($default_group->id, $id);
        }
        $this->ion_auth->trigger_events('post_register');
        return (isset($id)) ? $id : FALSE;
    }

    /**
     * @param $id
     * @return bool
     */
    function update_user_data($id)
    {
        $data = array(
            'pin' => $this->input->post('pin'),
            'phone' => $this->input->post('phone'),
            'phone2' => $this->input->post('phone2'),
            'address' => $this->input->post('address')
        );
        if ($this->db->where('id', $id)->update('users', $data))
            return true;
        return false;
    }

    function users()
    {
        $this->db->select('*');
        $this->db->from('users');
        return $this->db->get();
    }

    function user($id = null)
    {
        if ($id == null) {
            $uid = $this->uid();
        } else {
            $uid = $id;
        }
        $query = $this->db->where('id', $uid)->get('users');
        if ($query->num_rows() > 0) {
            return $query->row();
        }
        return false;
        //return $this->db->get('users')->row();
    }

    /**
     * @param $user
     * @param $group
     * @return bool
     */
    function in_group($user, $group)
    {
        $this->db->select('*');
        $this->db->where('groups.name', $group);
        $this->db->where('users_groups.user_id', $user);
        $this->db->from('users_groups');
        $this->db->join('groups', 'users_groups.group_id=groups.id');
        if ($this->db->get()->num_rows() > 0)
            return true;
        return false;
    }

    function uid()
    {
        return $this->session->userdata('user_id');
    }

    function thisUser($item)
    {
        /*registered session data on login
        - user_id
        - username
        - status
         */
        return $this->session->userdata($item);
    }

    /*
     * get details of current logged in user
     * @param string, int
     * @return string, int
     */
    function get($id)
    {
        return $this->db->where('id',$id)->get('users')->row();
    }


    function getUser($id = "", $item)
    {
        if ($id !== "") {
            $this->db->where('id', $id);
            $q = $this->db->get('users');
            foreach ($q->result() as $row) {
                return $row->$item;
            }
        }
        return false;
    }


    function getCount()
    {
        return $this->users()->num_rows();
    }

    /*
     * get photo of user
     */
    function getPhoto($uid = NULL, $attr = '')
    {
        if (empty($uid)) {
            $id = $this->uid();
        } else {
            $id = $uid;
        }
        $user = $this->db->where('id', $id)->get('users')->row();
        if (!empty($user->photo)) {
            echo '<img ' . $attr . '
         src="' . base_url() . 'assets/uploads/users/staff/' . $user->photo . '"/>';
        } else {
            echo '<img ' . $attr . '
         src="' . base_url() . 'assets/img/content/no-image.png"/>';
        }

    }
}