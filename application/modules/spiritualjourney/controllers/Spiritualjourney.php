<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spiritualjourney extends MY_Controller
{

	public function index()
	{
		$data['breadcrumb'] = $this->get("/wtc-breadcrumbs?page=".urlencode("Spiritualjournery")."&_sort=sort:asc&".$this->getLocale());
		$this->load->view('templates/header',$data);
		$data['datas'] = $this->get("/wtc-spiritual-journey-contents?" . $this->getLocale());
		$data['description'] = "Menolong dan mendorong jemaat secara pribadi aktif berpartisipasi dalam perjalanan pertumbuhan kerohaniannya di dalam gereja dan terlibat dalam gereja sesuai panggilannya. Gereja dan jemaat saling terkoneksi tanpa batas untuk bersama bersinergi dan bertumbuh sebagai satu kesatuan Tubuh Kristus.";
		$this->load->view('index', $data);
		$data['head_office'] = $this->get("/wtc-worship-places/1?" . $this->getLocale());
		$data['minis_cat'] = $this->get("/wtc-ministries-categories?" . $this->getLocale());
		$this->load->view('templates/footer', $data);
	}
}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */