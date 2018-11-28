<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        setRedirect();
        allow('superadmin,admin,manager,staff,parent');
        $this->module = 'modules/notes/';
    }

    function index()
    {
            page($this->module . 'index');
    }
}