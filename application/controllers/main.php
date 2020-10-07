<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->uri->segment(3)) {
			$this->id = $this->uri->segment(2);
			$this->data['token'] = $this->uri->segment(3);
		}else if($this->uri->segment(2)){
			$this->data['token'] = $this->uri->segment(2);
		}else{
			if($this->uri->segment(1) != 'token123'){
				redirect('/marketing');
			}else{
				$this->data['token'] = $this->uri->segment(1);
			}
		}
	}

	public function index()
	{
		$this->load->view('home', $this->data);
	}

	function kiblat()
	{
		$this->load->view('compass', $this->data);
	}

	function bacaan_sholat()
	{
		$this->load->view('bacaan_sholat', $this->data);
	}

	function setelah_sholat()
	{
		$this->load->view('doa_setelah_sholat', $this->data);
	}

	function dzikir_pilihan()
	{
		$this->load->view('dzikir_pilihan', $this->data);
	}

	function juz_amma()
	{
		$this->load->view('juz_amma', $this->data);
	}

	function detil_bacaan_sholat()
	{
		switch ($this->id) {
			case 1:
				$this->data['lafadz'] = '';
				$this->data['arti'] = '';
				$this->data['judul'] = '';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;

			case 2:
				$this->data['lafadz'] = '';
				$this->data['arti'] = '';
				$this->data['judul'] = '';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;

			case 3:
				$this->data['lafadz'] = '';
				$this->data['arti'] = '';
				$this->data['judul'] = '';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;

			case 4:
				$this->data['lafadz'] = '';
				$this->data['arti'] = '';
				$this->data['judul'] = '';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;

			case 5:
				$this->data['lafadz'] = '';
				$this->data['arti'] = '';
				$this->data['judul'] = '';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;

			case 6:
				$this->data['lafadz'] = '';
				$this->data['arti'] = '';
				$this->data['judul'] = '';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;

			case 7:
				$this->data['lafadz'] = '';
				$this->data['arti'] = '';
				$this->data['judul'] = '';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;

			case 8:
				$this->data['lafadz'] = '';
				$this->data['arti'] = '';
				$this->data['judul'] = '';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;

			case 9:
				$this->data['lafadz'] = '';
				$this->data['arti'] = '';
				$this->data['judul'] = '';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;

			case 10:
				$this->data['lafadz'] = '';
				$this->data['arti'] = '';
				$this->data['judul'] = '';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;
			default:
				$this->data['lafadz'] = '';
				$this->data['arti'] = '';
				$this->data['judul'] = '';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;
		}
		$this->load->view('detil_bacaan_sholat', $this->data);
	}

	function detil_setelah_sholat()
	{
		switch ($this->id) {
			case 1:
				$this->data['lafadz'] = '';
				$this->data['arti'] = '';
				$this->data['judul'] = '';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;

			case 2:
				$this->data['lafadz'] = '';
				$this->data['arti'] = '';
				$this->data['judul'] = '';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;

			default:
				$this->data['lafadz'] = '';
				$this->data['arti'] = '';
				$this->data['judul'] = '';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;
		}
		$this->load->view('detil_doa_setelah_sholat', $this->data);
	}

	function detil_dzikir()
	{
		switch ($this->id) {
			case 1:
				$this->data['lafadz'] = '';
				$this->data['arti'] = '';
				$this->data['judul'] = '';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;

			case 2:
				$this->data['lafadz'] = '';
				$this->data['arti'] = '';
				$this->data['judul'] = '';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;

			default:
				$this->data['lafadz'] = '';
				$this->data['arti'] = '';
				$this->data['judul'] = '';
				$this->data['sound'] = base_url('assets/audio/alfatihah.mp3');
				break;
		}
		$this->load->view('detil_dzikir_pilihan', $this->data);
	}

	function detil_juz_amma()
	{
		$this->data['surat'] = $this->id;
		$this->load->view('detil_juz_amma', $this->data);
	}

	function generator()
	{
		$this->load->view('generator');
	}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */