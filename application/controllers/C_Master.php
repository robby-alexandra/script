<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_Master extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('Master');
    }


    public function index()
    {
        if (
            $this->session->userdata('level') == 'SuperAdmin' ||
            $this->session->userdata('level') == 'HRD'
        ) {
            $data = array(
                'title' => 'departement',
                'departement' => $this->Master->tampil_datadepartement(),
                'isi' => 'master/v_departement'
            );
            $this->load->view('template/v_wrapper', $data, false);
        } else {
            $this->load->view('blocked');
        }
    }
    public function jenis_cuti()
    {
        if (
            $this->session->userdata('level') == 'SuperAdmin' ||
            $this->session->userdata('level') == 'HRD'
        ) {
            // untuk 'namacuti' merupakan foreach pada bagian view
            $data = array(
                'title' => 'Jenis Cuti',
                'namacuti' => $this->Master->tampil_data_jenis_cuti(),
                'isi' => 'master/v_jeniscuti'
            );
            $this->load->view('template/v_wrapper', $data, false);
        } else {
            $this->load->view('blocked');
        }
    }

    public function company()
    {
        if (
            $this->session->userdata('level') == 'SuperAdmin' ||
            $this->session->userdata('level') == 'HRD'
        ) {
            // untuk 'company' merupakan foreach pada bagian view
            $data = array(
                'title' => 'Company',
                'company' => $this->Master->tampil_data_company(),
                'isi' => 'master/v_company'
            );
            $this->load->view('template/v_wrapper', $data, false);
        } else {
            $this->load->view('blocked');
        }
    }


    public function jabatan()
    {
        if (
            $this->session->userdata('level') == 'SuperAdmin' ||
            $this->session->userdata('level') == 'HRD'
        ) {
            // untuk 'jabatan' merupakan foreach pada bagian view
            $data = array(
                'title' => 'Jabatan',
                'jabatan' => $this->Master->tampil_data_jabatan(),
                'isi' => 'master/v_jabatan'
            );
            $this->load->view('template/v_wrapper', $data, false);
        } else {
            $this->load->view('blocked');
        }
    }
    public function profile()
    {

        $qqw =  $this->llogin->user_login()->nik;
        $historycuti = $this->Master->tampil_historycuti($qqw);
        // untuk 'karyawan' merupakan foreach pada bagian view
        $data = array(
            'title' => 'Profile',
            'karyawan' => $this->Master->tampil_data_karyawan(),
            'jabatan' => $this->Master->tampil_data_jabatan(),
            'departement' => $this->Master->tampil_datadepartement(),
            'historycuti' => $historycuti,
            'isi' => 'karyawan/profile',

        );

        $this->load->view('template/v_wrapper', $data, false);
    }
    public function cek_cuti()
    {
        $qqw =  $this->llogin->user_login()->nik;
        $historycuti = $this->Master->tampil_historycuti($qqw);
        // untuk 'karyawan' merupakan foreach pada bagian view
        $data = array(
            'title' => 'Profile',
            'karyawan' => $this->Master->tampil_data_karyawan(),
            'jabatan' => $this->Master->tampil_data_jabatan(),
            'departement' => $this->Master->tampil_datadepartement(),
            'historycuti' => $historycuti,
            'isi' => 'karyawan/history_cuti',

        );

        $this->load->view('template/v_wrapper', $data, false);
    }
    public function karyawan()
    {
        if (
            $this->session->userdata('level') == 'SuperAdmin' ||
            $this->session->userdata('level') == 'HRD'
        ) {
            // untuk 'karyawan' merupakan foreach pada bagian view
            $data = array(
                'title' => 'Karyawan',
                'karyawan' => $this->Master->tampil_data_karyawan(),
                'jabatan' => $this->Master->tampil_data_jabatan(),
                'departement' => $this->Master->tampil_datadepartement(),
                'isi' => 'master/v_karyawan'
            );
            $this->load->view('template/v_wrapper', $data, false);
        } else {
            $this->load->view('blocked');
        }
    }


    // START INPUT 



    public function input_datadepartement()
    {
        if (
            $this->session->userdata('level') == 'SuperAdmin' ||
            $this->session->userdata('level') == 'HRD'
        ) {

            $this->form_validation->set_rules('departement', 'departement', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Input Data ',
                    'isi' => 'master/v_input_departement'
                );
                $this->load->view('template/v_wrapper', $data, FALSE);
            } else {
                $data = array(
                    'departement' => $this->input->post('departement'),
                );
                $this->Master->input_departement($data);

                $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                redirect('C_Master');
            }
        } else {
            $this->load->view('blocked');
        }
    }
    public function input_jabatan()
    {

        if (
            $this->session->userdata('level') == 'SuperAdmin' ||
            $this->session->userdata('level') == 'HRD'
        ) {
            $this->form_validation->set_rules('jabatan', 'jabatan', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Input Data ',
                    'isi' => 'master/v_input_jabatan'
                );
                $this->load->view('template/v_wrapper', $data, FALSE);
            } else {
                $data = array(
                    'jabatan' => $this->input->post('jabatan'),
                );
                $this->Master->input_jabatan($data);

                $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                redirect('C_Master/jabatan');
            }
        } else {
            $this->load->view('blocked');
        }
    }
    public function input_company()
    {
        if (
            $this->session->userdata('level') == 'SuperAdmin' ||
            $this->session->userdata('level') == 'HRD'
        ) {

            $this->form_validation->set_rules('company', 'company', 'required');
            $this->form_validation->set_rules('address', 'address', 'required');
            $this->form_validation->set_rules('tlp', 'tlp', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Input Data ',
                    'isi' => 'master/v_input_company'
                );
                $this->load->view('template/v_wrapper', $data, FALSE);
            } else {
                $data = array(
                    'company' => $this->input->post('company'),
                    'address' => $this->input->post('address'),
                    'tlp' => $this->input->post('tlp'),
                );
                $this->Master->input_company($data);

                $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                redirect('C_Master/company');
            }
        } else {
            $this->load->view('blocked');
        }
    }
    public function input_jeniscuti()
    {
        if (
            $this->session->userdata('level') == 'SuperAdmin' ||
            $this->session->userdata('level') == 'HRD'
        ) {

            $this->form_validation->set_rules('nama_cuti', 'nama_cuti', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Input Data ',
                    'isi' => 'master/v_input_jeniscuti'
                );
                $this->load->view('template/v_wrapper', $data, FALSE);
            } else {
                $data = array(
                    'nama_cuti' => $this->input->post('nama_cuti'),
                );
                $this->Master->input_jeniscuti($data);

                $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                redirect('C_Master/jenis_cuti');
            }
        } else {
            $this->load->view('blocked');
        }
    }
    public function input_karyawan()
    {
        $this->form_validation->set_rules('nik', 'nik', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('tlp', 'tlp', 'required');
        $this->form_validation->set_rules('tanggal_masuk', 'tanggal_masuk', 'required');
        $this->form_validation->set_rules('level', 'level', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('jumlah_cuti', 'jumlah_cuti', 'required');
        $departement = $this->Master->tampil_datadepartement();
        $company = $this->Master->tampil_data_company();
        $jabatan = $this->Master->tampil_data_jabatan();
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']          = './img/TTD';
            $config['allowed_types']        = 'png|jpg|jpeg';
            $config['max_size']             = 2048;
            $config['width'] = 600;
            $config['height'] = 400;


            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $data = array(
                    'title' => 'Input Data ',
                    'jabatan' => $jabatan, 'selectedjabatan' => null,
                    'departement' => $departement,
                    'company' => $company,
                    'isi' => 'master/v_input_karyawan',
                    'error_upload' => $this->upload->display_errors(),
                );
                $this->load->view('template/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './img/TTD' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $password = $this->input->post('password', true);
                $data = array(
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'tlp' => $this->input->post('tlp'),
                    'company' => $this->input->post('company'),
                    'tanggal_masuk' => $this->input->post('tanggal_masuk'),
                    'id_departement' => $this->input->post('departement'),
                    'id_jabatan' => $this->input->post('jabatan'),
                    'jumlah_cuti' => $this->input->post('jumlah_cuti'),
                    'username' => $this->input->post('username'),
                    'password' => md5($password),
                    'ttd' => $upload_data['uploads']['file_name'],
                    'level' => $this->input->post('level'),
                );
                $this->Master->input_karyawan($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                redirect('C_Master/karyawan');
            }
        }
        $data = array(
            'title' => 'Input Data ',
            'isi' => 'master/v_input_karyawan',
            'jabatan' => $jabatan, 'selectedjabatan' => null,
            'departement' => $departement,
            'company' => $company,
        );
        $this->load->view('template/v_wrapper', $data, FALSE);
    }
    // END PROSES INPUT

    // START PROSES EDIT


    public function edit_datacompany($id_company)
    {

        if (
            $this->session->userdata('level') == 'SuperAdmin' ||
            $this->session->userdata('level') == 'HRD'
        ) {
            $this->form_validation->set_rules('company', 'company', 'required');
            $this->form_validation->set_rules('address', 'address', 'required');
            $this->form_validation->set_rules('tlp', 'tlp',  'required');

            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Edit Data',
                    'company' => $this->Master->detail_datacompany($id_company),
                    'isi' => 'master/v_edit_company'
                );
                $this->load->view('template/v_wrapper', $data, FALSE);
            } else {
                $data = array(
                    'id_company' => $id_company,
                    'company' => $this->input->post('company'),
                    'address' => $this->input->post('address'),
                    'tlp' => $this->input->post('tlp'),
                );
                $this->Master->update_company($data);

                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
                redirect('C_Master/company');
            }
        } else {
            $this->load->view('blocked');
        }
    }


    public function edit_datadepartement($id_departement)
    {

        if (
            $this->session->userdata('level') == 'SuperAdmin' ||
            $this->session->userdata('level') == 'HRD'
        ) {

            $this->form_validation->set_rules('departement', 'departement', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Edit Data',
                    'departement' => $this->Master->detail_datadepartement($id_departement),
                    'isi' => 'master/v_edit_departement'
                );
                $this->load->view('template/v_wrapper', $data, FALSE);
            } else {
                $data = array(
                    'id_departement' => $id_departement,
                    'departement' => $this->input->post('departement'),
                );
                $this->Master->update_departement($data);

                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
                redirect('C_Master');
            }
        } else {
            $this->load->view('blocked');
        }
    }



    public function edit_datajabatan($id_jabatan)
    {

        if (
            $this->session->userdata('level') == 'SuperAdmin' ||
            $this->session->userdata('level') == 'HRD'
        ) {
            $this->form_validation->set_rules('jabatan', 'jabatan', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Edit Data',
                    'jabatan' => $this->Master->detail_datajabatan($id_jabatan),
                    'isi' => 'master/v_edit_jabatan'
                );
                $this->load->view('template/v_wrapper', $data, FALSE);
            } else {
                $data = array(
                    'id_jabatan' => $id_jabatan,
                    'jabatan' => $this->input->post('jabatan'),
                );
                $this->Master->update_jabatan($data);

                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
                redirect('C_Master/jabatan');
            }
        } else {
            $this->load->view('blocked');
        }
    }



    public function edit_datajenis_cuti($id_cuti)
    {

        if (
            $this->session->userdata('level') == 'SuperAdmin' ||
            $this->session->userdata('level') == 'HRD'
        ) {

            $this->form_validation->set_rules('nama_cuti', 'nama_cuti', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Edit Data',
                    'nama_cuti' => $this->Master->detail_datajenis_cuti($id_cuti),
                    'isi' => 'master/v_edit_jeniscuti'
                );
                $this->load->view('template/v_wrapper', $data, FALSE);
            } else {
                $data = array(
                    'id_cuti' => $id_cuti,
                    'nama_cuti' => $this->input->post('nama_cuti'),
                );
                $this->Master->update_jenis_cuti($data);

                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
                redirect('C_Master/jenis_cuti');
            }
        } else {
            $this->load->view('blocked');
        }
    }


    public function edit_datakaryawan($nik)
    {
        if (
            $this->session->userdata('level') == 'SuperAdmin' ||
            $this->session->userdata('level') == 'HRD'
        ) {

            $this->form_validation->set_rules('nik', 'nik', 'required', 'trim');
            $this->form_validation->set_rules('nama', 'nama', 'required', 'trim');
            $this->form_validation->set_rules('tlp', 'tlp', 'required', 'trim');
            $this->form_validation->set_rules('tanggal_masuk', 'tanggal_masuk', 'required', 'trim');
            $this->form_validation->set_rules('level', 'level', 'required', 'trim');
            $this->form_validation->set_rules('username', 'username', 'required', 'trim');
            $this->form_validation->set_rules('jumlah_cuti', 'jumlah_cuti', 'required', 'trim');
            $departement = $this->Master->tampil_datadepartement();
            $company = $this->Master->tampil_data_company();
            $jabatan = $this->Master->tampil_data_jabatan();

            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Edit Data',
                    'karyawan' => $this->Master->detail_datakaryawan($nik),
                    'jabatan' => $this->Master->tampil_data_jabatan(),
                    'departement' => $this->Master->tampil_datadepartement(),
                    'company' => $company,
                    'isi' => 'master/v_edit_karyawan'
                );
                $this->load->view('template/v_wrapper', $data, FALSE);
            } else {
                $data = array(
                    'nik' => $nik,
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'tlp' => $this->input->post('tlp'),
                    'company' => $this->input->post('company'),
                    'tanggal_masuk' => $this->input->post('tanggal_masuk'),
                    'id_departement' => $this->input->post('departement'),
                    'id_jabatan' => $this->input->post('jabatan'),
                    'jumlah_cuti' => $this->input->post('jumlah_cuti'),
                    'username' => $this->input->post('username'),
                    'level' => $this->input->post('level'),
                    'is_active' => $this->input->post('is_active'),

                );
                $this->Master->update_karyawan($data);

                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
                redirect('C_Master/karyawan');
            }
        } else {
            $this->load->view('blocked');
        }
    }

    public function hapus_karyawan($nik)
    {
        if (
            $this->session->userdata('level') == 'SuperAdmin'
        ) {
            $data = array('nik' => $nik);
            $this->Master->hapus_karyawan($data);

            $this->session->set_flashdata('hapus', 'Data Berhasil Di Hapus !!!');
            redirect('C_Master/karyawan');
        } else {
            $this->load->view('blocked');
        }
    }
    public function hapus_departement($id_departement)
    {
        if (
            $this->session->userdata('level') == 'SuperAdmin' ||
            $this->session->userdata('level') == 'HRD'
        ) {
            $data = array('id_departement' => $id_departement);
            $this->Master->hapus_departement($data);

            $this->session->set_flashdata('hapus', 'Data Berhasil Di Hapus !!!');
            redirect('C_Master');
        } else {
            $this->load->view('blocked');
        }
    }
    public function hapus_jabatan($id_jabatan)
    {
        if (
            $this->session->userdata('level') == 'SuperAdmin' ||
            $this->session->userdata('level') == 'HRD'
        ) {
            $data = array('id_jabatan' => $id_jabatan);
            $this->Master->hapus_jabatan($data);

            $this->session->set_flashdata('hapus', 'Data Berhasil Di Hapus !!!');
            redirect('C_Master/jabatan');
        } else {
            $this->load->view('blocked');
        }
    }
    public function hapus_company($id_company)
    {
        if (
            $this->session->userdata('level') == 'SuperAdmin' ||
            $this->session->userdata('level') == 'HRD'
        ) {
            $data = array('id_company' => $id_company);
            $this->Master->hapus_company($data);

            $this->session->set_flashdata('hapus', 'Data Berhasil Di Hapus !!!');
            redirect('C_Master/company');
        } else {
            $this->load->view('blocked');
        }
    }
    public function hapus_jeniscuti($id_cuti)
    {
        if (
            $this->session->userdata('level') == 'SuperAdmin' ||
            $this->session->userdata('level') == 'HRD'
        ) {
            $data = array('id_cuti' => $id_cuti);
            $this->Master->hapus_jenis_cuti($data);

            $this->session->set_flashdata('hapus', 'Data Berhasil Di Hapus !!!');
            redirect('C_Master/jenis_cuti');
        } else {
            $this->load->view('blocked');
        }
    }

    public function cuti()
    {
        if (
            $this->session->userdata('level') == 'SuperAdmin' ||
            $this->session->userdata('level') == 'HRD' ||
            $this->session->userdata('level') == 'MGR' ||
            $this->session->userdata('level') == 'SPV'
        ) {
            $data = array(
                'title' => 'Cuti',
                'cuti' => $this->Master->tampil_cuti(),
                'karyawan' => $this->Master->tampil_data_karyawan(),
                'jabatan' => $this->Master->tampil_data_jabatan(),
                'departement' => $this->Master->tampil_datadepartement(),
                'isi' => 'cuti/cuti'
            );
            $this->load->view('template/v_wrapper', $data, false);
        } else {
            $this->load->view('blocked');
        }
    }


    public function input_cuti()
    {

        $this->form_validation->set_rules('kode', 'kode', 'required');
        $this->form_validation->set_rules('nik', 'nik', 'required');
        $this->form_validation->set_rules('tanggal_awal', 'tanggal_awal', 'required');
        $this->form_validation->set_rules('tanggal_akhir', 'tanggal_akhir', 'required');
        // $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
        $this->form_validation->set_rules('jenis_cuti', 'jenis_cuti', 'required');
        $this->form_validation->set_rules('ket', 'ket', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        $jeniscuti = $this->Master->tampil_data_jenis_cuti();
        $karyawan = $this->Master->tampil_data_karyawan();
        $jabatan = $this->Master->tampil_jabatan();
        $departement = $this->Master->tampil_datadepartement();
        $x = '';
        if ($this->form_validation->run() == FALSE) {
            $row = '
			
			<a class="btn btn-sm btn-success" id="sendwa" name="sendwa" href="
				
			" class="float" target="_blank">
				<i class="glyphicon glyphicon-file"></i> WA
			</a>			
		
            ';
            $data = array(
                'title' => 'Cuti',
                'cuti' => $this->Master->tampil_cuti(),
                'jeniscuti' => $jeniscuti,
                'karyawan' => $karyawan,
                'jabatan' => $jabatan, 'selectedjabatan' => null,
                'button' => $row,
                'kode' => $this->Master->buat_kode(),
                'isi' => 'cuti/v_input_cuti'
            );
            $this->load->view('template/v_wrapper', $data, false);
        } else {
            // https://github.com/guangrei/Json-Indonesia-holidays/blob/master/calendar.json
            $sumber = 'https://cdn.jsdelivr.net/gh/robby-alexandra/calender/2020.json';
            $konten = file_get_contents($sumber);
            $data = json_decode($konten, true);
            $total = count($data, 0);
            $z = 0;

            $awal_cuti = $this->input->post('tanggal_awal');
            $akhir_cuti = $this->input->post('tanggal_akhir');
            $haricuti = array();
            $nasional = array();
            $tampillibur = array();
            $awal_cuti = strtotime($awal_cuti);
            $akhir_cuti = strtotime($akhir_cuti);
            for ($i = $awal_cuti; $i <= $akhir_cuti; $i += (60 * 60 * 24)) {
                if (date('w', $i) !== '0' && date('w', $i) !== '6') {
                    $haricuti[] = $i;
                    if ($total >= 0) {
                        for ($z = 0; $z < $total; $z++) {
                            if ($tgl = date('Y-m-d', $i) == $data[$z]['date']) {
                                $nasional[] = $i;
                                $tampillibur[] =  date("d-M-Y", strtotime($data[$z]['date'])) . " " . $data[$z]['description'] . " ";
                                // echo $tampillibur;
                            }
                        }
                    }
                } else {
                    $sabtuminggu[] = $i;
                }
            }
            // $tampillibur2 =  $data[$z]['date'] . " ";

            // $liburnasional = count($tampillibur);
            // $tampillibur1 = $tampillibur;
            $jumlah_cuti = count($haricuti);
            $jumlah_sabtuminggu = count($sabtuminggu);
            $nasional = count($nasional);
            $cutiakhir = $jumlah_cuti - $nasional;
            $abtotal = $jumlah_cuti + $jumlah_sabtuminggu;
            $data = array(
                'kode' => $this->input->post('kode'),
                'nik' => $this->input->post('nik'),
                'tanggal_awal' =>  date('Y-m-d', $awal_cuti),
                'tanggal_akhir' =>  date('Y-m-d', $akhir_cuti),
                'jumlah' => $cutiakhir,
                'atasan' => $this->input->post('atasan'),
                'jenis_cuti' => $this->input->post('jenis_cuti'),
                'ket' => $this->input->post('ket'),
                'tlp_darurat' => $this->input->post('tlp'),
                'pemiliktlp' => $this->input->post('pemilik'),
                'status' => $this->input->post('status'),
            );



            // $this->Master->input_cuti($data);

            $jumlah = $data['jumlah'];
            $sql =
                $this->db->select('*')
                ->where('nik', $data['nik'])
                ->get('karyawan')
                ->row();
            $sql1 = $sql->jumlah_cuti;

            $sisa = ($sql1) - ($jumlah);
            // $this->Master->update_hasilcuti_karyawan($data, $sisa);

            $nama = $sql->nama;



            // print_r($tampillibur1);
            // die;

            $tanggal_awal = $this->input->post('tanggal_awal');
            $tanggal_akhir = $this->input->post('tanggal_akhir');
            $hari = $cutiakhir;
            $atasan = $this->input->post('atasan');
            $jenis_cuti = $this->input->post('jenis_cuti');
            $ket = $this->input->post('ket');

            $sql2 = $this->db->select('*')
                ->where('nama', $atasan)
                ->get('karyawan')
                ->row();
            $tlp = $sql2->tlp;
            // var_dump($tampillibur);
            // die();
            $tmp = '';
            foreach ($tampillibur as $value) {
                $tmp = $tmp . $value . "\n";
            }

            $ceklis = '';
            // $datakirim = array(
            //     "Waktu Input : " . date("d-M-Y") . "\n",
            //     "Nama " => "Nama :" .   $nama,
            //     "tanggal_awal " => "Tanggal cuti :" . date('d M Y', strtotime($tanggal_awal)) . ' s/d ' . date('d M Y', strtotime($tanggal_akhir)),
            //     "Hari " => 'Lama Cuti : ' . $hari,
            //     "atasan " => 'Nama Atasan : '  . $atasan,
            //     "jenis_cuti" => 'Jenis Cuti : ' . $jenis_cuti,
            //     "ket" => 'Keterangan Cuti : ' . $ket,
            //     "Sisa Cuti " => 'Sisa Cuti : ' . $sisa . "\n",
            //     'www.dev.albeta.id',
            //     "Jumlah Hari Cuti : " . $cutiakhir . "\n",
            //     "Jumlah Sabtu/Minggu : " . $jumlah_sabtuminggu . "\n",
            //     "Jumlah Nasional : " . $nasional .  " " .  "hari" .  " " . "\n",
            //     "Total Hari : " . $abtotal . "\n",
            //     "Tanggal Nasional :" . $tmp,
            // );

            //add html for action
            $row[] = $ceklis;
            $row[] = '
			
			<a class="btn btn-sm btn-success" href="
				https://web.whatsapp.com/send?phone=' . $tlp . '&text=
				Assalamaualaikum,...%0a
				Karyawan dari *PT.Albeta Sukses Mandiri*, ingin mengajukan cuti dengan data berikut:%0A%0ANama %3a ' . $nama . '%0ALama Cuti %3a ' . $hari . '%20Hari,%0ANama Atasan %3a ' . $atasan . '%0AJenis Cuti %3a ' . $jenis_cuti . '%0AKeterangan %3a ' . $ket . '%0ASisa Cuti %3a ' . $sisa . '%0AJumlah Hari Cuti %3a  ' . $cutiakhir . '%0AJumlah Sabtu/Minggu %3a ' . $jumlah_sabtuminggu . '%0AJumlah Nasional %3a  ' . $nasional . '%0ATotal Hari %3a  ' . $abtotal . '%0ATanggal Nasional %3a ' . $tmp . '%0A%0A				
				
				Silahkan Klik link dibawah ini untuk Acction %0A _www.dev.albeta.co.id_%0A
			" class="float" target="_blank">
				<i class="glyphicon glyphicon-file"></i> WA
			</a>			
		
            ';
            $data[] = $row;






            // $cek = $this->Master->kirimTelegram($datakirim);


            if (
                $this->session->userdata('level') == 'Karyawan'
            ) {
                $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                redirect('C_Master/profile');
            } else {
                $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                redirect('C_Master/cuti');
            }
        }
    }





    public function hapus_formcuti($kode)
    {
        if (
            $this->session->userdata('level') == 'SuperAdmin' ||
            $this->session->userdata('level') == 'HRD'
        ) {
            $data = array(
                'kode' => $kode,
            );
            $this->Master->hapus_formcuti($data);
            $this->session->set_flashdata('hapus', 'Data Berhasil Di Hapus !!!');
            redirect('C_Master/cuti');
        } else {
            $this->load->view('blocked');
        }
    }

    public function edit_datacuti($kode)
    {

        $this->form_validation->set_rules('kode', 'kode', 'required', 'trim');
        $this->form_validation->set_rules('nik', 'nik', 'required', 'trim');
        $this->form_validation->set_rules('tanggal_awal', 'tanggal_awal', 'required', 'trim');
        $this->form_validation->set_rules('tanggal_akhir', 'tanggal_akhir', 'required', 'trim');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required', 'trim');
        $this->form_validation->set_rules('jenis_cuti', 'jenis_cuti', 'required', 'trim');
        $this->form_validation->set_rules('ket', 'ket', 'required', 'trim');
        $this->form_validation->set_rules('status', 'status', 'required', 'trim');
        $jeniscuti = $this->Master->tampil_data_jenis_cuti();
        $karyawan = $this->Master->tampil_data_karyawan();
        $jabatan = $this->Master->tampil_jabatan();
        $a = $this->Master->buat_kode();

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Edit Data',
                'cuti' => $this->Master->detail_datacuti($kode),
                'jeniscuti' => $this->Master->tampil_data_jenis_cuti(),
                'karyawan' => $this->Master->tampil_data_karyawan(),
                'jabatan' => $this->Master->tampil_jabatan(),
                'kodeunik' => $a,
                'isi' => 'cuti/v_edit_formcuti'
            );
            $this->load->view('template/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'kode' => $kode,
                'kode' => $this->input->post('kode'),
                'nik' => $this->input->post('nik'),
                'tanggal_awal' => $this->input->post('tanggal_awal'),
                'tanggal_akhir' => $this->input->post('tanggal_akhir'),
                'jumlah' => $this->input->post('jumlah'),
                'atasan' => $this->input->post('atasan'),
                'jenis_cuti' => $this->input->post('jenis_cuti'),
                'ket' => $this->input->post('ket'),
                'status' => $this->input->post('status'),
            );
            $this->Master->update_formcuti($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
            redirect('C_Master/cuti');
        }
    }
    public function update_profile($nik)
    {
        $cekid =  $this->llogin->user_login()->nik;

        if ($cekid != $nik) {
            $this->load->view('blocked');
        } else {

            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('address', 'address', 'required');
            $this->form_validation->set_rules('tlp', 'tlp',  'required');
            $this->form_validation->set_rules('password', 'password',  'trim|min_length[3]|matches[password2]', [
                'matches' => 'Password dont match!',
                'min_length' => 'Password too short!'
            ]);
            $this->form_validation->set_rules('password2', 'password', 'trim|matches[password]');
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Edit Data',
                    'karyawan' => $this->Master->detail_datakaryawan($nik),
                    'isi' => 'karyawan/update_profile'
                );
                $this->load->view('template/v_wrapper', $data, FALSE);
            } else {
                $password = $this->input->post('password', true);
                $data = array(
                    'nik' => $nik,
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'address' => $this->input->post('address'),
                    'tlp' => $this->input->post('tlp'),
                    'username' => $this->input->post('username'),
                    'password' => md5($password),
                );
                $this->Master->update_profile($data);


                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
                redirect('C_Master/profile');
            }
        }
    }


    public function laporan_cuti()
    {


        if (isset($_GET['tanggal_awal']) && isset($_GET['tanggal_akhir'])) {
            $mulai = $this->input->get('tanggal_awal');
            $sampai = $this->input->get('tanggal_akhir');
            // mengambil data peminjaman berdasarkan tanggal mulai sampai tanggal sampai
            $query['cuti'] = $this->db->query("select * from cuti join karyawan ON cuti.nik = karyawan.nik where date(tanggal_awal) >= '$mulai' and date(tanggal_awal) <= '$sampai' order by kode desc")->result();

            $data = array(
                'title' => 'Laporan Cuti',
                'karyawan' => $this->Master->tampil_data_karyawan(),
            );
        } else {
            // mengambil data peminjaman buku dari database | dan mengurutkan data dari id peminjaman terbesar ke terkecil (desc)
            $query['cuti'] = $this->db->query("select * from cuti join karyawan ON cuti.nik = karyawan.nik order by kode desc")->result();

            $data = array(
                'title' => 'Laporan Cuti',
                'karyawan' => $this->Master->tampil_data_karyawan(),

            );
        }

        $this->load->view('template/v_head');
        $this->load->view('template/v_header');
        $this->load->view('template/v_nav', $data);
        $this->load->view('laporan/index', $query);
        $this->load->view('template/v_footer');
    }





    function cuti_cetak()
    {
        if (isset($_GET['tanggal_awal']) && isset($_GET['tanggal_akhir'])) {
            $mulai = $this->input->get('tanggal_awal');
            $sampai = $this->input->get('tanggal_akhir');
            // mengambil data peminjaman berdasarkan tanggal mulai sampai tanggal sampai
            $query['cuti'] = $this->db->query("select * from cuti join karyawan ON cuti.nik = karyawan.nik where date(tanggal_awal) >= '$mulai' and date(tanggal_awal) <= '$sampai' order by kode desc")->result();

            $this->load->view('laporan/cetak_cuti', $query);
        } else {

            redirect('C_Master/laporan_cuti');
        }
    }


    public function print_datacuti($kode)
    {
        if ($this->form_validation->run() == FALSE) {

            $data = array(
                'title' => 'Form Cuti Cuti',
                'cuti' => $this->Master->detail_datacuti($kode),
                'jeniscuti' => $this->Master->tampil_data_jenis_cuti(),
                'karyawan' => $this->Master->tampil_data_karyawan(),
                'tampilcuti' => $this->Master->tampil_cuti(),
                'jabatan' => $this->Master->tampil_jabatan(),
            );
            $this->load->view('laporan/cetak_datacuti', $data);
        } else {
            $data = array(
                'kode' => $kode,
                'title' => 'Form Cuti Cuti',
                'cuti' => $this->Master->detail_datacuti($kode),
                'jeniscuti' => $this->Master->tampil_data_jenis_cuti(),
                'karyawan' => $this->Master->tampil_data_karyawan(),
                'tampilcuti' => $this->Master->tampil_cuti(),
                'jabatan' => $this->Master->tampil_jabatan(),
            );
            redirect('C_Master/cuti');
        }
        $this->load->view('template/v_head');
    }

    public function cetak_formcuti($kode)
    {
        $data = array(
            'title' => 'Form Cuti Cuti',
            'cuti' => $this->Master->detail_datacuti($kode),
            'jeniscuti' => $this->Master->tampil_data_jenis_cuti(),
            'karyawan' => $this->Master->tampil_data_karyawan(),
            'tampilcuti' => $this->Master->tampil_cuti(),
            'jabatan' => $this->Master->tampil_jabatan(),
            'isi' => 'laporan/cetak_formcuti'
        );
        $this->load->view('template/v_wrapper', $data, FALSE);
    }
}
