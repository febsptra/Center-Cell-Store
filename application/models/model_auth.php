<?php

class Model_auth extends CI_Model{

	public function cek_login()
	{
		$username =set_value('username');
		$password =set_value('password');

		$result = $this->db->where('username',$username)
						  ->where('password',$password)
					      ->limit(1)
					      ->get('customer');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}

	public function cek_login_admin()
	{
		$id_pegawai =set_value('id_pegawai');
		$password =set_value('password');

		$result = $this->db->where('id_pegawai',$id_pegawai)
						  ->where('password',$password)
					      ->limit(1)
					      ->get('pegawai');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	} 


}