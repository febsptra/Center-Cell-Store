<?php

class model_public extends CI_Model{

	public function data_penjualan($where,$stable){
		return $this->db->get_where($stable,$where);
	}

	public function tambah_penjualan($data,$stable){
		$this->db->insert($stable,$data);
	}

	public function tambah_retur($data,$stable){
		$this->db->insert($stable,$data);
	}

    public function riwayat_transaksi($username){
		$this->db->order_by('no', 'DESC');
		$this->db->select('*');
		$this->db->from('penjualan');
		$this->db->like('username', $username);
		return $this->db->get()->result();
	}

	public function transaksi_dibayar($username){
		$this->db->order_by('no', 'DESC');
		$this->db->select('*');
		$this->db->from('penjualan_dibayar');
		$this->db->like('username', $username);
		return $this->db->get()->result();
	}

	public function riwayat_barang($username){
		$this->db->order_by('no_transaksi', 'DESC');
		$this->db->distinct();
		$this->db->select('nama_brg');
		$this->db->from('detail_penjualan');
		$this->db->like('username', $username);
		return $this->db->get()->result();
	}

	public function riwayat_retur($id_customer){
		$this->db->order_by('no', 'DESC');
		$this->db->select('*');
		$this->db->from('retur_barang');
		$this->db->like('id_customer', $id_customer);
		return $this->db->get()->result();
	}

	public function hapus_transaksi($where,$stable){
		$this->db->where($where);
		$this->db->delete($stable);
	}

	public function cek_transaksi($kd_tr){
		$this->db->select('*');
		$this->db->from('penjualan');
		$this->db->like('kode_transaksi', $kd_tr);
		return $this->db->get()->result();
	}

	// FUNGSI UPDATE DATA
	public function update($where,$data,$stable){
		$this->db->where($where);
		$this->db->update($stable,$data);
	}

}