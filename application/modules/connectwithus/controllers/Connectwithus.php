<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connectwithus extends MY_Controller {

	public function index()
	{
		if (isset($_GET['area_id'])) {
			$data["worship"] = $this->get("/wtc-worship-places?id_ne=1&wtc_location_area.id=".$_GET['area_id']);
		} else {
			$data["worship"] = $this->get("/wtc-worship-places?id_ne=1");
		}
		$data["data_worship"] = $this->get("/wtc-worship-places/1");
		$data["areas"] = $this->get("/wtc-location-areas?id_ne=1");
		$this->load->view('templates/header');
		$this->load->view('index', $data);
		$data['head_office'] = $this->get("/wtc-worship-places/1");
		$data['minis_cat'] = $this->get("/wtc-ministries-categories");
		$this->load->view('templates/footer',$data);
	}

}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */
