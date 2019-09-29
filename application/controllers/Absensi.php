<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {

	public function index() {
		$data['header']['title'] = "Absensi";
		$this->load->view('templates/headcontent',$data);
		$this->load->view('templates/footer');
	}
}