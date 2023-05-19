<?php

class Mahasiswa extends CI_Controller{

	public function index()
	{
		$data['mahasiswa'] = $this->mahasiswa_model->tampil_data('mahasiswa')->result();
		$data['prodi']	= $this->prodi_model->tampil_data('prodi')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/mahasiswa',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function detail($id)
	{
		$data['detail'] = $this->mahasiswa_model->ambil_id_mahasiswa($id);
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/mahasiswa_detail',$data);
		$this->load->view('templates_administrator/footer');
	}
}