<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servewithin extends MY_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$data['datas'] = array("Carecell", "Nextgen", "Ibadah Raya", "Pastoral", "Diklat", "Acara Besar", "Media", "Keuangan");
		$this->load->view('index', $data);
		$data['head_office'] = $this->get("/wtc-worship-places/1");
		$data['minis_cat'] = $this->get("/wtc-ministries-categories");
		$this->load->view('templates/footer',$data);
	}

}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */