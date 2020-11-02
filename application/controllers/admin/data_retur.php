<?php

class Data_retur extends CI_Controller{
	public function __construct(){
	parent::__construct();
		if(empty($this->session->userdata('id_pegawai'))) {
		$this->session->set_flashdata('pesan',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					 Silahkan Login terlebihdahulu!
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button></div>');
		redirect('admin/login/');
		}
	}

// HALAMAN DATA CUSTOMER
	public function index()
	{
		$data['retur'] = $this->model_admin->data_retur()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/data_retur',$data);
		$this->load->view('admin/template/footer');

	}

	public function sudah_diproses()
	{
		$data['retur'] = $this->model_admin->data_retur_sudah()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/data_retur_sudah',$data);
		$this->load->view('admin/template/footer');

	}

	function selesai($no)
    {
    	
	    $data = array('status' => 'Sudah Diproses');
	    $where = array('no' => $no);
	    $this->model_admin->update($where,$data, 'retur_barang');
		
		redirect('admin/data_retur/sudah_diproses');
	}

}