<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_m');
	}

	public function login()
	{

		$this->load->view('_layout_login');
	}


	public function cek_login()
	{
		$user = array(
			'USERNAME_ADMIN' => $this->input->post('username'),
			'PASSWORD_ADMIN' => $this->hash($this->input->post('password'))
			);

		$result = $this->Admin_m->cek_login($user);

		if (count($result)) {
			$admin = array(
					'id' => $result[0]['ID_ADMIN'],
					'nama' => $result[0]['NAMA_ADMIN'],
					'username' =>$result[0]['USERNAME_ADMIN']
				);
			$this->session->set_userdata($admin);
			redirect('dashboard','refresh');
		}
		else
		{
			echo "<script>alert('salah')</script>";
			redirect('auth/login','refresh');
		}

		

		$this->load->view('_layout_login',$data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login','refresh');
	}

	public function hash($string)
	{
		return hash('md5', $string);
	}
}