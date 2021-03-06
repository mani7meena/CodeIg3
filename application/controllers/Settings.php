<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @file      : settings.php
 * @author    : JMuchiri
 * @Copyright 2017 A&M Digital Technologies
 */
class Settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        setRedirect();
        allow('superadmin,admin,manager');
        //variables
        $this->module = 'admin/';

    }

    function index()
    {
        $payMethods = $this->db->get('payment_methods')->result();
        page($this->module . 'index',compact('payMethods'));
    }

    /*
     * purge payments for a child
     */
    function purge_payments()
    {
        page($this->module . 'purge_payments');
    }

    /*
     * purge all charges from child record
     */
    function purge_charges()
    {
        page($this->module . 'purge_charges');
    }

    /*
     * completely delete a child and associated data
     */
    function purge_child()
    {
        page($this->module . 'purge_child');
    }

    function upload_logo()
    {
        $upload_path = './assets/img/';

        $config = array(
            'upload_path' => $upload_path,
            'allowed_types' => 'png',
            'max_size' => '2048',
            'max_width' => '500',
            'max_height' => '112',
            'encrypt_name' => false,
            'file_name'=>'logo.png',
            'overwrite'=>true
        );
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('logo')) {
            $errors['errors'] = $this->upload->display_errors();
            flash('danger', lang('request_error') . implode('', $errors));
        } else {
//            //delete current logo
//            if (file_exists($upload_path . $this->config->item('logo', 'company'))) {
//                unlink($upload_path . $this->config->item('logo', 'company'));
//            }

            $upload_data = $this->upload->data();
            $data = array('upload_data' => $upload_data);
            if ($data) {
                flash('success', lang('request_success'));
            } else {
                flash('danger', lang('request_error'));
            }
        }
        redirect('settings');

    }

    function paymentMethods(){
        $this->form_validation->set_rules('title', lang('payment_method'), 'required|trim|xss_clean');

        if ($this->form_validation->run() == TRUE) {
            $this->db->insert('payment_methods',array(
                'title'=>$this->input->post('title')
            ));
            flash('success',lang('request_success'));
        }else{
            flash('error');
            validation_errors();
        }
        redirectPrev();
    }
    function deletePaymentMethod($id){
        $this->db->delete('payment_methods',array('id'=>$id));
        flash('success',lang('request_success'));
        redirectPrev();
    }
}