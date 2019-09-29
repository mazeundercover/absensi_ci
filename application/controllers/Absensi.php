<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {

	public function __construct(){
     	parent::__construct();
        }

	public function index() {
		if (!isset($_SESSION['auth'])) {
			redirect(base_url('/absensi/login')); 
		}
		$data['header']['title'] = "Absensi";
		$this->load->view('templates/headcontent',$data);
		$this->load->view('home/home');
		$this->load->view('templates/footer');
	}

	public function login() {
		echo "LOGIN";
	}
}