<?php

class Data_barang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('rupiah_helper');
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

	// HALAMAN DATA BARANG
	public function index()
	{
		$data['barang'] = $this->model_admin->data_barang()->result();
		$data['supplier'] = $this->model_admin->data_supplier()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/data_barang', $data);
		$this->load->view('admin/template/footer');
	}

	// HALAMAN TAMBAH DATA BARANG
	public function tambah_barang()
	{
		$data['supplier'] = $this->model_admin->data_supplier()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/tambah_barang', $data);
		$this->load->view('admin/template/footer');
	}

	// AKSI TAMBAH DATA BARANG
	public function tambah_aksi()
	{
		$no_brg			= $this->input->post('no_brg');
		$nama_supplier	= $this->input->post('nama_supplier');
		$kategori_brg	= $this->input->post('kategori_brg');
		$nama_brg		= $this->input->post('nama_brg');
		$hrg_beli		= $this->input->post('hrg_beli');
		$hrg_jual		= $this->input->post('hrg_jual');
		$laba			= $this->input->post('laba');
		$stok_brg		= $this->input->post('stok_brg');
		$keterangan		= $this->input->post('keterangan');
		$foto_brg		= $_FILES['foto_brg'];
		if ($foto_brg) {
			$config['upload_path']   = './uploads/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['file_name']     = $this->input->post('nama_brg');
			$config['overwrite']	 = true;

			$this->load->library('upload');
			$this->upload->initialize($config);


			if ($this->upload->do_upload('foto_brg')) {
				$foto_brg = $this->upload->data('file_name');
				$this->db->set('foto_brg', $foto_brg);
			} else {
				echo "Upload Foto Gagal!";
			}
		}

		$data = array(
			'no_brg'     	=> $no_brg,
			'nama_supplier' => $nama_supplier,
			'kategori_brg'  => $kategori_brg,
			'nama_brg'  	=> $nama_brg,
			'hrg_beli'	    => $hrg_beli,
			'hrg_jual'  	=> $hrg_jual,
			'laba' 		    => $laba,
			'diskon' 	    => 0,
			'stok_brg'      => 0,
			'keterangan'    => $keterangan
		);

		$this->model_admin->tambah($data, 'barang');
		$this->session->set_flashdata(
			'tambah_sukses',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
					 Data Sukses Ditambahkan.
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button></div>'
		);
		redirect('admin/data_barang/index');
	}

	// AKSI EDIT DATA BARANG
	public function edit($no_brg)
	{
		$where = array('no_brg' => $no_brg);
		$data['supplier'] = $this->model_admin->data_supplier()->result();
		$data['barang'] = $this->model_admin->edit($where, '
			barang')->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/edit_barang', $data);
		$this->load->view('admin/template/footer');
	}

	public function update()
	{
		$no_brg          = $this->input->post('no_brg');
		$nama_supplier   = $this->input->post('nama_supplier');
		$kategori_brg    = $this->input->post('kategori_brg');
		$nama_brg        = $this->input->post('nama_brg');
		$hrg_beli        = $this->input->post('hrg_beli');
		$hrg_jual        = $this->input->post('hrg_jual');
		$tag             = $this->input->post('tag');
		$diskon          = $this->input->post('diskon');
		$hrg_sblm_diskon = $this->input->post('hrg_sblm_diskon');
		$laba            = $this->input->post('laba');
		$keterangan      = $this->input->post('keterangan');
		$foto_brg        = $_FILES['foto_brg'];

		if ($foto_brg) {
			$config['upload_path']   = './uploads/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['file_name']     = $this->input->post('nama_brg');
			$config['overwrite']	 = true;

			$this->load->library('upload');
			$this->upload->initialize($config);


			if ($this->upload->do_upload('foto_brg')) {
				$foto_brg = $this->upload->data('file_name');
				$this->db->set('foto_brg', $foto_brg);
			} else {
				echo "Upload Foto Gagal!";
			}
		}


		$data = array(

			'no_brg'          => $no_brg,
			'nama_supplier'   => $nama_supplier,
			'kategori_brg'    => $kategori_brg,
			'nama_brg'        => $nama_brg,
			'hrg_beli'        => $hrg_beli,
			'hrg_jual'        => $hrg_jual,
			'tag'             => $tag,
			'diskon'          => $diskon,
			'hrg_sblm_diskon' => $hrg_sblm_diskon,
			'laba'            => $laba,
			'keterangan'      => $keterangan
		);

		$where = array(
			'no_brg' => $no_brg
		);

		$this->model_admin->update($where, $data, 'barang');
		$this->session->set_flashdata(
			'edit_sukses',
			'<div class="alert alert-info alert-dismissible fade show" role="alert">
					 Data Sukses Diedit.
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button></div>'
		);
		redirect('admin/data_barang/index');
	}


	// AKSI HAPUS DATA BARANG
	public function hapus($no_brg)
	{
		$where = array('no_brg' => $no_brg);
		$this->model_admin->hapus($where, 'barang');
		$this->session->set_flashdata(
			'hapus_sukses',
			'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					 Data Telah Sukses Dihapus.
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button></div>'
		);
		redirect('admin/data_barang/index');
	}

	public function cari_barang()
	{
		$config['base_url']    = site_url('admin/data_barang/index');
		$config['total_rows']  = $this->db->count_all('barang');
		$config['per_page']    = 10;
		$config['uri_segment'] = 4;
		$choice                = $config["total_rows"] / $config['per_page'];
		$config["num_links"]   = floor($choice);

		$config['first_link']      = 'Hal.Pertama';
		$config['last_link']       = 'Hal.Terakhir';
		$config['next_link']       = 'Lanjut ';
		$config['prev_link']       = 'Sebelumnya';
		$config['full_tag_open']   = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']  = '</ul></nav></div>';
		$config['num_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']   = '</span></li>';
		$config['cur_tag_open']    = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']   = '</span></li>';
		$config['next_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close']  = '<span aria-hidden="true">&raquo</span></span</li>';
		$config['prev_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close']  = '</span></li>';
		$config['firt_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['firts_tag_close'] = '</span></li>';
		$config['last_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close']  = '</span></li>';

		$this->pagination->initialize($config);
		$data['page']       = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$data['pagination'] = $this->pagination->create_links();

		$data['supplier'] = $this->model_admin->data_supplier()->result();
		      $keyword    = $this->input->post('keyword');
		$data['barang']   = $this->model_admin->cari_barang($keyword, $config["per_page"], $data["page"]);
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/data_barang', $data);
		$this->load->view('admin/template/footer');
	}

	public function print_data_barang()
	{
		$data['barang'] = $this->model_admin->data_barang()->result();
		$this->load->view('admin/report/print_data_barang', $data);
	}
}
