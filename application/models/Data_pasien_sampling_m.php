<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pasien_sampling_m extends CI_Model {

	function all()
	{
		$all = $this->db->get('data_pasien_sampling');
		return $all->result();
	}

	public function delete($id)
	{
		$this->db->where('ID_PASIEN_SAMPLING', $id);
		$this->db->delete('data_pasien_sampling');
	}

	public function save($simpan)
	{
		$this->db->insert('data_pasien_sampling', $simpan);
	}

	public function increment()
	{
		$query = $this->db->query("select max(ID_PASIEN_SAMPLING) as max from data_pasien_sampling")->row('max');
		return $query + 1;
	}
}