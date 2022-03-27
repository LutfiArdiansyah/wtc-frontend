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
		$sort = '';
		if (isset($_GET['sort']) && !empty($_GET['sort'])) {
			$sort = '&_sort=title:' . $_GET['sort'];
		}
		$data['data'] = $this->get("/wtc-ministries-categories/" . $_GET['cat_id']);
		if (!isset($_POST['search']) || empty($_POST['search'])) {
			$data['search'] = '';
			$data['articles'] = $this->get("/wtc-ministries-lists?wtc_ministries_category.id=" . $_GET['cat_id'] . $sort);
		} else {
			$data['search'] = $_POST['search'];
			$data['articles'] = $this->get("/wtc-ministries-lists?wtc_ministries_category.id=" . $_GET['cat_id'] . '&title_contains=' . urlencode($_POST['search']));
		}
		$data['breadcrumb'] = $this->get("/wtc-breadcrumb-lists?name=" . urlencode($data['data']->title));
		$this->load->view('templates/header', $data);
		$this->load->view('index', $data);
		$data['head_office'] = $this->get("/wtc-worship-places?wtc_location_area.name=pusat")[0];
		$data['minis_cat'] = $this->get("/wtc-ministries-categories");
		$this->load->view('templates/footer', $data);
	}
}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */