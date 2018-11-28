<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Health extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        setRedirect();
        allow('superadmin,admin,manager,staff,parent');
        $this->module = 'modules/health/';
    }

    function index()
    {
            page($this->module . 'index');
    }
}