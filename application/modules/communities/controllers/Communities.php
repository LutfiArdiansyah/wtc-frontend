<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Communities extends MY_Controller {

	public function index()
	{
		$data["data"] = $this->get("/wtc-communities?".$this->getLocale());
		$this->load->view('templates/header');
		$data["lists"] = $this->get("/wtc-communities-lists?".$this->getLocale());
		$this->load->view('index', $data);
		$data['head_office'] = $this->get("/wtc-worship-places/1?".$this->getLocale());
		$data['minis_cat'] = $this->get("/wtc-ministries-categories?".$this->getLocale());
		$this->load->view('templates/footer',$data);
	}

}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */
