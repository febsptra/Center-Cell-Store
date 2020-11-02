<?php

class Login extends CI_Controller
{

	public function index()
	{
		if ($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
			redirect('dashboard'); // Redirect ke page welcome
		$this->load->view('admin/login'); // Load view login.php
		$this->load->view('admin/template/footer');
	}


	public function masuk()
	{
		$auth = $this->model_auth->cek_login_admin();
		if ($auth == FALSE) {
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					 Username atau Password yang anda masukan salah!
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button></div>'
			);
			redirect('admin/auth/');
		} else {
			$this->session->set_userdata('id_pegawai', $auth->id_pegawai);
			$this->session->set_userdata('password', $auth->password);
			$this->session->set_userdata('nama_lengkap', $auth->nama_lengkap);
			$this->session->set_userdata('alamat', $auth->alamat);
			$this->session->set_userdata('email', $auth->email);
			$this->session->set_userdata('no_hp', $auth->no_hp);
			$this->session->set_userdata('foto', $auth->foto);
			$this->session->set_userdata('jabatan', $auth->jabatan);
			redirect('admin/dashboard');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}
}
