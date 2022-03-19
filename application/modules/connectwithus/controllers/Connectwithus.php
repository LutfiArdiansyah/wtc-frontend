<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Connectwithus extends MY_Controller
{

	public function index()
	{
		try {
			if (isset($_GET['area_id'])) {
				$data["worship"] = $this->get("/wtc-worship-places?id_ne=1&wtc_location_area.id=" . $_GET['area_id']);
			} else {
				$data["worship"] = $this->get("/wtc-worship-places?id_ne=1");
			}
			$data["data_worship"] = $this->get("/wtc-worship-places?wtc_location_area.name=pusat")[0];
			$data["areas"] = $this->get("/wtc-location-areas?id_ne=1", false);
			$this->load->view('templates/header');
			$data['contact'] = $this->get("/wtc-contact");
			$this->load->view('index', $data);
			$data['head_office'] = $this->get("/wtc-worship-places?wtc_location_area.name=pusat")[0];
			$data['minis_cat'] = $this->get("/wtc-ministries-categories");
			$this->load->view('templates/footer', $data);
		} catch (\Throwable $th) {
			var_dump($th);
			exit;
		}
	}
}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */
