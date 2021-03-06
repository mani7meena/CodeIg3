<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class pickup extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        setRedirect();
        allow('superadmin,admin,manager,staff,parent');
        $this->module = 'modules/child/';
    }

    /*
     * add pickup contact
     */
    function store($id)
    {
        $this->form_validation->set_rules('first_name', lang('first_name'), 'required|trim|xss_clean');
        $this->form_validation->set_rules('last_name', lang('last_name'), 'required|trim|xss_clean');
        $this->form_validation->set_rules('cell', lang('cellphone'), 'required|xss_clean');
        $this->form_validation->set_rules('pin', lang('pin'), 'required|integer|trim|xss_clean');
        if ($this->form_validation->run() == TRUE) {
            $pickup = $this->child->createPickup($id);
            if ($pickup > 0) {
                //upload photo
                $this->uploadPhoto($pickup);
                flash('success', lang('request_success'));
            } else {
                flash('warning', lang('request_error'));
            }
        } else {
            flash('danger');
            validation_errors();
        }
        redirectPrev();
    }

    /*
     * delete child pickup profile
     */
    function deletePickup($id)
    {
        allow('superadmin,admin,manager,staff');
        //delete images
        $upload_path = './assets/uploads/pickup';
        $this->db->where('id', $id);
        $q = $this->db->get('child_pickup');
        foreach ($q->result() as $r) {
            if ($r->photo !== "") :
                unlink($upload_path . '/' . $r->photo);
            endif;
        }

        //delete entry
        $this->db->where('id', $id);
        if ($this->db->delete('child_pickup')) {
            flash('success', lang('request_success'));
        } else {
            flash('danger', lang('request_error'));
        }
        redirectPrev();
    }

    function uploadPhoto($id = "")
    {
        $upload_path = './assets/uploads/users/pickup';
        $upload_db = 'child_pickup';

        if (!file_exists($upload_path)) {
            mkdir($upload_path, 755, true);
        }

        $config = array(
            'upload_path' => $upload_path,
            'allowed_types' => 'gif|jpg|png|jpeg',
            //'max_size'      => '100',
            'max_width' => '1240',
            'max_height' => '1240',
            'encrypt_name' => true,
        );
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            flash('danger', lang('request_error'));
        } else {
            //delete if any exists
            $this->db->where('id', $id);
            $q = $this->db->get($upload_db);
            foreach ($q->result() as $r) {
                if ($r->photo !== "") :
                    unlink($upload_path . '/' . $r->photo);
                    $data['photo'] = '';
                    $this->db->where('id', $id);
                    $this->db->update($upload_db, $data);
                endif;
            }
            //upload new photo
            $upload_data = $this->upload->data();
            $data_ary = array(
                'photo' => $upload_data['file_name']
            );
            $this->db->where('id', $id);
            $this->db->update($upload_db, $data_ary);
            $data = array('upload_data' => $upload_data);
            if ($data) {
                return true;
            } else {
                return false;
            }
        }

        redirectPrev();
    }
}