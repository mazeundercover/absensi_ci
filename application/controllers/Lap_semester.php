<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lap_semester extends CI_Controller {

	public function index()
	{
          $this->data['header']['title'] = "Tahun Ajaran";
		$this->load->view('templates/headcontent',$this->data);
		$this->load->view('templates/footcontent');
	}
}
