<?php
class smp_model extends CI_Model{
    
    function cari_user($username, $password){
		$query = $this->db->query("select * from user where username='$username' and password= '$password'");
		return $query;
	}
	
	function listsuratmasuk(){
		$listsuratmasuk = $this->db->query("select * from surat WHERE id_kategori='1'");
		return $listsuratmasuk;
	}

	function listsuratkeluar(){
		$listsuratkeluar = $this->db->query("select * from surat WHERE id_kategori='2'");
		return $listsuratkeluar;
	}

	function inputsurat(){
		$arraydata = array(
			'nomor_surat'=> $this->input->post('nomor'),
			'id_jenis'=> $this->input->post('jenis'),
			'id_kategori'=> $this->input->post('kategori'),
			'perihal'=> $this->input->post('perihal'),
			'nama_pengirim'=> $this->input->post('pengirim'),
			'alamat_pengirim'=> $this->input->post('alamat_pengirim'),
			'isi'=> $this->input->post('isi'),
			'tanggal_surat'=> $this->input->post('tgl_surat'),
			'dokumen'=> $this->input->post('fileToUpload'));

		$this->db->insert('surat',$arraydata);
	}

	function inputkeluar(){
		$arraydata = array(
			'nomor_surat'=> $this->input->post('nomor'),
			'id_jenis'=> $this->input->post('jenis'),
			'id_kategori'=> $this->input->post('kategori'),
			'perihal'=> $this->input->post('perihal'),
			'nama_penerima'=> $this->input->post('penerima'),
			'alamat_penerima'=> $this->input->post('alamat'),
			'isi'=> $this->input->post('isi'),
			'tanggal_surat'=> $this->input->post('tgl_srt'),
			'dokumen'=> $this->input->post('fileToUpload'));

		$this->db->insert('surat',$arraydata);
	}
}