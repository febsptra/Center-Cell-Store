<?php

class Data_penjualan extends CI_Controller
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

	// HALAMAN DATA PENJUALAN(DIBAYAR)
	public function index()
	{

		$data['penjualan_dibayar'] = $this->model_admin->data_penjualan()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/data_penjualan', $data);
		$this->load->view('admin/template/footer');
	}

	public function detail($kd_tr)
	{
		$where = array('kode_transaksi' => $kd_tr);
		$data['penjualan_dibayar'] = $this->model_admin->detail_penjualan($where, 'penjualan_dibayar')->result();
		$data['penjualan'] = $this->model_admin->detail_penjualan($where, 'penjualan')->result();
		$data['detail_penjualan'] = $this->model_admin->detail_penjualan($where, 'detail_penjualan')->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/detail_penjualan', $data);
		$this->load->view('admin/template/footer');
	}

	public function cari()
	{
		$tgl_awal  = $this->input->get('tgl_awal', TRUE);
		$tgl_akhir = $this->input->get('tgl_akhir', TRUE);
		$data['penjualan_dibayar'] = $this->model_admin->cari_transaksi(array($tgl_awal, $tgl_akhir));
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/data_penjualan', $data);
		$this->load->view('admin/template/footer');
	}

	public function print()
	{
		$data['penjualan_dibayar'] = $this->model_admin->data_penjualan()->result();
		$this->load->view('admin/report/print_penjualan', $data);
	}

	public function print_cari()
	{
		$tgl_awal  = $this->input->get('tgl_awal', TRUE);
		$tgl_akhir = $this->input->get('tgl_akhir', TRUE);
		$data['penjualan_dibayar'] = $this->model_admin->cari_transaksi(array($tgl_awal, $tgl_akhir));
		$this->load->view('admin/report/print_penjualan_tgl', $data);
	}
}
