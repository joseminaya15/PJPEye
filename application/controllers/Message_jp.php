<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_jp extends CI_Controller {

	public function index()
	{
		$this->load->view('v_message_jp');
	}
}