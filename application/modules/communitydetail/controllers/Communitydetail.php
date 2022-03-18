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
		$data['data'] = $this->get("/wtc-communities-lists/".$_GET['id'] .'?'.$this->getLocale());
		$data['breadcrumb'] = $this->get("/wtc-breadcrumbs?page=".urlencode($data['data']->title)."&_sort=sort:asc&".$this->getLocale());
		$this->load->view('templates/header', $data);
		$this->load->view('index',  $data);
		$data['head_office'] = $this->get("/wtc-worship-places/1?".$this->getLocale());
		$data['minis_cat'] = $this->get("/wtc-ministries-categories?".$this->getLocale());
		$this->load->view('templates/footer', $data);
	}
}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */