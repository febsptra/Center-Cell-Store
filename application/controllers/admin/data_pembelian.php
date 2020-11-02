<?php

class Data_pembelian extends CI_Controller
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

	// HALAMAN DATA PEMBELIAN 
	public function index()
	{
		$data['pembelian'] = $this->model_admin->data_pembelian()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/data_pembelian', $data);
		$this->load->view('admin/template/footer');
	}

	// HALAMAN TAMBAH DATA PEMBELIAN
	public function tambah_pembelian()
	{
		$data['barang'] = $this->model_admin->data_barang()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/tambah_pembelian', $data);
		$this->load->view('admin/template/footer');
	}

	// AKSI TAMBAH DATA PEMBELIAN
	public function tambah_aksi()
	{
		$tgl_pembelian = $this->input->post('tgl_pembelian');
		$nama_supplier = $this->input->post('nama_supplier');
		$kategori_brg  = $this->input->post('kategori_brg');
		$nama_brg      = $this->input->post('nama_brg');
		$no_brg        = $this->input->post('no_brg');
		$hrg_beli      = $this->input->post('hrg_beli');
		$jumlah_beli   = $this->input->post('jumlah_beli');
		$total_harga   = $this->input->post('total_harga');

		$data = array(
			'tgl_pembelian' => $tgl_pembelian,
			'nama_supplier' => $nama_supplier,
			'kategori_brg'  => $kategori_brg,
			'nama_brg'      => $nama_brg,
			'no_brg'        => $no_brg,
			'hrg_beli'      => $hrg_beli,
			'jumlah_beli'   => $jumlah_beli,
			'total_harga'   => $total_harga
		);

		$this->model_admin->tambah($data, 'pembelian');
		redirect('admin/data_pembelian/index');
	}

	// AKSI EDIT PEMBELIAN
	public function update()
	{
		$no_pembelian  = $this->input->post('no_pembelian');
		$tgl_pembelian = $this->input->post('tgl_pembelian');
		$nama_supplier = $this->input->post('nama_supplier');
		$kategori_brg  = $this->input->post('kategori_brg');
		$nama_brg      = $this->input->post('nama_brg');
		$no_brg        = $this->input->post('no_brg');
		$hrg_beli      = $this->input->post('hrg_beli');
		$jumlah_beli   = $this->input->post('jumlah_beli');
		$total_harga   = $this->input->post('total_harga');


		$data = array(

			'no_pembelian'  => $no_pembelian,
			'tgl_pembelian' => $tgl_pembelian,
			'nama_supplier' => $nama_supplier,
			'kategori_brg'  => $kategori_brg,
			'nama_brg'      => $nama_brg,
			'no_brg'        => $no_brg,
			'hrg_beli'      => $hrg_beli,
			'jumlah_beli'   => $jumlah_beli,
			'total_harga'   => $total_harga
		);

		$where = array(
			'no_pembelian' => $no_pembelian
		);

		$this->model_admin->update($where, $data, 'pembelian');
		redirect('admin/data_pembelian/index');
	}

	public function hapus($no_pembelian)
	{
		$where = array('no_pembelian' => $no_pembelian);
		$this->model_admin->hapus($where, 'pembelian');
		redirect('admin/data_pembelian/index');
	}

	public function cari()
	{
		$tgl_awal  = $this->input->get('tgl_awal', TRUE);
		$tgl_akhir = $this->input->get('tgl_akhir', TRUE);
		$data['pembelian'] = $this->model_admin->cari_pembelian(array($tgl_awal, $tgl_akhir));
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/data_pembelian', $data);
		$this->load->view('admin/template/footer');
	}

	public function print()
	{
		$data['pembelian'] = $this->model_admin->data_pembelian()->result();
		$this->load->view('admin/report/print_pembelian', $data);
	}

	public function print_cari()
	{
		$tgl_awal  = $this->input->get('tgl_awal', TRUE);
		$tgl_akhir = $this->input->get('tgl_akhir', TRUE);
		$data['pembelian'] = $this->model_admin->cari_pembelian(array($tgl_awal, $tgl_akhir));
		$this->load->view('admin/report/print_pembelian_tgl', $data);
	}
}
