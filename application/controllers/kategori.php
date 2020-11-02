<?php

class Kategori extends CI_Controller{
	public function anti_gores()
	{
		// KODE PAGINATION
        $config['base_url']    = site_url('kategori/anti_gores');
		$config['total_rows']  = $this->db->count_all('barang');
		$config['per_page']	   = 12;
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
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) :0;
		$data['pagination'] = $this->pagination->create_links();
		// END KODE PAGINATION

		$data['anti_gores'] = $this->model_kategori->data_anti_gores($config["per_page"],$data["page"])->result();
		$this->load->view('public/template/header');
		$this->load->view('public/kategori/anti_gores', $data);
		$this->load->view('public/template/footer');
	}

	public function lainya()
	{
		// KODE PAGINATION
        $config['base_url']    = site_url('kategori/lainya');
		$config['total_rows']  = $this->db->count_all('barang');
		$config['per_page']	   = 12;
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
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) :0;
		$data['pagination'] = $this->pagination->create_links();
		// END KODE PAGINATION

		$data['batrai'] = $this->model_kategori->data_lainya($config["per_page"],$data["page"])->result();
		$this->load->view('public/template/header');
		$this->load->view('public/kategori/batrai', $data);
		$this->load->view('public/template/footer');
	}

	public function casee()
	{
		// KODE PAGINATION
        $config['base_url']    = site_url('kategori/casee');
		$config['total_rows']  = $this->db->count_all('barang');
		$config['per_page']	   = 12;
		$config['uri_segment'] = 3;
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
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) :0;
		$data['pagination'] = $this->pagination->create_links();
		// END KODE PAGINATION

		$data['case'] = $this->model_kategori->data_case($config["per_page"],$data["page"])->result();
		$this->load->view('public/template/header');
		$this->load->view('public/kategori/case', $data);
		$this->load->view('public/template/footer');
	}

	public function charger()
	{
		// KODE PAGINATION
        $config['base_url']    = site_url('kategori/charger');
		$config['total_rows']  = $this->db->count_all('barang');
		$config['per_page']	   = 12;
		$config['uri_segment'] = 3;
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
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) :0;
		$data['pagination'] = $this->pagination->create_links();
		// END KODE PAGINATION

		$data['charger'] = $this->model_kategori->data_charger($config["per_page"],$data["page"])->result();
		$this->load->view('public/template/header');
		$this->load->view('public/kategori/charger', $data);
		$this->load->view('public/template/footer');
	}

	public function headset()
	{
		// KODE PAGINATION
        $config['base_url']    = site_url('kategori/headset');
		$config['total_rows']  = $this->db->count_all('barang');
		$config['per_page']	   = 12;
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

		$data['headset'] = $this->model_kategori->data_headset($config["per_page"],$data["page"])->result();
		$this->load->view('public/template/header');
		$this->load->view('public/kategori/headset', $data);
		$this->load->view('public/template/footer');
	}



}