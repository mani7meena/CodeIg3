<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class: my_classes
 * User: Subramanian
 * Email: mani7meena@gmail.com
 * Date: 28/12/2018
 */

class my_classes extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }


    function addClass($getID = false)
    {
        $data = array(
            'name_of_class' => $this->input->post('name_of_class'),
            'capacity_of_the_class' => $this->input->post('capacity_of_the_class'),
            'gender' => $this->input->post('gender'),
            'color' => $this->input->post('color'),
            // 'status' => 1,
            'created_at' => date_stamp(),
            'updated_at' => date_stamp(),
            'creator_id' => $this->user->uid()
        );
        
        $this->db->insert('classes', $data);
        $last_id = $this->db->insert_id();

        if ($this->db->affected_rows() > 0) {
            flash('success', lang('request_success'));
        } else {
            return false;
        }

        // //assign child to user if this user is parent
        // if (is('parent')) {
        //     $data2 = array(
        //         'child_id' => $last_id,
        //         'user_id' => $this->user->uid()
        //     );
        //     $this->db->insert('child_parents', $data2);
        // }

        //log event
        logEvent("Added class {$data['name_of_class']}");

        if ($getID)
            return $last_id;
        return true;
    }
}