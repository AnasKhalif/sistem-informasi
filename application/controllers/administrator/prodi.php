<?php

class Prodi extends CI_Controller{

	public function index()
	{
		$data['prodi']	= $this->prodi_model->tampil_data('prodi')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/prodi',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function tambah_prodi()
	{
		$data['jurusan']	= $this->prodi_model->tampil_data('jurusan')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/prodi_form',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function tambah_prodi_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE)
		{
			$this->tambah_prodi();
		}else{
			$kode_prodi = $this->input->post('kode_prodi');
			$nama_prodi = $this->input->post('nama_prodi');
			$nama_jurusan = $this->input->post('nama_jurusan');

			$data = array(
				'kode_prodi'	=> $kode_prodi,
				'nama_prodi'	=> $nama_prodi,
				'nama_jurusan'	=> $nama_jurusan,
			);

			$this->prodi_model->insert_data($data,'prodi');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Prodi Berhasil Ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
			redirect('administrator/prodi');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('kode_prodi','kode_prodi','required',[
			'required'	=> 'Kode Prodi Wajib Diisi!'
		]);
		$this->form_validation->set_rules('nama_prodi','nama_prodi','required',[
			'required'	=> 'Nama Prodi Wajib Diisi!'
		]);
		$this->form_validation->set_rules('nama_jurusan','nama_jurusan','required',[
			'required'	=> 'Nama Jurusan Wajib Diisi!'
		]);
	}
}