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
		$data['data'] = $this->get("/wtc-ministries-categories/" . $_GET['cat_id'] . '?' . $this->getLocale());
		if (!isset($_POST['search']) || empty($_POST['search'])) {
			$data['search'] = '';
			$data['articles'] = $this->get("/wtc-ministries-lists?wtc_ministries_category.id=" . $_GET['cat_id'] . '&' . $this->getLocale() . $sort);
		} else {
			$data['search'] = $_POST['search'];
			$data['articles'] = $this->get("/wtc-ministries-lists?wtc_ministries_category.id=" . $_GET['cat_id'] . '&title_contains=' . urlencode($_POST['search']) . '&' . $this->getLocale());
		}
		$data['breadcrumb'] = $this->get("/wtc-breadcrumbs?page=" . urlencode($data['data']->title) . "&_sort=sort:asc&" . $this->getLocale());
		$this->load->view('templates/header', $data);
		$this->load->view('index', $data);
		$data['head_office'] = $this->get("/wtc-worship-places/1?" . $this->getLocale());
		$data['minis_cat'] = $this->get("/wtc-ministries-categories?" . $this->getLocale());
		$this->load->view('templates/footer', $data);
	}
}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */