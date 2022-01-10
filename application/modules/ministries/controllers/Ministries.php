<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ministries extends MY_Controller {

	public function index()
	{
		$data["data"] = $this->get("/wtc-ministries");
		$data["data_category"] = $this->get("/wtc-ministries-categories");
		$this->load->view('templates/header');
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
	}

}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */
