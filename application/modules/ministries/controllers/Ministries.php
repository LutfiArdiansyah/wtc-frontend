<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ministries extends MY_Controller
{

	public function index()
	{
		$data["data"] = $this->get("/wtc-ministries");
		$data["data_category"] = $this->get("/wtc-ministries-categories");
		$this->load->view('templates/header');
		$this->load->view('index', $data);
		$data['head_office'] = $this->get("/wtc-worship-places?wtc_location_area.name=pusat")[0];
		$data['minis_cat'] = $this->get("/wtc-ministries-categories");
		$this->load->view('templates/footer', $data);
	}
}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */
