<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Communities extends MY_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('index');
		$this->load->view('templates/footer');
	}

}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */