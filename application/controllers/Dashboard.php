<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		check_not_login();
		$this->load->model('Master');
		$this->load->model('Auth');
	}


	public function index()
	{
		$data = array(
			'title' => 'Home',
			'cuti' => $this->Master->tampil_cuti(),
			'departement' => $this->Master->tampil_datadepartement(),
			'jabatan' => $this->Master->tampil_jabatan(),
			'karyawan' => $this->Master->tampil_data_karyawan(),
			'isi' => 'v_dashboard',
		);
		$this->load->view('template/v_wrapper', $data, false);
	}


	public function acc($kode)
	{
		$this->form_validation->set_rules('ket_atasan', 'ket_atasan', 'required');

		$data = array(
			'kode' => $kode,
		);
		$this->Master->update_datacuti($data);

		$this->load->view('template/v_wrapper', $data, false);
		$this->session->set_flashdata('pesan', 'Cuti Berhasil Di Approve!!!');
		redirect('Dashboard');
	}
	public function reject($kode)
	{
		$this->form_validation->set_rules('ket_atasan', 'ket_atasan', 'required');
		$ket_atasan = $this->input->post('ket_atasan');
		// $kode = $this->input->post('kode');
		$data = array(
			'kode' => $kode,
			'ket_atasan' => $ket_atasan,
		);
		$this->Master->update_datacutireject($data);

		$this->session->set_flashdata('hapus', 'Cuti Di Tolak');
		$this->load->view('template/v_wrapper', $data, false);
		redirect('Dashboard');
	}
}
