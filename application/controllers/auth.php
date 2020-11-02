<?php

class Auth extends CI_Controller{
	
	public function index(){
	    if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
	    redirect('dashboard'); // Redirect ke page welcome
	    $this->load->view('login'); // Load view login.php
	    $this->load->view('public/template/footer');
 	}


	public function login(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login');
			$this->load->view('public/template/footer');
		}else{
		$auth = $this->model_auth->cek_login();

		if($auth == FALSE)
			{
					$this->session->set_flashdata('pesan',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					 Username atau Password yang anda masukan salah!
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button></div>');
				redirect('auth/login');
			}else {
				$this->session->set_userdata('id_customer',$auth->id_customer);
				$this->session->set_userdata('username',$auth->username);
				$this->session->set_userdata('password',$auth->password);
				$this->session->set_userdata('nama_toko',$auth->nama_toko);
				$this->session->set_userdata('nama_pemilik',$auth->nama_pemilik);
				$this->session->set_userdata('alamat',$auth->alamat);
				$this->session->set_userdata('kota',$auth->kota);
				$this->session->set_userdata('email',$auth->email);
				$this->session->set_userdata('no_hp',$auth->no_hp);
				$this->session->set_userdata('foto',$auth->foto);
				redirect('home');
			}
		
		}
	}

	public function register(){
		$this->form_validation->set_rules('username','username','is_unique[customer.username]',['is_unique' => 'username sudah terdaftar, silahkan coba yang lain']);
		$this->form_validation->set_rules('email','email','is_unique[customer.email]',['is_unique' => 'email sudah terdaftar, silahkan coba yang lain']);
		if($this->form_validation->run() == FALSE){
		$this->load->view('register'); // Load view register.php
		$this->load->view('public/template/footer');
		} else {
			$foto = $_FILES['foto'];
			if ($foto){
	 			$config['upload_path']   = './uploads/customer/';
	    		$config['allowed_types'] = 'jpg|png|jpeg';
	    		$config['file_name']     = $this->input->post('username');
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
				'Username'  	=> $this->input->post('username'),
				'password'  	=> $this->input->post('password'),
				'nama_toko' 	=> $this->input->post('nama_toko'),
				'nama_pemilik'  => $this->input->post('nama_pemilik'),
				'alamat' 	 	=> $this->input->post('alamat'),
				'kota' 			=> $this->input->post('kota'),
				'email'  		=> $this->input->post('email'),
				'no_hp' 		=> $this->input->post('no_hp'),
				'foto' 			=> $foto
			);
			$this->db->insert('customer',$data);
			redirect('auth');
		}
 	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}


}


