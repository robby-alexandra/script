<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Llogin
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('Auth');
        $username = $this->ci->session->userdata('username');
        $user_data = $this->ci->Auth->get($username)->row();
        return $user_data;
    }
}

/* End of file llogin.php */
