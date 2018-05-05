<?php 	defined('BASEPATH') OR exit('No direct script access allowed');

class Probabilitas extends CI_Controller {

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
		$this->load->model('probabilitas_m');
		
		$kecanduan = array(
			//data
			'user' 		=> $this->probabilitas_m->jmkecanduan(1),
			'beuser' 	=> $this->probabilitas_m->jmkecanduan(2),  
			'addict' 	=> $this->probabilitas_m->jmkecanduan(3),

			//faktor
			'druser'	=> $this->probabilitas_m->jmkecanduan("1 && FAKTOR_PEMICU_PASIEN_SAMPLING = 'Diri'"),
			'drbeuser'	=> $this->probabilitas_m->jmkecanduan("2 && FAKTOR_PEMICU_PASIEN_SAMPLING = 'Diri'"),
			'draddict'	=> $this->probabilitas_m->jmkecanduan("3 && FAKTOR_PEMICU_PASIEN_SAMPLING = 'Diri'"),

			'fkuser'	=> $this->probabilitas_m->jmkecanduan("1 && FAKTOR_PEMICU_PASIEN_SAMPLING = 'Faktor Ketersediaan'"),
			'fkbeuser'	=> $this->probabilitas_m->jmkecanduan("2 && FAKTOR_PEMICU_PASIEN_SAMPLING = 'Faktor Ketersediaan'"),
			'fkaddict'	=> $this->probabilitas_m->jmkecanduan("3 && FAKTOR_PEMICU_PASIEN_SAMPLING = 'Faktor Ketersediaan'"),

			'lkuser'	=>$this->probabilitas_m->jmkecanduan("1 && FAKTOR_PEMICU_PASIEN_SAMPLING = 'Lingkungan'"),
			'lkbeuser'	=>$this->probabilitas_m->jmkecanduan("2 && FAKTOR_PEMICU_PASIEN_SAMPLING = 'Lingkungan'"),
			'lkaddict'	=>$this->probabilitas_m->jmkecanduan("3 && FAKTOR_PEMICU_PASIEN_SAMPLING = 'Lingkungan'"),

			//overdosis
			'yuser'		=>$this->probabilitas_m->jmkecanduan("1 && OVERDOSIS_PASIEN_SAMPLING = 'Ya'"),
			'ybeuser'	=>$this->probabilitas_m->jmkecanduan("2 && OVERDOSIS_PASIEN_SAMPLING = 'Ya'"),
			'yaddict'	=>$this->probabilitas_m->jmkecanduan("3 && OVERDOSIS_PASIEN_SAMPLING = 'Ya'"),

			'tuser'		=>$this->probabilitas_m->jmkecanduan("1 && OVERDOSIS_PASIEN_SAMPLING = 'Tidak'"),
			'tbeuser'	=>$this->probabilitas_m->jmkecanduan("2 && OVERDOSIS_PASIEN_SAMPLING = 'Tidak'"),
			'taddict'	=>$this->probabilitas_m->jmkecanduan("3 && OVERDOSIS_PASIEN_SAMPLING = 'Tidak'"),

			//cara penggunaan
			'dhuser'	=>$this->probabilitas_m->jmkecanduan("1 && CARA_PENGGUNAAN_PASIEN_SAMPLING = 'Dihisap'"),
			'dhbeuser'	=>$this->probabilitas_m->jmkecanduan("2 && CARA_PENGGUNAAN_PASIEN_SAMPLING = 'Dihisap'"),
			'dhaddict'	=>$this->probabilitas_m->jmkecanduan("3 && CARA_PENGGUNAAN_PASIEN_SAMPLING = 'Dihisap'"),

			'dsuser'	=>$this->probabilitas_m->jmkecanduan("1 && CARA_PENGGUNAAN_PASIEN_SAMPLING = 'Disuntik'"),
			'dsbeuser'	=>$this->probabilitas_m->jmkecanduan("2 && CARA_PENGGUNAAN_PASIEN_SAMPLING = 'Disuntik'"),
			'dsaddict'	=>$this->probabilitas_m->jmkecanduan("3 && CARA_PENGGUNAAN_PASIEN_SAMPLING = 'Disuntik'"),

			'dtuser'	=>$this->probabilitas_m->jmkecanduan("1 && CARA_PENGGUNAAN_PASIEN_SAMPLING = 'Ditelan'"),
			'dtbeuser'	=>$this->probabilitas_m->jmkecanduan("2 && CARA_PENGGUNAAN_PASIEN_SAMPLING = 'Ditelan'"),
			'dtaddict'	=>$this->probabilitas_m->jmkecanduan("3 && CARA_PENGGUNAAN_PASIEN_SAMPLING = 'Ditelan'"),

			//ekonomi
			'muser'		=>$this->probabilitas_m->jmkecanduan("1 && EKONOMI_PASIEN_SAMPLING = 'M'"),
			'mbeuser'	=>$this->probabilitas_m->jmkecanduan("2 && EKONOMI_PASIEN_SAMPLING = 'M'"),
			'maddict'	=>$this->probabilitas_m->jmkecanduan("3 && EKONOMI_PASIEN_SAMPLING = 'M'"),

			'mauser'	=>$this->probabilitas_m->jmkecanduan("1 && EKONOMI_PASIEN_SAMPLING = 'MA'"),
			'mabeuser'	=>$this->probabilitas_m->jmkecanduan("2 && EKONOMI_PASIEN_SAMPLING = 'MA'"),
			'maaddict'	=>$this->probabilitas_m->jmkecanduan("3 && EKONOMI_PASIEN_SAMPLING = 'MA'"),

			'mkuser'	=>$this->probabilitas_m->jmkecanduan("1 && EKONOMI_PASIEN_SAMPLING = 'MK'"),
			'mkbeuser'	=>$this->probabilitas_m->jmkecanduan("2 && EKONOMI_PASIEN_SAMPLING = 'MK'"),
			'mkaddict'	=>$this->probabilitas_m->jmkecanduan("3 && EKONOMI_PASIEN_SAMPLING = 'MK'"),

			//assist & dast
			'asuser'	=>$this->probabilitas_m->sumassist(1),
			'asbeuser'	=>$this->probabilitas_m->sumassist(2),
			'asaddict'	=>$this->probabilitas_m->sumassist(3),

			'dauser'	=>$this->probabilitas_m->sumdast(1),
			'dabeuser'	=>$this->probabilitas_m->sumdast(2),
			'daaddict'	=>$this->probabilitas_m->sumdast(3),
			);


