<?php

class Data_pegawai extends CI_Controller{
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

// HALAMAN DATA PEGAWAI
	public function index()
	{
		$data['pegawai'] = $this->model_admin->data_pegawai()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/data_pegawai',$data);
		$this->load->view('admin/template/footer');

	}

// HALAMAN TAMBAH DATA PEAGAWAI
	public function tambah_pegawai()
	{
		$data['pegawai'] = $this->model_admin->data_pegawai()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/tambah_pegawai', $data);
		$this->load->view('admin/template/footer');

	}

// AKSI TAMBAH DATA PEGAWAI
	public function tambah_aksi()
	{
		$id_pegawai		= $this->input->post('id_pegawai');
		$password		= $this->input->post('password');
		$nama_lengkap	= $this->input->post('nama_lengkap');
		$alamat			= $this->input->post('alamat');
		$email			= $this->input->post('email');
		$no_hp			= $this->input->post('no_hp');
		$jabatan		= $this->input->post('jabatan');
		$foto  			= $_FILES['foto'];
		if ($foto){
 			$config['upload_path']   = './uploads/pegawai/';
    		$config['allowed_types'] = 'jpg|png|jpeg';
    		$config['file_name']     = $this->input->post('id_pegawai');

			$this->load->library('upload');
			$this->upload->initialize($config);

			
			if($this->upload->do_upload('foto')){
				$foto = $this->upload->data('file_name');
				$this->db->set('foto', $foto); 
			}else {
				echo "Upload Foto Gagal!";
			}
		}

		$data = array (
			'id_pegawai'   	=> $id_pegawai,
			'password' 		=> $password,
			'nama_lengkap'  => $nama_lengkap,
			'alamat'  		=> $alamat,
			'email'	    	=> $email,
			'no_hp'  		=> $no_hp,
			'jabatan' 		=> $jabatan
		);

		$this->model_admin->tambah($data, 'pegawai');
		redirect('admin/data_pegawai/index');
	}	

// AKSI EDIT PEGAWAI
	public function edit($id_pegawai)
	{
		$where = array('id_pegawai' =>$id_pegawai);
		$data['pegawai'] = $this->model_admin->edit($where, '
			pegawai')->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/edit_pegawai', $data);
		$this->load->view('admin/template/footer');
	}

	public function update(){
		$no				= $this->input->post('no');
		$id_pegawai		= $this->input->post('id_pegawai');
		$password		= $this->input->post('password');
		$nama_lengkap	= $this->input->post('nama_lengkap');
		$alamat			= $this->input->post('alamat');
		$email			= $this->input->post('email');
		$no_hp			= $this->input->post('no_hp');
		$jabatan		= $this->input->post('jabatan');
		$foto			= $_FILES['foto'];

		if ($foto){
 			$config['upload_path']   = './uploads/pegawai/';
    		$config['allowed_types'] = 'jpg|png|jpeg';
    		$config['file_name']     = $this->input->post('id_pegawai');
    		$config['overwrite']	 = true;

			$this->load->library('upload');
			$this->upload->initialize($config);

			
			if($this->upload->do_upload('foto')){
				$foto = $this->upload->data('file_name');
				$this->db->set('foto', $foto); 
			}else {
				echo "Upload Foto Gagal!";
			}
		}


		$data = array(

			'id_pegawai'   	=> $id_pegawai,
			'password' 		=> $password,
			'nama_lengkap'  => $nama_lengkap,
			'alamat'  		=> $alamat,
			'email'	   		=> $email,
			'no_hp'  		=> $no_hp,
			'jabatan' 		=> $jabatan
		);

		$where = array(
			'id_pegawai' => $id_pegawai
		);

		$this->model_admin->update($where,$data, 'pegawai');
		redirect('admin/data_pegawai/index');
	}

// AKSI HAPUS DATA PEGAWAI
	public function hapus($id_pegawai)
	{
		$where = array('id_pegawai' =>$id_pegawai);
		$this->model_admin->hapus($where, 'pegawai');
		redirect('admin/data_pegawai/index');
	}


}