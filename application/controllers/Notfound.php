<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notfound extends CI_Controller {

	public function index() {
          // $this->load->view('welcome_message');
          echo "Not Found";
	}
}