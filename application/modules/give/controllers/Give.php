<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Give extends MY_Controller
{

	public function index()
	{
		$data['breadcrumb'] = $this->get("/wtc-breadcrumbs?page=".urlencode("Give")."&_sort=sort:asc&".$this->getLocale());
		$this->load->view('templates/header', $data);
		$data["data"] = $this->get("/wtc-online-giving?".$this->getLocale());
		$this->load->view('index', $data);
		$data['head_office'] = $this->get("/wtc-worship-places/1?".$this->getLocale());
		$data['minis_cat'] = $this->get("/wtc-ministries-categories?".$this->getLocale());
		$this->load->view('templates/footer', $data);
	}
}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */