<?php

class Data_supplier extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('id_pegawai'))) {
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					 Silahkan Login terlebihdahulu!
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button></div>'
			);
			redirect('admin/login/');
		}
	}

	// HALAMAN DATA SUPPLIER
	public function index()
	{
		$data['supplier'] = $this->model_admin->data_supplier()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/data_supplier', $data);
		$this->load->view('admin/template/footer');
	}

	// HALAMAN TAMBAH DATA SUPPLIER
	public function tambah_supplier()
	{
		$data['supplier'] = $this->model_admin->data_supplier()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/tambah_supplier', $data);
		$this->load->view('admin/template/footer');
	}
	// AKSI TAMBAH DATA SUPPLIER
	public function tambah_aksi()
	{
		$kode_supplier	= $this->input->post('kode_supplier');
		$nama_supplier	= $this->input->post('nama_supplier');
		$alamat			= $this->input->post('alamat');
		$no_hp			= $this->input->post('no_hp');

		$data = array(
			'kode_supplier' => $kode_supplier,
			'nama_supplier' => $nama_supplier,
			'alamat'  		=> $alamat,
			'no_hp'  		=> $no_hp
		);

		$this->model_admin->tambah($data, 'supplier');
		redirect('admin/data_supplier/index');
	}

	// AKSI EDIT DATA SUPPLIER
	public function edit($kode_supplier)
	{
		$where = array('kode_supplier' => $kode_supplier);
		$data['supplier'] = $this->model_admin->edit($where, '
			supplier')->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/edit_supplier', $data);
		$this->load->view('admin/template/footer');
	}

	public function update()
	{
		$kode_supplier	= $this->input->post('kode_supplier');
		$nama_supplier	= $this->input->post('nama_supplier');
		$alamat			= $this->input->post('alamat');
		$no_hp			= $this->input->post('no_hp');

		$data = array(

			'kode_supplier' => $kode_supplier,
			'nama_supplier' => $nama_supplier,
			'alamat'  		=> $alamat,
			'no_hp'  		=> $no_hp
		);

		$where = array(
			'kode_supplier' => $kode_supplier
		);

		$this->model_admin->update($where, $data, 'supplier');
		redirect('admin/data_supplier/index');
	}
}
