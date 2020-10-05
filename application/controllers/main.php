<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	function kiblat()
	{
		$this->load->view('compass');
	}

	function bacaan_sholat()
	{
		$this->load->view('bacaan_sholat');
	}

	function setelah_sholat()
	{
		$this->load->view('doa_setelah_sholat');
	}

	function dzikir_pilihan()
	{
		$this->load->view('dzikir_pilihan');
	}

	function juz_amma()
	{
		$this->load->view('juz_amma');
	}

	function detil_bacaan_sholat($id = null)
	{
		switch ($id) {
			case 1:
				$data['lafadz'] = '';
				$data['arti'] = '';
				$data['judul'] = '';
				break;

			case 2:
				$data['lafadz'] = '';
				$data['arti'] = '';
				$data['judul'] = '';
				break;

			case 3:
				$data['lafadz'] = '';
				$data['arti'] = '';
				$data['judul'] = '';
				break;

			case 4:
				$data['lafadz'] = '';
				$data['arti'] = '';
				$data['judul'] = '';
				break;

			case 5:
				$data['lafadz'] = '';
				$data['arti'] = '';
				$data['judul'] = '';
				break;

			case 6:
				$data['lafadz'] = '';
				$data['arti'] = '';
				$data['judul'] = '';
				break;

			case 7:
				$data['lafadz'] = '';
				$data['arti'] = '';
				$data['judul'] = '';
				break;

			case 8:
				$data['lafadz'] = '';
				$data['arti'] = '';
				$data['judul'] = '';
				break;

			case 9:
				$data['lafadz'] = '';
				$data['arti'] = '';
				$data['judul'] = '';
				break;

			case 10:
				$data['lafadz'] = '';
				$data['arti'] = '';
				$data['judul'] = '';
				break;
			default:
				$data['lafadz'] = '';
				$data['arti'] = '';
				$data['judul'] = '';
				break;
		}
		$this->load->view('detil_bacaan_sholat', $data);
	}

	function detil_setelah_sholat($id)
	{
		switch ($id) {
			case 1:
				$data['lafadz'] = '';
				$data['arti'] = '';
				$data['judul'] = '';
				break;

			case 2:
				$data['lafadz'] = '';
				$data['arti'] = '';
				$data['judul'] = '';
				break;

			default:
				$data['lafadz'] = '';
				$data['arti'] = '';
				$data['judul'] = '';
				break;
		}
		$this->load->view('detil_doa_setelah_sholat', $data);
	}

	function detil_dzikir($id = null)
	{
		switch ($id) {
			case 1:
				$data['lafadz'] = '';
				$data['arti'] = '';
				$data['judul'] = '';
				break;

			case 2:
				$data['lafadz'] = '';
				$data['arti'] = '';
				$data['judul'] = '';
				break;

			default:
				$data['lafadz'] = '';
				$data['arti'] = '';
				$data['judul'] = '';
				break;
		}
		$this->load->view('detil_dzikir_pilihan', $data);
	}

	function detil_juz_amma($id = null)
	{
		$data['surat'] = $id;
		$this->load->view('detil_juz_amma', $data);
	}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */