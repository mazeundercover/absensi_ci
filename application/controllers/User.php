<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
          $this->data['header']['title'] = "User";
		$this->load->view('templates/headcontent',$this->data);
		$this->load->view('templates/footcontent');
	}
}
