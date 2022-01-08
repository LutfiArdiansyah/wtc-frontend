<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends MY_Controller {

	public function index()
	{
		if (!isset($_GET['name']) || empty($_GET['name'])) {
			header('Location: '.base_url());
		}
		$data['article_name'] = $_GET['name'];
		$this->load->view('templates/header');
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
	}

}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */