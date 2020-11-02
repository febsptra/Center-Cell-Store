<?php

class Dashboard extends CI_Controller
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
			redirect('admin/auth/');
		}
	}

	public function index()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/admin_panel');
		$this->load->view('admin/template/footer');
	}

	public function sms()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/sms');
		$this->load->view('admin/template/footer');
	}

	public function kirimsms()
	{
		$mobile  = $this->input->post('tujuan');
		$message = $this->input->post('pesan');
		$data    = $this->input->post();

		unset($data['submit']);
		$msgencode = urlencode($message);
		$userkey   = "d10a35d7055f";
		$passkey   = "b7q38b1ust";
		$router    = "";

		$postdata = array(
			'authkey' => $userkey,
			'mobile'  => $mobile,
			'message' => $msgencode,
			'router'  => $router
		);
		$url = "https://reguler.zenziva.net/apps/smsapi.php?userkey=$userkey&passkey=$passkey&nohp=$mobile&pesan=$msgencode";

		$ch  = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => TRUE,
			CURLOPT_POST => TRUE,
			CURLOPT_POSTFIELDS => $postdata
		));

		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

		$output = curl_exec($ch);
		if (curl_errno($ch)) {
			echo "error" . curl_error($ch);
		}
		curl_close($ch);
		echo "pesan berhasil di kirim";
	}

	public function datatables()
	{
		$data['barang'] = $this->model_admin->data_barang1()->result();
		$data['supplier'] = $this->model_admin->data_supplier()->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/datatables', $data);
		$this->load->view('admin/template/footer');
	}
}
