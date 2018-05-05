<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Probabilitas_m extends CI_Model {

	function jmkecanduan($id)
	{
		$user = count($this->db->query('select * from data_pasien_sampling where KECANDUAN_PASIEN_SAMPLING ='.$id)->result());
		return $user;

	}
	function coba($id){
		$coba = $this->db->query('select * from data_pasien_sampling where KECANDUAN_PASIEN_SAMPLING ='.$id)->result_array();
		return $coba;
	}

	function sumassist($id)
	{
		$assist = $this->db->query("select sum(ASSIST_PASIEN_SAMPLING) from data_pasien_sampling where KECANDUAN_PASIEN_SAMPLING =" .$id)->result_array();
		return $assist;
	}

	function sumdast($id)
	{
		$dast = $this->db->query("select sum(DAST_PASIEN_SAMPLING) from data_pasien_sampling where KECANDUAN_PASIEN_SAMPLING =" .$id)->result_array();
		return $dast;
	}

	function alldata()
	{
		$aldata ['data'] = $this->db->get('data_pasien_sampling')->result_array();
		return $aldata;
	}

}