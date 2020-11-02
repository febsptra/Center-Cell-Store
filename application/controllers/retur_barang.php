<?php

class retur_barang extends CI_Controller{
	
	public function index()
	{	
		$keyword = $this->session->userdata('username');
		$data['retur'] = $this->model_public->riwayat_barang($keyword);
		$this->load->view('public/template/header');
		$this->load->view('public/retur_barang', $data);
		$this->load->view('public/template/footer');
	}

	public function retur()
	{
		$id_pegawai		= $this->input->post('id_pegawai');
		$password		= $this->input->post('password');
		$nama_lengkap	= $this->input->post('nama_lengkap');
		$alamat			= $this->input->post('alamat');
		$email			= $this->input->post('email');
		$no_hp			= $this->input->post('no_hp');
		$jabatan		= $this->input->post('jabatan');

		$data = array (
			'id_customer'   	=> $this->input->post('id_customer'),
			'nama_toko' 		=> $this->input->post('nama_toko'),
			'alamat' 			=> $this->input->post('alamat'),
			'no_hp'  			=> $this->input->post('no_hp'),
			'nama_brg'	  	  	=> $this->input->post('nama_brg'),
			'jumlah_brg'  		=> $this->input->post('jumlah_brg'),
			'status' 			=> 'Menunggu Diproses'
		);

		$this->model_public->tambah_retur($data, 'retur_barang');
		$this->session->set_flashdata('retur_sukses',
					'<div class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
					 Data Retur berhasil diinput, Kurir Kami akan datang dalam beberapa hari untuk mencek/menukar barang anda.
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button></div>');
		redirect('retur_barang/riwayat');
	}

	public function riwayat()
	{	
		$keyword = $this->session->userdata('id_customer');
		$data['riwayat_retur'] = $this->model_public->riwayat_retur($keyword);
		$this->load->view('public/template/header');
		$this->load->view('public/riwayat_retur', $data);
		$this->load->view('public/template/footer');
	}	


}