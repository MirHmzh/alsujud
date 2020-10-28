<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QRGenerator extends CI_Controller {

	public function index()
	{
		$this->load->view('generator');
	}

}

/* End of file Generator.php */
/* Location: ./application/controllers/Generator.php */