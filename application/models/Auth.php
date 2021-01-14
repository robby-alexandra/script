<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Model
{
    // 'name' sesuai dengan field DATABASE
    // $_POST username berasal dari name pada form view login
    public function login()
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->where('username', $_POST['username']);
        $this->db->where('password', md5($_POST['password']));
        $this->db->where('is_active = 1');

        $query = $this->db->get();
        return $query;
    }

    public function get($username = null)
    {
        $this->db->from('karyawan');
        if ($username != null) {
            $this->db->where('username', $username);
        }
        $query = $this->db->get();
        return $query;
    }
}

/* End of file Login.php */
