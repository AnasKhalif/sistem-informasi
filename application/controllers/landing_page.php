<?php

class Landing_page extends CI_Controller{

	public function index()
	{
		$data['identitas'] = $this->identitas_model->tampil_data('identitas')->result();
		$data['tentang'] = $this->identitas_model->tampil_data('tentang_kampus')->result();
		$data['informasi'] = $this->informasi_model->tampil_data('informasi')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('landing_page',$data);
		$this->load->view('templates_administrator/footer');
	}
}