<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spiritualjourney extends MY_Controller
{

	public function index()
	{
		$data['breadcrumb'] = $this->get("/wtc-breadcrumbs?page=" . urlencode("Spiritualjournery") . "&_sort=sort:asc");
		$this->load->view('templates/header', $data);
		$data['datas'] = $this->get("/wtc-spiritual-journey-contents");
		$data['description'] = "Menolong dan mendorong jemaat secara pribadi aktif berpartisipasi dalam perjalanan pertumbuhan kerohaniannya di dalam gereja dan terlibat dalam gereja sesuai panggilannya. Gereja dan jemaat saling terkoneksi tanpa batas untuk bersama bersinergi dan bertumbuh sebagai satu kesatuan Tubuh Kristus.";
		$data['spiritual_journey'] = $this->get('/wtc-spiritual-journey');
		$this->load->view('index', $data);
		$data['head_office'] = $this->get("/wtc-worship-places?wtc_location_area.name=pusat")[0];
		$data['minis_cat'] = $this->get("/wtc-ministries-categories");
		$this->load->view('templates/footer', $data);
	}
}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */