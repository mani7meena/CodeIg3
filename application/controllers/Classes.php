<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Classes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        setRedirect();
        //allow('superadmin,admin,manager,staff,parent');
        $this->module = 'modules/classes/';
        $this->load->model('My_classes', 'classes');
    }

    function index()
    {
        page($this->module . 'index');
    }
	
	 function add()
    {
        print_r($this->input->post());die;
            page($this->module . 'add');
    }

    function store()
    {
        allow('superadmin,admin,manager,staff');
        $this->form_validation->set_rules('name_of_class', lang('name_of_class'), 'required|trim|xss_clean');
        $this->form_validation->set_rules('capacity_of_the_class', lang('capacity_of_the_class'), 'required|numeric|trim|xss_clean');
        $this->form_validation->set_rules('gender', lang('gender'), 'required|trim|xss_clean');
        $this->form_validation->set_rules('color', lang('color'), 'required|trim|xss_clean');        
        
        // if ($this->form_validation->run() == TRUE) {
        //     $register = $this->classes->addClass(true);
        //     if ($register !== false) {
        //         flash('success', lang('request_success'));
        //         redirect('classes/' . $register);
        //     } else {
        //         flash('error', lang('request_error'));
        //     }
        // } else {
        //     validation_errors();
        //     flash('danger');
        // }

        if ($this->form_validation->run() == TRUE) {
            if ($this->classes->addClass(true)) {
                flash('success', lang('request_success'));
            } else {
                flash('danger', lang('request_error'));
            }
            redirect('classes', 'refresh');
        } else {
            validation_errors();
            flash('danger');
            page($this->module . 'index'); //load editor
        }
        //redirect('classes', 'refresh');
    }
}