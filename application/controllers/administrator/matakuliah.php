<?php

class Matakuliah extends CI_Controller{

	public function index()
	{
		$data['matakuliah'] = $this->matakuliah_model->tampil_data('matakuliah')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/matakuliah',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function tambah_matakuliah()
	{
		$data['prodi'] = $this->matakuliah_model->tampil_data('prodi')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/matakuliah_form',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function tambah_matakuliah_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE)
		{
			$this->tambah_matakuliah();
		}else{
			$kode_matakuliah 	= $this->input->post('kode_matakuliah');
			$nama_matakuliah	= $this->input->post('nama_matakuliah');
			$sks 				= $this->input->post('sks');
			$semester 			= $this->input->post('semester');
			$nama_prodi 		= $this->input->post('nama_prodi');

			$data = array(
				'kode_matakuliah'	=> $kode_matakuliah,
				'nama_matakuliah'	=> $nama_matakuliah,
				'sks'				=> $sks,
				'semester'			=> $semester,
				'nama_prodi'		=> $nama_prodi
			);

			$this->matakuliah_model->insert_data($data,'matakuliah');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mata Kuliah Berhasil Ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
			redirect('administrator/matakuliah');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('kode_matakuliah','kode_matakuliah','required',[
			'required'	=> 'Kode Mata Kuliah Wajib Diisi!'
		]);
		$this->form_validation->set_rules('nama_matakuliah','nama_matakuliah','required',[
			'required'	=> 'Nama Mata Kuliah Wajib Diisi!'
		]);
		$this->form_validation->set_rules('sks','sks','required',[
			'required'	=> 'SKS Wajib Diisi!'
		]);
		$this->form_validation->set_rules('semester','semester','required',[
			'required'	=> 'Semester Wajib Diisi!'
		]);
		$this->form_validation->set_rules('nama_prodi','nama_prodi','required',[
			'required'	=> 'Nama Prodi Wajib Diisi!'
		]);
	}
}