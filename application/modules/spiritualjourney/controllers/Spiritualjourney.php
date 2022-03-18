<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spiritualjourney extends MY_Controller
{

	public function index()
	{
		$this->load->view('templates/header');
		$data['datas'] = array("Carecell", "Nextgen", "Ibadah Raya", "Pastoral", "Diklat", "Acara Besar", "Media", "Keuangan");
		$this->load->view('index', $data);
		$data['head_office'] = $this->get("/wtc-worship-places/1?" . $this->getLocale());
		$data['minis_cat'] = $this->get("/wtc-ministries-categories?" . $this->getLocale());
		$this->load->view('templates/footer', $data);
	}
}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */