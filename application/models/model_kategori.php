<?php

/**
 * 
 */
class Model_kategori extends CI_Model{
	
	public function data_anti_gores($limit, $start){
		return $this->db->get_where("barang",array('kategori_brg' => 'anti gores'), $limit, $start);
	} 

	public function data_case($limit, $start){
		return $this->db->get_where("barang",array('kategori_brg' => 'case'), $limit, $start);
	} 

	public function data_charger($limit, $start){
		return $this->db->get_where("barang",array('kategori_brg' => 'charger'), $limit, $start);
	} 

	public function data_headset($limit, $start){
		return $this->db->get_where("barang",array('kategori_brg' => 'headset'), $limit, $start);
	} 

	public function data_lainya($limit, $start){
		return $this->db->get_where("barang",array('kategori_brg' => 'Lainya'), $limit, $start);
	} 

	public function data_barang_diskon(){
		return $this->db->get_where("barang",array('tag' => 'diskon'));
	} 

}