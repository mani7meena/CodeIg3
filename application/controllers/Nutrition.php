<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Nutrition extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        setRedirect();
        $this->load->model('My_nutrition', 'nutrition');
        allow('superadmin,admin,manager,staff,parent');
        $this->module = 'modules/nutrition/';
    }

    function index()
    {
            page($this->module . 'index');
    }
    
    function foods()
    {
        $this->db->order_by('id');
        $query = $this->db->get('nutrition')->result();
        // sending the encoded result to success page
        echo json_encode($query);
    }

    /*
     * add foodto db
     */
    function addFood()
    {
        allow('superadmin,admin,manager,staff');

        $this->form_validation->set_rules('title', lang('title'), 'required|trim|xss_clean');
        $this->form_validation->set_rules('start', lang('start_date'), 'required|trim|xss_clean');
        $this->form_validation->set_rules('end', lang('end_date'), 'required|trim|xss_clean');
        $this->form_validation->set_rules('desc', lang('details'), 'required|trim|xss_clean');

        if ($this->form_validation->run() == TRUE) {
            $this->nutrition->add_event();
        } else {
            validation_errors();
            flash('danger');
        }
        redirectPrev();
    }

    /*
     * update Food
     */
    function updateFood()
    {
        allow('superadmin,admin,manager,staff');

        $this->form_validation->set_rules('title', lang('title'), 'required|trim|xss_clean');
        $this->form_validation->set_rules('start', lang('start_date'), 'required|trim|xss_clean');
        $this->form_validation->set_rules('end', lang('end_date'), 'required|trim|xss_clean');
        $this->form_validation->set_rules('desc', lang('details'), 'required|trim|xss_clean');

        if ($this->form_validation->run() == TRUE) {
            $this->nutrition->update_event();
        } else {
            flash('danger', lang('request_error'));
        }
        redirectPrev();

    }

    /*
     * delete event
     */
    function deleteFood()
    {
        allow('superadmin,admin,manager,staff');
        if ($this->nutrition->delete_event()) {
            flash('success', lang('request_success'));
        } else {
            flash('danger', lang('request_success'));
        }
    }
    
}