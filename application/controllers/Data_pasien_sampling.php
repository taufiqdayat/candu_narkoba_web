<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pasien_sampling extends CI_Controller {

	 public function __construct()
    {
        parent::__construct();
        $this->load->model('data_pasien_sampling_m');
        if ($this->session->userdata('nama') == "") 
		{
			redirect('auth/login','refresh');
		}
    }
	
	public function index()
	{

		$data['all'] = $this->data_pasien_sampling_m->all();


		$data['subview'] = 'data_pasien_sampling/index';
		$this->load->view('_layout_main', $data);
	}

	public function delete($id)
	{
		$this->data_pasien_sampling_m->delete($id);
        redirect('data_pasien_sampling');
	}

	public function manual()
	{
		$data['subview'] = 'data_pasien_sampling/addmanual';
		$this->load->view('_layout_main', $data);
	}

	public function nbc()
	{
		$this->load->model('data_pasien_sampling_m');

		$simpan = array(
        	'ID_PASIEN_SAMPLING' => $this->data_pasien_sampling_m->increment(),
            'ID_ADMIN' => $this->session->userdata('id'),
            'NAMA_PASIEN_SAMPLING' => $this->input->post('nama'),
            'UMUR_PASIEN_SAMPLING' => $this->input->post('umur'),
            'JK_PASIEN_SAMPLING' => $this->input->post('jk'),
            'PENDIDIKAN_PASIEN_SAMPLING' => $this->input->post('pendidikan'),
            'FAKTOR_PEMICU_PASIEN_SAMPLING' => $this->input->post('faktor'),
            'OVERDOSIS_PASIEN_SAMPLING' => $this->input->post('overdosis'),
            'CARA_PENGGUNAAN_PASIEN_SAMPLING' => $this->input->post('cara'),
            'EKONOMI_PASIEN_SAMPLING' => $this->input->post('ekonomi'),
            'ASSIST_PASIEN_SAMPLING' => $this->input->post('assist'),
            'DAST_PASIEN_SAMPLING' => $this->input->post('dast'),
            'KECANDUAN_PASIEN_SAMPLING' => $this->input->post('kecanduan')
        );
		$this->data_pasien_sampling_m->save($simpan);
		
        	echo "<script>alert('sukses');</script>";
       redirect('Data_pasien_sampling','refresh');

	}
}