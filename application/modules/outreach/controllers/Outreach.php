<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outreach extends MY_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$data['datas'] = array("House of Bread", "RIS Hospital", "WTC Worship", "Panti Rehabilitasi", "Panti Asuhan", "Sekolah");
		$this->load->view('index', $data);
		$data['head_office'] = $this->get("/wtc-worship-places/1");
		$data['minis_cat'] = $this->get("/wtc-ministries-categories");
		$this->load->view('templates/footer',$data);
	}

}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */