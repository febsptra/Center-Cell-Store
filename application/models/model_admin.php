<?php

class Model_admin extends CI_Model{
	 public function __construct()
    {
        $this->load->database();
    }

    // MENGAMBIL DATA BARANG DARI DATABASE
	public function data_barang_home($limit, $start){
		$this->db->order_by('no_brg', 'DESC');
		return $this->db->get('barang', $limit, $start);
	}

	// MENGAMBIL DATA BARANG DARI DATABASE
	public function data_barang(){
		$this->db->order_by('no_brg', 'DESC');
		return $this->db->get('barang');
	}

	// MENGAMBIL DATA BARANG DARI DATABASE
	public function data_stok_barang(){
		$this->db->order_by('stok_brg', 'ASC');
		return $this->db->get('barang');
	}

	// MENGAMBIL DATA CUSTOMER DARI DATABASE
	public function data_customer(){
		$this->db->order_by('id_customer', 'DESC');
		return $this->db->get('customer');
	}

	// MENGAMBIL DATA SUPPLIER DARI DATABASE
	public function data_supplier(){
		return $this->db->get('supplier');
	}

	// MENGAMBIL DATA PEGAWAI DARI DATABASE
	public function data_pegawai(){
		$this->db->order_by('no', 'DESC');
		return $this->db->get('pegawai');
	}

	// MENGAMBIL DATA PEMBELIAN DARI DATABASE
	public function data_pembelian()
	{
		$this->db->order_by('no_pembelian', 'DESC');
		return $this->db->get('pembelian');
	}

	// MENGAMBIL DATA PENJUALAN DARI DATABASE
	public function data_penjualan(){
		$this->db->order_by('no', 'DESC');
		return $this->db->get('penjualan_dibayar');
	}

	// MENGAMBIL DATA PENJUALAN+DETAIL DARI DATABASE
	public function detail_penjualan($where,$stable){
		return $this->db->get_where($stable,$where);
	}

	// MENGAMBIL DATA PENJUALAN MENUNGGU
	public function menunggu(){
		$this->db->order_by('no', 'DESC');
		return $this->db->get_where("penjualan_dibayar",array('status_pembayaran' => 'Menunggu Diferivikasi'));
	}

	public function jumlah_menunggu()
	{
		$sql = "SELECT  count(if(status_pembayaran='Menunggu Diferivikasi', no, NULL)) as total
				FROM penjualan_dibayar";
		$result = $this->db->query($sql);
		return $result->row();
	}

	// MENGAMBIL DATA PENJUALAN Lunas
	public function lunas(){
		$this->db->order_by('no', 'DESC');
		return $this->db->get_where("penjualan_dibayar",array('status_pembayaran' => 'Lunas'));
	}  

	// MENGAMBIL DATA RETUR DARI DATABASE
	public function data_retur(){
		$this->db->order_by('no', 'DESC');
		return $this->db->get_where("retur_barang",array('status' => 'Menunggu Diproses'));
	}
	public function data_retur_sudah(){
		$this->db->order_by('no', 'DESC');
		return $this->db->get_where("retur_barang",array('status' => 'Sudah Diproses'));
	}

	// MENGAMBIL DATA RETUR DARI DATABASE
	public function data_rusak(){
		$this->db->order_by('no', 'DESC');
		return $this->db->get('barang_rusak');
	}

	// MENGAMBIL DATA PENJUALAN TERBANYK BARANG DARI DATABASE
	public function penjualan_terbanyak(){
		$this->db->order_by('bp', 'DESC');
		return $this->db->get('barang');
	}

	// MENGAMBIL DATA PENJUALAN TERSERING BARANG DARI DATABASE
	public function penjualan_tersering(){
		$this->db->order_by('sp', 'DESC');
		return $this->db->get('barang');
	}


	// FUNGSI TAMBAH DATA
	public function tambah($data,$stable){
		$this->db->insert($stable,$data);
	}

	// FUNGSI EDIT DATA
	public function edit($where,$stable){
		return $this->db->get_where($stable,$where);
	}

	// FUNGSI UPDATE DATA
	public function update($where,$data,$stable){
		$this->db->where($where);
		$this->db->update($stable,$data);
	}
	
	// FUNGSI HAPUS DATA
	public function hapus($where,$stable){
		$this->db->where($where);
		$this->db->delete($stable);
	}

	// FUNGSI CARI DATA BARANG
	public function cari_barang($keyword, $limit, $start){
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->like('nama_supplier', $keyword);
		$this->db->or_like('kategori_brg', $keyword);
		$this->db->or_like('nama_brg', $keyword);
		$this->db->or_like('hrg_beli', $keyword);
		$this->db->or_like('hrg_jual', $keyword);
		$this->db->or_like('laba', $keyword);
		$this->db->or_like('stok_brg', $keyword);
		$this->db->or_like('keterangan', $keyword);
		return $this->db->get()->result();
	}

	// FUNGSI CARI DATA TRANSAKSI PENJUALAN
	public function cari_transaksi($daterange){
		$this->db->select('*');
		$this->db->from('penjualan_dibayar');
		$this->db->where('tgl_pembayaran >=', $daterange[0]);
		$this->db->where('tgl_pembayaran <=', $daterange[1]);
		return $this->db->get()->result();
	}

	// FUNGSI CARI DATA TRANSAKSI PEMEBELIAN
	public function cari_pembelian($daterange){
		$this->db->select('*');
		$this->db->from('pembelian');
		$this->db->where('tgl_pembelian >=', $daterange[0]);
		$this->db->where('tgl_pembelian <=', $daterange[1]);
		return $this->db->get()->result();
	}

	// FUNGSI GET DATA KEUNTUNGAN
	public function keuntungan(){
		$this->db->order_by('tgl_detail', 'DESC');
		return $this->db->get('detail_penjualan');
	}

	public function keuntungan_tgl($daterange){
		$this->db->order_by('tgl_detail', 'DESC');
		$this->db->select('*');
		$this->db->from('detail_penjualan');
		$this->db->where('tgl >=', $daterange[0]);
		$this->db->where('tgl <=', $daterange[1]);
		return $this->db->get()->result();
	}

	// FUNGSI GET DATA KERUGIAN
	public function kerugian(){
		$this->db->order_by('tgl', 'DESC');
		return $this->db->get('barang_rusak');
	}

	public function kerugian_tgl($daterange){
		$this->db->order_by('tgl_detail', 'DESC');
		$this->db->select('*');
		$this->db->from('barang_rusak');
		$this->db->where('tgl >=', $daterange[0]);
		$this->db->where('tgl <=', $daterange[1]);
		return $this->db->get()->result();
	}


	// FUNGSI DETAIL BARANG (HALAMAN HOME)
	public function detail_brg($no_brg)
	{
		$result = $this->db->where('no_brg',$no_brg)->get('barang');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	// FUNGSI CEK KODE PEMBELIAN (UNTUK GENERATE KODE PEMBELIAN)
	public function cekkodepembelian()
    {
        $query = $this->db->query("SELECT MAX(no_pembelian) as kodepembelian from pembelian");
        $hasil = $query->row();
        return $hasil->kodepembelian;
    }

    public $no_pembelian;
    // END - FUNGSI CEK KODE PEMBELIAN (UNTUK GENERATE KODE PEMBELIAN)

}