		$meanuser = $kecanduan['user']/3;
		$pictcol = $this->probabilitas_m->alldata();

		$a22 = $this->probabilitas_m->coba(1);
		$a8  = $this->probabilitas_m->coba(2);
		$a3  = $this->probabilitas_m->coba(3);
		
		$i3 = $kecanduan['asuser'][0]['sum(ASSIST_PASIEN_SAMPLING)']/$kecanduan['user'];
		$i4	= $kecanduan['asbeuser'][0]['sum(ASSIST_PASIEN_SAMPLING)']/$kecanduan['beuser'];
		$i5 = $kecanduan['asaddict'][0]['sum(ASSIST_PASIEN_SAMPLING)']/$kecanduan['addict'];
		$i7 = $kecanduan['dauser'][0]['sum(DAST_PASIEN_SAMPLING)']/$kecanduan['user'];
		$i8 = $kecanduan['dabeuser'][0]['sum(DAST_PASIEN_SAMPLING)']/$kecanduan['beuser'];
		$i9 = $kecanduan['daaddict'][0]['sum(DAST_PASIEN_SAMPLING)']/$kecanduan['addict'];

			$ja22 = 0;
			$ja8 = 0;
			$ja3 = 0;
			$jc22  = 0;
			$jc8 = 0;
			$jc3 = 0;


			for ($i=0; $i <$kecanduan['user'] ; $i++) { 
				$ja22 += pow(($a22[$i]['ASSIST_PASIEN_SAMPLING']-$i3),2);
				$jc22 += pow(($a22[$i]['DAST_PASIEN_SAMPLING']-$i7),2);
			}

			for ($i=0; $i <$kecanduan['beuser'] ; $i++) { 
				$ja8 += pow(($a8[$i]['ASSIST_PASIEN_SAMPLING']-$i4),2);
				$jc8 += pow(($a8[$i]['DAST_PASIEN_SAMPLING']-$i8),2);
			}

			for ($i=0; $i <$kecanduan['addict'] ; $i++) { 
				$ja3 += pow(($a3[$i]['ASSIST_PASIEN_SAMPLING']-$i5),2);
				$jc3 += pow(($a3[$i]['DAST_PASIEN_SAMPLING']-$i9),2);
			}

		$data['asda'] = array(
							'j3' => number_format(sqrt($ja22/($kecanduan['user']-1)),2),
							'j4' => number_format(sqrt($ja8/($kecanduan['beuser']-1)),2),
							'j5' => number_format(sqrt($ja3/($kecanduan['addict']-1)),2),
							'j7' => number_format(sqrt($jc22/($kecanduan['user']-1)),2),
							'j8' => number_format(sqrt($jc8/($kecanduan['beuser']-1)),2),
							'j9' => number_format(sqrt($jc3/($kecanduan['addict']-1)),2),

							'k3' => number_format($ja22/($kecanduan['user']-1),2),
							'k4' => number_format($ja8/($kecanduan['beuser']-1),2),
							'k5' => number_format($ja3/($kecanduan['addict']-1),2),
							'k7' => number_format($jc22/($kecanduan['user']-1),2),
							'k8' => number_format($jc8/($kecanduan['beuser']-1),2),
							'k9' => number_format($jc3/($kecanduan['addict']-1),2),


							);

		$data['user'] = $kecanduan;
		$data['subview'] = 'probabilitas/index';
		$this->load->view('_layout_main', $data);
	}

	public function grafik()
	{
			$this->load->model('probabilitas_m');
			$data['user'] 	= $this->probabilitas_m->jmkecanduan(1);
			$data['beuser'] = $this->probabilitas_m->jmkecanduan(2);  
			$data['addict'] = $this->probabilitas_m->jmkecanduan(3);

			$data['subview'] = 'chart';
			$this->load->view('_layout_main', $data);
	}
}
