<?php

class Home extends CI_Controller
{

	public function index()
	{
		// KODE PAGINATION
		$config['base_url']    = site_url('home/index');
		$config['total_rows']  = $this->db->count_all('barang');
		$config['per_page']    = 12;
		$config['uri_segment'] = 3;
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
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['pagination'] = $this->pagination->create_links();
		// END KODE PAGINATION
		$data['diskon'] = $this->model_kategori->data_barang_diskon()->result();
		$data['barang'] = $this->model_admin->data_barang_home($config["per_page"], $data["page"])->result();
		$this->load->view('public/template/header');
		$this->load->view('home', $data);
		$this->load->view('public/template/footer');
	}

	public function detail($no_brg)
	{
		$data['barang'] = $this->model_admin->detail_brg($no_brg);
		$this->load->view('public/template/header');
		$this->load->view('public/detail', $data);
		$this->load->view('public/template/footer');
	}

	public function tambah_keranjang()
	{
		$id     = $this->input->post('id');
		$qty    = $this->input->post('qty');
		$price  = $this->input->post('price');
		$coupon = $this->input->post('coupon');
		$name   = $this->input->post('name');
		$data   = array(
			'id'     => $id,
			'qty'    => $qty,
			'price'  => $price,
			'coupon' => $coupon,
			'name'   => $name
		);

		$this->cart->insert($data);
		$this->session->set_flashdata(
			'tambah_keranjang_sukses',
			'<div class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
					 Data berhasil ditambahkan kedalam <a href="keranjang" class="alert-link text-danger">Keranjang !</a>
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button></div>'
		);
		redirect('keranjang');
	}
}
