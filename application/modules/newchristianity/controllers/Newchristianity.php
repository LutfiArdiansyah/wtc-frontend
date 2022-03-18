<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Newchristianity extends MY_Controller
{

	public function index()
	{
		$data['breadcrumb'] = $this->get("/wtc-breadcrumbs?page=".urlencode("New Christianity")."&_sort=sort:asc&".$this->getLocale());
		$this->load->view('templates/header', $data);
		$data['datas'] = $this->get("/wtc-new-to-christianity?".$this->getLocale());
		$this->load->view('index', $data);
		$data['head_office'] = $this->get("/wtc-worship-places/1");
		$data['minis_cat'] = $this->get("/wtc-ministries-categories");
		$this->load->view('templates/footer', $data);
	}
}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */