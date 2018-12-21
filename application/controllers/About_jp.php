<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_jp extends CI_Controller {

	public function index()
	{
		$this->load->view('v_about_jp');
	}
}