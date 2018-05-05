<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


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
		$this->load->model('admin_m');

		$a =$this->session->userdata('id');

		$data['admin'] = $this->admin_m->get($a);

		if ($this->input->post('save_profile') != NULL) {
            $dat = array(
                'USERNAME_ADMIN' => $this->input->post('username'),
                'NAMA_ADMIN' => $this->input->post('nama'),
            );
            $admin = array(
                    'id' => $a,
                    'nama' => $dat['NAMA_ADMIN'],
                    'username' =>$dat['USERNAME_ADMIN']
                );
            $this->session->set_userdata($admin);

            $this->admin_m->save($dat, $a);
            redirect('profile');
        }

        
        if ($this->input->post('save_password') != NULL) {
            $dat = array(
                'PASSWORD_ADMIN' => $this->hash($this->input->post('password')),
            );
            $this->admin_m->save($dat, $a);
            echo "<script>alert('Password berhasil di update, silahkan login ulang untuk melihat perubahan.');</script>";
        }

		$data['subview'] = 'profile/index';
        $this->load->view('_layout_main', $data);		
	}

	public function hash($string)
	{
		return hash('md5', $string);
	}

}
