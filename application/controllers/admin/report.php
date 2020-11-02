<?php

class Report extends CI_Controller
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

	public function index()
	{

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/report/report');
		$this->load->view('admin/template/footer');
	}

	///////// PENJUALAN TERBANYAK ///////////////////////////////////////////////////////////////////////////
	public function penjualan_terbanyak()
	{
		$data['barang'] = $this->model_admin->penjualan_terbanyak()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/report/penjualan_terbanyak', $data);
		$this->load->view('admin/template/footer');
	}

	public function penjualan_terbanyak_print()
	{
		$data['barang'] = $this->model_admin->penjualan_terbanyak()->result();
		$this->load->view('admin/report/print_barang_bp', $data);
	}
	///////// PENJUALAN TERBANYAK ///////////////////////////////////////////////////////////////////////////

	///////// PENJUALAN TERSERING ///////////////////////////////////////////////////////////////////////////	
	public function penjualan_tersering()
	{
		$data['barang'] = $this->model_admin->penjualan_tersering()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/report/penjualan_tersering', $data);
		$this->load->view('admin/template/footer');
	}

	public function penjualan_tersering_print()
	{
		$data['barang'] = $this->model_admin->penjualan_tersering()->result();
		$this->load->view('admin/report/print_barang_sp', $data);
	}
	///////// PENJUALAN TERSERING ///////////////////////////////////////////////////////////////////////////

	///////// KEUNTUNGAN ////////////////////////////////////////////////////////////////////////////////////	
	public function total_keuntungan()
	{
		$data['keuntungan'] = $this->model_admin->keuntungan()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/report/total_keuntungan', $data);
		$this->load->view('admin/template/footer');
	}

	public function total_keuntungan_print()
	{
		$data['keuntungan'] = $this->model_admin->keuntungan()->result();
		$this->load->view('admin/report/print_total_keuntungan', $data);
	}


	public function total_keuntungan_tgl()
	{
		$tgl_awal  = $this->input->get('tgl_awal', TRUE);
		$tgl_akhir = $this->input->get('tgl_akhir', TRUE);
		$data['keuntungan'] = $this->model_admin->keuntungan_tgl(array($tgl_awal, $tgl_akhir));
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/report/total_keuntungan', $data);
		$this->load->view('admin/template/footer');
	}

	public function total_keuntungan_print_tgl()
	{
		$tgl_awal  = $this->input->get('tgl_awal', TRUE);
		$tgl_akhir = $this->input->get('tgl_akhir', TRUE);
		$data['keuntungan'] = $this->model_admin->keuntungan_tgl(array($tgl_awal, $tgl_akhir));
		$this->load->view('admin/report/print_total_keuntungan_tgl', $data);
	}
	///////// KEUNTUNGAN ////////////////////////////////////////////////////////////////////////////////////

	///////// KERUGIAN //////////////////////////////////////////////////////////////////////////////////////
	public function total_kerugian()
	{
		$data['kerugian'] = $this->model_admin->kerugian()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/report/total_kerugian', $data);
		$this->load->view('admin/template/footer');
	}

	public function total_kerugian_tgl()
	{
		$tgl_awal  = $this->input->get('tgl_awal', TRUE);
		$tgl_akhir = $this->input->get('tgl_akhir', TRUE);
		$data['kerugian'] = $this->model_admin->kerugian_tgl(array($tgl_awal, $tgl_akhir));
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/report/total_kerugian', $data);
		$this->load->view('admin/template/footer');
	}

	public function total_kerugian_print()
	{
		$data['kerugian'] = $this->model_admin->kerugian()->result();
		$this->load->view('admin/report/print_total_kerugian', $data);
	}

	public function total_kerugian_print_tgl()
	{
		$tgl_awal  = $this->input->get('tgl_awal', TRUE);
		$tgl_akhir = $this->input->get('tgl_akhir', TRUE);
		$data['kerugian'] = $this->model_admin->kerugian_tgl(array($tgl_awal, $tgl_akhir));
		$this->load->view('admin/report/print_total_kerugian_tgl', $data);
	}
	///////// KERUGIAN /////////////////////////////////////////////////////////////////////////////////////////

	///////// ASSSET /////////////////////////////////////////////////////////////////////////////////////////
	public function total_asset()
	{
		$data['barang'] = $this->model_admin->data_barang()->result();
		$this->load->view('admin/report/total_asset', $data);
	}
	///////// ASSSET /////////////////////////////////////////////////////////////////////////////////////////

	///////// STOK BARANG /////////////////////////////////////////////////////////////////////////////////////////
	public function stok_barang()
	{
		$data['barang'] = $this->model_admin->data_stok_barang()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/report/stok_barang', $data);
		$this->load->view('admin/template/footer');
	}

	public function print_stok_barang()
	{
		$data['barang'] = $this->model_admin->data_stok_barang()->result();
		$this->load->view('admin/report/print_stok_barang', $data);
	}
}
