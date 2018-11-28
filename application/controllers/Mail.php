<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        setRedirect();
        allow('superadmin,admin,manager,staff,parent');
        $this->module = 'modules/mail/';
    }

    function index()
    {
            page($this->module . 'index');
    }
	
	function compose()
    {
            page($this->module . 'compose');
    }
	function read_mail()
    {
            page($this->module . 'read_mail');
    }
}