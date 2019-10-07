<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notfound extends CI_Controller {

	public function index() {
          $this->data['header']['title'] = "PAGE NOT FOUND";
		$this->load->view('templates/headcontent',$this->data);
		$this->load->view('templates/pagenotfound');
		$this->load->view('templates/footcontent');
	}
}