<?php

class riwayat_transaksi extends CI_Controller
{

	public function index()
	{
		$keyword = $this->session->userdata('username');
		$data['penjualan'] = $this->model_public->riwayat_transaksi($keyword);
		$data['penjualan_dibayar'] = $this->model_public->transaksi_dibayar($keyword);
		$this->load->view('public/template/header');
		$this->load->view('public/riwayat_transaksi', $data);
		$this->load->view('public/template/footer');
	}


	public function sukses()
	{
		$this->session->set_flashdata(
			'verifikasi_pembayaran',
			'<div class="alert alert-warning alert-dismissible fade show" role="alert">
					 Barang akan dikirim setelah pembayaran di Verifikasi!
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button></div>'
		);
		$keyword = $this->session->userdata('username');
		$data['pembayaran'] = $this->model_public->riwayat_transaksi($keyword);
		$this->load->view('public/template/header');
		$this->load->view('public/riwayat_transaksi', $data);
		$this->load->view('public/template/footer');
	}

	public function hapus_transaksi($kd_tr)
	{
		$where = array('kode_transaksi' => $kd_tr);
		$this->model_public->hapus_transaksi($where, 'penjualan');
		$this->model_public->hapus_transaksi($where, 'detail_penjualan');
		redirect('riwayat_transaksi');
	}

	public function detail($kd_tr)
	{
		$where = array('kode_transaksi' => $kd_tr);
		$data['penjualan_dibayar'] = $this->model_public->data_penjualan($where, 'penjualan_dibayar')->result();
		$data['penjualan'] = $this->model_public->data_penjualan($where, 'penjualan')->result();
		$data['detail_penjualan'] = $this->model_public->data_penjualan($where, 'detail_penjualan')->result();
		$this->load->view('public/template/header');
		$this->load->view('public/detail_penjualan', $data);
		$this->load->view('public/template/footer');
	}

	public function print()
	{
		$keyword = $this->session->userdata('username');
		$data['penjualan_dibayar'] = $this->model_public->transaksi_dibayar($keyword);
		$this->load->view('public/print/riwayat_transaksi', $data);
	}

	public function print_transaksi($kd_tr)
	{
		$where = array('kode_transaksi' => $kd_tr);
		$data['penjualan_dibayar'] = $this->model_public->data_penjualan($where, 'penjualan_dibayar')->result();
		$data['penjualan'] = $this->model_public->data_penjualan($where, 'penjualan')->result();
		$data['detail_penjualan'] = $this->model_public->data_penjualan($where, 'detail_penjualan')->result();
		$this->load->view('public/print/transaksi', $data);
	}
}
