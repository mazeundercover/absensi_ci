<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {
	private $data = array();
	private $limit = 1;
	private $offset = 0;
	
	public function __construct(){
     	parent::__construct();
     }

	public function index() {
		if (!isset($_SESSION) || !isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !=1 ) {
			redirect(base_url('/absensi/login')); 
		}
		$this->data['header']['title'] = "Absensi";
		$this->load->view('templates/headcontent',$this->data);
		$this->load->view('home/home');
		$this->load->view('templates/footcontent');
	}

	public function login() {
		if (isset($_SESSION) && isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 1) {
			redirect(base_url('/absensi')); 
		}
		$this->data['header']['title'] = "LOGIN";
		$this->load->view('login/loginpage',$this->data);
		unset($_SESSION);
	}

	public function logout() {
		if (isset($_SESSION) && isset($_SESSION['username'])) {
			$query = $this->db->query("UPDATE users SET LAST_LOGOUT=NOW() WHERE USERNAME='".$_SESSION['username']."'");
		} else {
			$query = false;
		}
		if ($query) {
			unset(
				$_SESSION['username'],
				$_SESSION['name'],
				$_SESSION['status'],
				$_SESSION['level'],
				$_SESSION['logged_in']
			);
		}
		redirect(base_url('/absensi'));
	}

	public function ceklogin() {
		if (isset($_SESSION) && isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 1) {
			redirect(base_url('/absensi')); 
		}
		$username = isset($_POST['username'])  ? $_POST['username'] : '';
		$password = isset($_POST['password'])  ? MD5($_POST['password']) : '';
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error_loginform', 'Username & Password harus diisi');
			$this->session->set_flashdata('username', $username);
          	redirect(base_url('/absensi/login'));
          } else {
			$query = $this->db->get_where('users', array('USERNAME' => $username,'PASSWORD' => $password), $this->limit, $this->offset)->result_array();
			if (count($query) > 0) {
				$newdata = array(
					'username'=>$query['0']['USERNAME'],
					'name'=>$query['0']['NAMA_USER'],
					'status'=>$query['0']['STATUS_USER'],
					'level'=>$query['0']['LEVEL_USER'],
					'logged_in'=>TRUE
				);
				$this->session->set_userdata($newdata);
				// print_r($_SESSION);
				$this->db->query("UPDATE users SET LAST_LOGIN=NOW() WHERE USERNAME='".$_SESSION['username']."'");
				redirect(base_url('/'));
			} else {
				$this->session->set_flashdata('error_loginform', 'Username & Password tidak sesuai');
	          	redirect(base_url('/absensi/login'));
			}
          }
	}
	
}