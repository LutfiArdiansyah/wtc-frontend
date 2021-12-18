<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Templates extends MY_Controller {

	public function index()
	{
		header('Location: ' . base_url());
	}

}

/* End of file templates.php */
/* Location: ./application/controllers/templates.php */