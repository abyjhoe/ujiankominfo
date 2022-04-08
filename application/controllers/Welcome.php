<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		if ($this->session->userdata('email')) {
			redirect('welcome');
		} else {
			$this->load->view('welcome_message');
		}
	}
}