<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connectwithus extends MY_Controller {

	public function index()
	{
		$area_id = $_GET['area_id'];
		if (isset($area_id)) {
			$data["worship"] = $this->get("/wtc-worship-places?id_ne=1&wtc_location_area.id=".$area_id);
		} else {
			$data["worship"] = $this->get("/wtc-worship-places?id_ne=1");
		}
		$data["data_worship"] = $this->get("/wtc-worship-places/1");
		$data["areas"] = $this->get("/wtc-location-areas?id_ne=1");
		$this->load->view('templates/header');
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
	}

}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */
