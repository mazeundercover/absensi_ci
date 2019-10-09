<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wali extends CI_Controller {

	public function index()
	{
          $this->data['header']['title'] = "Wali";
		$this->load->view('templates/headcontent',$this->data);
		$this->load->view('templates/footcontent');
	}
}
