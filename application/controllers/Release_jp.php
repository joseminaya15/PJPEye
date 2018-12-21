<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Release_jp extends CI_Controller {

	public function index()
	{
		$this->load->view('v_release_jp');
	}
}