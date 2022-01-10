<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		$data['data'] = $this->get("/wtc-landing-page");
		$this->load->view('templates/header');
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
	}

}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */
