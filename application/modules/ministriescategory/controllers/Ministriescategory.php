<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ministriescategory extends MY_Controller
{

	public function index()
	{
		if (!isset($_GET['cat_id']) || empty($_GET['cat_id'])) {
			header('Location: ' . base_url());
			return;
		}
		$data['data'] = $this->get("/wtc-ministries-categories/" . $_GET['cat_id']);
		if (!isset($_GET['search']) || empty($_GET['search'])) {
			$data['articles'] = $this->get("/wtc-ministries-lists?wtc_ministries_category.id=" . $_GET['cat_id']);
		} else {
		}
		$data['breadcrumb'] = array(
			array('name' => 'Ministri'),
			array('name' => $data['data']->name)
		);
		$this->load->view('templates/header', $data);
		$this->load->view('index', $data);
		$data['head_office'] = $this->get("/wtc-worship-places/1");
		$data['minis_cat'] = $this->get("/wtc-ministries-categories");
		$this->load->view('templates/footer', $data);
	}
}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */