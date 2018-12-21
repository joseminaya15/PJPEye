<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patent_jp extends CI_Controller {

	public function index()
	{
		$this->load->view('v_patent_jp');
	}
}