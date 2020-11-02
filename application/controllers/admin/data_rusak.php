<?php

class Data_rusak extends CI_Controller{
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
		// KODE PAGINATION
        $config['base_url']    = site_url('admin/data_pembelian/tambah_pembelian');
		$config['total_rows']  = $this->db->count_all('barang');
		$config['per_page']	   = 10;
		$config['uri_segment'] = 4;
		$choice				   = $config["total_rows"] / $config['per_page'];
		$config["num_links"]   = floor($choice);

		$config['first_link'] = 'Hal.Pertama';
		$config['last_link'] = 'Hal.Terakhir';
		$config['next_link'] = 'Lanjut ';
		$config['prev_link'] = 'Sebelumnya';
		$config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '</span></li>';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '<span aria-hidden="true">&raquo</span></span</li>';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['firt_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['firts_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) :0;
		$data['pagination'] = $this->pagination->create_links();
		// END KODE PAGINATION
		
		$data['rusak'] = $this->model_admin->data_rusak($config["per_page"],$data["page"])->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/data_rusak',$data);
		$this->load->view('admin/template/footer');

	}

	// HALAMAN TAMBAH DATA rusak
	public function tambah_rusak()
	{
		// KODE PAGINATION
        $config['base_url']    = site_url('admin/data_pembelian/tambah_pembelian');
		$config['total_rows']  = $this->db->count_all('barang');
		$config['per_page']	   = 10;
		$config['uri_segment'] = 4;
		$choice				   = $config["total_rows"] / $config['per_page'];
		$config["num_links"]   = floor($choice);

		$config['first_link'] = 'Hal.Pertama';
		$config['last_link'] = 'Hal.Terakhir';
		$config['next_link'] = 'Lanjut ';
		$config['prev_link'] = 'Sebelumnya';
		$config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '</span></li>';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '<span aria-hidden="true">&raquo</span></span</li>';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['firt_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['firts_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) :0;
		$data['pagination'] = $this->pagination->create_links();
		// END KODE PAGINATION

        $data['rusak'] = $this->model_admin->data_rusak($config["per_page"],$data["page"])->result();
        $data['barang'] = $this->model_admin->data_barang($config["per_page"],$data["page"])->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/tambah_rusak', $data);
		$this->load->view('admin/template/footer');
	}

	// AKSI TAMBAH DATA RUSAK
	public function tambah_aksi()
	{
		$kategori_brg		= $this->input->post('kategori_brg');
		$nama_brg			= $this->input->post('nama_brg');
		$harga_beli 		= $this->input->post('harga_beli');
		$jumlah_rusak		= $this->input->post('jumlah_rusak');
		$total_harga		= $this->input->post('total_harga');		

		$data = array (
			'kategori_brg'		=> $kategori_brg,
			'nama_brg'	    	=> $nama_brg,
			'harga_beli' 		=> $harga_beli,
			'jumlah_rusak'  	=> $jumlah_rusak,
			'total_harga' 		=> $total_harga
		);

		$this->model_admin->tambah($data, 'barang_rusak');
		redirect('admin/data_rusak');
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['barang'] = $this->model_admin->cari_barang($keyword);
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/tambah_rusak', $data);
		$this->load->view('admin/template/footer');
	}

}