<?php
class smp_model extends CI_Model{
    
    function cari_user($username, $password){
		$query = $this->db->query("select * from user where username='$username' and password= '$password'");
		return $query;
	}
	
	function listsuratmasuk(){
		$listsuratmasuk = $this->db->query("select * from surat WHERE id_jenis='1'");
		return $listsuratmasuk;
	}

	function listsuratkeluar(){
		$listsuratkeluar = $this->db->query("select * from surat WHERE id_jenis='2'");
		return $listsuratkeluar;
	}
}