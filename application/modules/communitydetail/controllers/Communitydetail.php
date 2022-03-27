<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Communitydetail extends MY_Controller
{

	public function index()
	{
		if (!isset($_GET['id']) || empty($_GET['id'])) {
			header('Location: ' . base_url());
			return;
		}
		$data['data'] = $this->get("/wtc-communities-lists/" . $_GET['id']);
		$data['breadcrumb'] = $this->get("/wtc-breadcrumb-lists?name=" . urlencode($data['data']->wtc_breadcrumb_list->name));
		$data["community"] = $this->get("/wtc-communities");
		$this->load->view('templates/header', $data);
		$this->load->view('index',  $data);
		$data['head_office'] = $this->get("/wtc-worship-places?wtc_location_area.name=pusat")[0];
		$data['minis_cat'] = $this->get("/wtc-ministries-categories");
		$this->load->view('templates/footer', $data);
	}
}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */