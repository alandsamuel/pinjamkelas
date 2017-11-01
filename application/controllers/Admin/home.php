<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// session_start();
class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
	}
	public function index() {
		$this->panggil_header();
		$this->load->view('template/v_home');	
		$this->load->view('template/v_footer');
	}

	public function panggil_header(){
		$data['level'] = $this->session->userdata('level');
		$data['username'] = $this->session->userdata('username');
		// $this->load->view('dosen/v_home', $data);
		$this->load->view('template/v_header', $data);
	}

	public function about()
	{
		$this->panggil_header();
		$this->load->view('template/v_about');	
		$this->load->view('template/v_footer');
	}

	public function contact()
	{
		$this->panggil_header();
		$this->load->view('template/v_contact');		
		$this->load->view('template/v_footer');
	}

	public function complain()
	{
		$this->panggil_header();
		$this->load->view('template/v_complain');		
		$this->load->view('template/v_footer');
	}

	public function class_status()
	{
		
		$this->panggil_header();
		$this->load->view('template/v_selasa');
		$this->load->view('template/v_footer');
	}

	public function class_booking()
	{
		$this->panggil_header();
		$this->load->view('template/v_class_booking');	
		$this->load->view('template/v_footer');
	}
	
	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}
}
?>