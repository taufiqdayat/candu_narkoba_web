<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klasifikasi extends CI_Controller {

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
		$data['subview'] = 'klasifikasi/index';
		$this->load->view('_layout_main', $data);
	}

	public function nbc()
	{
		$this->load->model('data_pasien_sampling_m');
		$this->load->model('probabilitas_m');

		$nilai_assist=0;
        $rata_rata=array_sum($this->input->post('assist'));
        if ($rata_rata>=0 && $rata_rata<=10){
            $nilai_assist=1;
        } elseif ($rata_rata>=11 && $rata_rata<=25){
            $nilai_assist=2;
        } elseif ($rata_rata>=26 && $rata_rata<=60){
            $nilai_assist=3;
        }
                
       //ambil dast
        $hitung=array_sum($this->input->post('dast'));
        $nilai_dast=0;
        if ($hitung==0) {
            $nilai_dast=1;
        } elseif ($hitung>=1 && $hitung[1]<=5){
            $nilai_dast=2;
        } elseif ($hitung>=6 && $hitung[1]<=10){
            $nilai_dast=3;
        } elseif ($hitung>=11 && $hitung[1]<=15){
            $nilai_dast=4;
        } elseif ($hitung>=16 && $hitung[1]<=20){
            $nilai_dast=5;
        }
		$data['nama'] = $this->input->post('nama');
        $data['umur'] = $this->input->post('umur');
        $data['jk'] = $this->input->post('jk');
        $data['pendidikan'] = $this->input->post('pendidikan');
        $data['faktor'] = $this->input->post('faktor');
        $data['overdosis'] = $this->input->post('overdosis');
        $data['cara'] = $this->input->post('cara');
        $data['ekonomi'] = $this->input->post('ekonomi');
        $data['assist'] = $nilai_assist;
        $data['dast'] = $nilai_dast;
		
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

		//perhitungan assist & dast
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
		
		$asda = array(
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
		//end perhitungan assist &dast

		//pilih faktor - ekonomi
		if ($data['faktor'] == 'Diri') 
		{
			$plfkuser = $kecanduan['druser']/$kecanduan['user'];
			$plfkbeuser = $kecanduan['drbeuser']/$kecanduan['beuser'];
			$plfkaddict = $kecanduan['draddict'];

		}elseif ($data['faktor'] == 'Faktor Ketersediaan') 
		{
			$plfkuser = $kecanduan['fkuser']/$kecanduan['user'];
			$plfkbeuser = $kecanduan['fkbeuser']/$kecanduan['beuser'];
			$plfkaddict = $kecanduan['fkaddict']/$kecanduan['addict'];

		}elseif ($data['faktor'] == 'Lingkungan') 
		{
			$plfkuser = $kecanduan['lkuser']/$kecanduan['user'];
			$plfkbeuser = $kecanduan['lkbeuser']/$kecanduan['beuser'];
			$plfkaddict = $kecanduan['lkaddict']/$kecanduan['addict'];
		}

		if ($data['overdosis']=='Ya') {
			$plovuser = $kecanduan['yuser']/$kecanduan['user'];
			$plovbeuser = $kecanduan['ybeuser']/$kecanduan['beuser'];
			$plovaddict = $kecanduan['yaddict']/$kecanduan['addict'];
		}elseif ($data['overdosis']== 'Tidak') {
			$plovuser = $kecanduan['tuser']/$kecanduan['user'];
			$plovbeuser = $kecanduan['tbeuser']/$kecanduan['beuser'];
			$plovaddict = $kecanduan['taddict']/$kecanduan['addict'];
		}

		if ($data['cara'] == 'Disuntik') {
			$plcruser = $kecanduan['dsuser']/$kecanduan['user'];
			$plcrbeuser = $kecanduan['dsbeuser']/$kecanduan['beuser'];
			$plcraddict = $kecanduan['dsaddict']/$kecanduan['addict'];
		}elseif ($data['cara'] == 'Dihisap') {
			$plcruser = $kecanduan['dhuser']/$kecanduan['user'];
			$plcrbeuser = $kecanduan['dhbeuser']/$kecanduan['beuser'];
			$plcraddict = $kecanduan['dhaddict']/$kecanduan['addict'];
		}elseif ($data['cara'] == 'Ditelan') {
			$plcruser = $kecanduan['dtuser']/$kecanduan['user'];
			$plcrbeuser = $kecanduan['dtbeuser']/$kecanduan['beuser'];
			$plcraddict = $kecanduan['dtaddict']/$kecanduan['addict'];
		}

		if ($data['ekonomi']=='MA') {
			$plekuser = $kecanduan['mauser']/$kecanduan['user'];
			$plekbeuser = $kecanduan['mabeuser']/$kecanduan['beuser'];
			$plekaddict = $kecanduan['maaddict']/$kecanduan['addict'];
		}elseif ($data['ekonomi']=='MK') {
			$plekuser = $kecanduan['mkuser']/$kecanduan['user'];
			$plekbeuser = $kecanduan['mkbeuser']/$kecanduan['beuser'];
			$plekaddict = $kecanduan['mkaddict']/$kecanduan['addict'];
		}elseif ($data['ekonomi']=='M') {
			$plekuser = $kecanduan['muser']/$kecanduan['user'];
			$plekbeuser = $kecanduan['mbeuser']/$kecanduan['beuser'];
			$plekaddict = $kecanduan['maddict']/$kecanduan['addict'];
		}
		//end pilih faktor - ekonomi

		//perhitungan data baru
		$ujicoba1 = array(
				'd5' => (1/((sqrt(2*3.14))*$asda['j3']))*(exp(-(pow($data['assist']-$i3,2))/(2*$asda['k3']))),
				'd6' => (1/((sqrt(2*3.14))*$asda['j4']))*(exp(-(pow($data['assist']-$i4,2))/(2*$asda['k4']))),
				'd7' => (1/((sqrt(2*3.14))*$asda['j5']))*(exp(-(pow($data['assist']-$i5,2))/(2*$asda['k5']))),
				'e5' => (1/((sqrt(2*3.14))*$asda['j7']))*(exp(-(pow($data['dast']-$i7,2))/(2*$asda['k7']))),
				'e6' => (1/((sqrt(2*3.14))*$asda['j8']))*(exp(-(pow($data['dast']-$i8,2))/(2*$asda['k8']))),
				'e7' => (1/((sqrt(2*3.14))*$asda['j9']))*(exp(-(pow($data['dast']-$i9,2))/(2*$asda['k9'])))

			);

		$data['ujicoba2'] = array (
				'c5' => ($kecanduan['user']/3)*$plfkuser*$plovuser*$plcruser*$plekuser*$ujicoba1['d5']*$ujicoba1['e5'],
				'c6' => ($kecanduan['beuser']/3)*$plfkbeuser*$plovbeuser*$plcrbeuser*$plekbeuser*$ujicoba1['d6']*$ujicoba1['e6'],
				'c7' => ($kecanduan['addict']/3)*$plfkaddict*$plovaddict*$plcraddict*$plekaddict*$ujicoba1['d7']*$ujicoba1['e7'],
			);
		//end perhitungan data baru

		$nbc = max($data['ujicoba2']['c5'],$data['ujicoba2']['c6'],$data['ujicoba2']['c7']);
		$hasil = 0;
		if ($nbc==$data['ujicoba2']['c5']) {
            $hasil=1;
        } elseif ($nbc==$data['ujicoba2']['c6']){
            $hasil=2;
        } elseif ($nbc==$data['ujicoba2']['c7']){
            $hasil=3;
        }

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
            'ASSIST_PASIEN_SAMPLING' => $nilai_assist,
            'DAST_PASIEN_SAMPLING' => $nilai_dast,
            'KECANDUAN_PASIEN_SAMPLING' => $hasil
        );
        $this->data_pasien_sampling_m->save($simpan);

        $data['kecanduan'] = $hasil;
        $data['subview'] = 'klasifikasi/result';
        $this->load->view('_layout_main', $data);
	}

}