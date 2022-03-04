<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Give extends MY_Controller
{

	public function index()
	{
		$data['breadcrumb'] = array(
			array('name'=>'Home'),
			array('name'=>'Persembahan')
		);
		$this->load->view('templates/header', $data);
		$this->load->view('index');
		$data['head_office'] = $this->get("/wtc-worship-places/1");
		$data['minis_cat'] = $this->get("/wtc-ministries-categories");
		$this->load->view('templates/footer', $data);
	}
}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */