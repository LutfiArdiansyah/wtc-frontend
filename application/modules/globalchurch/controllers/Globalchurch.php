<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Globalchurch extends MY_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('index');
		$data['head_office'] = $this->get("/wtc-worship-places/1");
		$data['minis_cat'] = $this->get("/wtc-ministries-categories");
		$this->load->view('templates/footer',$data);
	}

}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */
