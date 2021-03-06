<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class My_mailer extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function send($data)
    {
        $this->email->clear();

        $email_config = config_item('email_config');
        if (isset($email_config) && is_array($email_config)) {
            $this->email->initialize($email_config);
        }

        if (!isset($data['from']))
            $data['from'] = $this->config->item('email', 'company');
        if (!isset($data['from_name']))
            $data['from_name'] = $this->config->item('name', 'company');
        if (!isset($data['to']))
            $data['to'] = $this->config->item('email', 'company');
        if (!isset($data['subject']))
            $data['subject'] = 'Message from ' . $this->config->item('name', 'company');
        if (isset($data['bcc']))
            $this->email->bcc($data['bcc']);
        if (isset($data['cc']))
            $this->email->bcc($data['cc']);
        if (!isset($data['template']))
            $data['template'] = 'general';
        if(isset($data['salute'])) {
            $data['salute'] = sprintf(lang('email_salute'), $data['salute']);
        }else{
            $data['salute']=sprintf(lang('email_salute'),'');
        }
        $this->email->from($data['from'], $data['from_name']);
        $this->email->to($data['to']);
        $this->email->subject($data['subject']);

        $message = $this->load->view('email/layout', compact('data'), TRUE);

        $file='';
        if (isset($data['file'])) {
            $file = dirname(__FILE__, 2) . '/temp/' . $data['file'];
            if (@file_exists($file))
                $this->email->attach($file);
        }

        $this->email->message($message);
        $mail = $this->email->send();

        if (isset($data['file'])) {
            @unlink($file);
        }

        if ($mail) {
            if (ENVIRONMENT !== 'production') {
                log_message('debug', $this->email->print_debugger());
            }
            return TRUE;
        } else {
            return FALSE;
        }
    }

}