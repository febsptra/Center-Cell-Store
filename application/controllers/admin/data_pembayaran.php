<?php

class Data_pembayaran extends CI_Controller
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

	// HALAMAN DATA PEMBAYARAN
	public function index()
	{
		$data['menunggu'] = $this->model_admin->menunggu()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/data_pembayaran_meunggu', $data);
		$this->load->view('admin/template/footer');
	}

	public function lunas()
	{
		$data['lunas'] = $this->model_admin->lunas()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/data_pembayaran_lunas', $data);
		$this->load->view('admin/template/footer');
	}

	function verifikasi($kode_transaksi)
	{

		$data = array('status_pembayaran' => 'Lunas');
		$where = array('kode_transaksi' => $kode_transaksi);
		$this->model_admin->update($where, $data, 'penjualan_dibayar');

		redirect('admin/data_pembayaran/lunas');
	}

	function batal($kode_transaksi)
	{
		$where = array('kode_transaksi' => $kode_transaksi);
		$this->model_admin->hapus($where, 'penjualan_dibayar');
		$this->model_admin->hapus($where, 'detail_penjualan');
		redirect('admin/data_pembayaran/');
	}
}
