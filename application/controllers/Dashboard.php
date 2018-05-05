<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('nama') == "") 
		{
			redirect('auth/login','refresh');
		}
	}
	
	public function index()
	{
		$data['subview'] = 'dashboard/index';
		$this->load->view('_layout_main', $data);
	}
}