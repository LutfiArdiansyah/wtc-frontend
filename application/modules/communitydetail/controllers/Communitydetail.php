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
		$data['breadcrumb'] = array(
			array('name' => 'Komunitas'),
			array('name' => $_GET['id'])
		);
		$this->load->view('templates/header', $data);
		$data['data'] = array('title' => $_GET['id']);
		$this->load->view('index',  $data);
		$data['head_office'] = $this->get("/wtc-worship-places/1");
		$data['minis_cat'] = $this->get("/wtc-ministries-categories");
		$this->load->view('templates/footer', $data);
	}
}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */