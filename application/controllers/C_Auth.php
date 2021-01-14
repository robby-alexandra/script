<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Auth extends CI_Controller
{
    public function login()
    {
        check_already_login();

        $this->load->view('login');
    }

    public function logout()
    {
        $data = array('username', 'level');
        $this->session->unset_userdata($data);
        redirect('C_Auth/login');
    }



    public function process()
    {

        $post = $this->input->post(null, TRUE); {

            $post = $this->input->post(null, TRUE);
            if (isset($post['login'])) {
                $this->load->model('Auth');
                $query = $this->Auth->login($post);
                if (
                    $query->num_rows() > 0
                ) {
                    $row = $query->row();
                    $data = array(
                        'username' => $row->username,
                        'level' => $row->level,
                        'nama' => $row->nama,
                    );
                    $this->session->set_userdata($data);
                    $level = $data['level'];

                    if ($level === 'SuperAdmin') {
                        redirect('Dashboard');
                    } elseif ($level === 'HRD') {
                        redirect('Dashboard');

                        // access login for author
                    } elseif ($level === 'MGR') {
                        redirect('Dashboard');

                        // access login for author
                    } elseif ($level === 'SPV') {
                        redirect('Dashboard');

                        // access login for author
                    } elseif ($level === 'Karyawan') {
                        redirect('C_Master/profile');
                    }
                } else {
                    echo "<script>alert('Login Gagal, Username / Password salah');
                    window.location='" . base_url('C_Auth/login') . "';</script>";
                }
            }
        }
    }
}

/* End of file C_Auth.php */
