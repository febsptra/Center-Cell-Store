<?php

class penjualan extends CI_Controller{

	public function input_data()
	{
		$this->load->view('public/template/header');
		$this->load->view('public/input_data_transaksi');
		$this->load->view('public/template/footer');
	}

	public function isi_data()
	{
		$kode_transaksi			= $this->input->post('kode_transaksi');
		$username				= $this->input->post('username');
		$nama_toko				= $this->input->post('nama_toko');
		$alamat					= $this->input->post('alamat');
		$kota					= $this->input->post('kota');
		$no_hp					= $this->input->post('no_hp');
		$jumlah_pembayaran		= $this->input->post('jumlah_pembayaran');

		$data = array (
			'kode_transaksi'   		=> $kode_transaksi,
			'username' 				=> $username,
			'nama_toko'  			=> $nama_toko,
			'alamat'  				=> $alamat,
			'kota'  				=> $kota,
			'no_hp'	    			=> $no_hp,
			'jumlah_pembayaran' 	=> $jumlah_pembayaran,
			'status_pembayaran' 	=> 'Belum Dibayar'
		);

		$this->model_public->tambah_penjualan($data,'penjualan');
		
		foreach ($this->cart->contents() as $items){
			$data = array(
				'kode_transaksi' => $kode_transaksi,
				'nama_brg'  	 => $items['name'],
				'hrg_jual'  	 => $items['price'],
				'laba'	  	     => $items['coupon'],
				'jumlah_jual'  	 => $items['qty'],
				'total_harga'  	 => $items['subtotal'],
				'total_laba'	 => $items['coupon']*$items['qty']
			);
			$this->model_public->tambah_penjualan($data,'detail_penjualan');
			$this->cart->destroy();
		}
		redirect('riwayat_transaksi');
	}
	
	public function pembayaran($kd_tr)
	{
		$where = array('kode_transaksi' => $kd_tr);
		$data['penjualan'] = $this->model_public->data_penjualan($where, 'penjualan')->result();
		$this->load->view('public/template/header');
		$this->load->view('public/input_pembayaran', $data);
		$this->load->view('public/template/footer');
	}

	public function bayar()
	{
		$kode_transaksi			= $this->input->post('kode_transaksi');
		$username				= $this->input->post('username');
		$nama_toko				= $this->input->post('nama_toko');
		$alamat					= $this->input->post('alamat');
		$kota					= $this->input->post('kota');
		$no_hp					= $this->input->post('no_hp');
		$tgl_pembayaran			= $this->input->post('tgl_pembayaran');
		$jumlah_pembayaran		= $this->input->post('jumlah_pembayaran');
		$an						= $this->input->post('an');
		$metode_pembayaran		= $this->input->post('metode_pembayaran');
		$foto  					= $_FILES['foto'];
		if ($foto){
 			$config['upload_path']   = './uploads/';
    		$config['allowed_types'] = 'jpg|png|jpeg';
    		$config['file_name']     = $this->input->post('kode_transaksi');

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
			'kode_transaksi'   		=> $kode_transaksi,
			'username' 				=> $username,
			'nama_toko'  			=> $nama_toko,
			'alamat'  				=> $alamat,
			'kota'  				=> $kota,
			'no_hp'	    			=> $no_hp,
			'tgl_pembayaran' 		=> $tgl_pembayaran,
			'jumlah_pembayaran' 	=> $jumlah_pembayaran,
			'an'				 	=> $an,
			'metode_pembayaran' 	=> $metode_pembayaran,
			'status_pembayaran' 	=> 'Menunggu Diferivikasi'
		);
		$this->model_public->tambah_penjualan($data,'penjualan_dibayar');
      	
      	$data = array('username' => $username);
	    $where = array('kode_transaksi' => $kode_transaksi);
	    $this->model_public->update($where,$data, 'detail_penjualan');
	    
        $where = array('kode_transaksi' => $kode_transaksi);
		$this->model_public->hapus_transaksi($where, 'penjualan');
		$this->session->set_flashdata('bayar_sukses',
					'<div class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
					 Terimakasih telah melakukan pembayaran, Barang akan langsung dikirim setelah pembayaran dikonfirmasi dan Status Transaksi Menjadi  "<b class="alert-link text-danger"> LUNAS </b>"
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button></div>');
		
		redirect('riwayat_transaksi');
	}

}