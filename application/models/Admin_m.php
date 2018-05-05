<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_m extends CI_Model {

	
	function cek_login($user)
		{
			$query = $this->db->get_where('admin', $user);
			return $query->result_array();
		}

	public function get($a)
	{
		$qwe = $this->db->query("select * from admin where ID_ADMIN = ".$a);
		return $qwe->row();
	}

	public function save($dat, $a)
	{
		$this->db->where('ID_ADMIN', $a);
		$this->db->update('admin', $dat);
	}
}
