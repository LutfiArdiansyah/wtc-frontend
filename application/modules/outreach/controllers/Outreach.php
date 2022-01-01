<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outreach extends MY_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$data['datas'] = array("House of Bread", "RIS Hospital", "WTC Worship", "Panti Rehabilitasi", "Panti Asuhan", "Sekolah");
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
	}

}

/* End of file examples.php */
/* Location: ./application/modules/examples/controllers/examples.php */