<?php

class Keranjang extends CI_Controller{

	public function index()
	{
		$this->load->view('public/template/header');
		$this->load->view('public/keranjang');
		$this->load->view('public/template/footer');
	}

	function hapus_keranjang($rowid)
    {
        if ($rowid=="all")
            {
                $this->cart->destroy();
            }
        else
            {
                $data = array('rowid' => $rowid,
                              'qty' =>0);
                $this->cart->update($data);
            }
        redirect('keranjang');
    }

    function bersihkan_keranjang()
    {
    $this->cart->destroy();
	redirect('keranjang');
    }

    function edit_keranjang($rowid)
    {
	    $data = array('rowid' => $rowid,
	                  'qty' => $this->input->post('qty')
	              );
	    $this->cart->update($data);
        redirect('keranjang');
	}

    function pembayaran()
    {
        $this->load->view('public/template/header');
        $this->load->view('public/pembayaran');
        $this->load->view('public/template/footer');
    }
	
}