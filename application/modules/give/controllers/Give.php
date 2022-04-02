<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Give extends MY_Controller
{

	public function index()
	{
		$locale = $this->session->userdata('locale');
		if ($locale === 'id') {
			$param = 'Persembahan';
		} else {
			$param = 'Give';
		}
		$data['breadcrumb'] = $this->get("/wtc-breadcrumb-lists?name=" . urlencode($param));
		$data['home'] = 'Home';
		$this->load->view('templates/header', $data);
		$data["data"] = $this->get("/wtc-online-giving");
		$this->load->view('index', $data);
		$data['head_office'] = $this->get("/wtc-worship-places?wtc_location_area.name=pusat")[0];
		$data['minis_cat'] = $this->get("/wtc-ministries-categories");
		$this->load->view('templates/footer', $data);
	}
}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */