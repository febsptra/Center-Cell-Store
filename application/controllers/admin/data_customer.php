<?php

class Data_customer extends CI_Controller{
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
		$data['customer'] = $this->model_admin->data_customer()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/data_customer',$data);
		$this->load->view('admin/template/footer');

	}

}