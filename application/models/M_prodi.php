<?php
class M_prodi extends CI_Model{

	function get_all_prodi(){
		$query=$this->db->query("SELECT * FROM prodi ORDER BY id DESC");
		return $query;	
	}

	function saveProdi($kode_prodi,$nama_prodi,$kode_fakultas){
		$query=$this->db->query("INSERT INTO prodi (kode_prodi,nama_prodi,kode_fakultas) VALUES ('$kode_prodi','$nama_prodi', '$kode_fakultas')");
		return $query;
	}

	function update($id,$kode_prodi,$nama_prodi, $kode_fakultas){
		$query=$this->db->query("UPDATE prodi set kode_prodi='$kode_prodi',nama_prodi='$nama_prodi', kode_fakultas='$kode_fakultas' where id='$id'");
		return $query;
	}
	

	function deleteProdi($id){
		$query=$this->db->query("DELETE FROM prodi where id='$id'");
		return $query;
	}

	function getProdi($id){
		$query=$this->db->query("SELECT * FROM prodi where id='$id'");
		return $query;
	}


}
