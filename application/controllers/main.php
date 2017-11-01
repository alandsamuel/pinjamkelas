<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()	
	{
		parent::__construct();
	}

	public function index()
	{
		/*
		$this->load->view('template/v_header');
		$this->load->view('template/v_home');	
		$this->load->view('template/v_footer');
		*/
		$this->load->view('template/v_header2');
		$this->load->view('template/v_login2');
	}

	public function about()
	{
		$this->load->view('template/v_header');
		$this->load->view('template/v_about');	
		$this->load->view('template/v_footer');
	}

	public function contact()
	{
		$this->load->view('template/v_header');
		$this->load->view('template/v_contact');		
		$this->load->view('template/v_footer');
	}

	public function login()
	{
		$this->load->view('template/v_header');
		$this->load->view('template/v_login');		
		$this->load->view('template/v_footer');
	}

	public function complain()
	{
		$this->load->view('template/v_header');
		$this->load->view('template/v_complain');		
		$this->load->view('template/v_footer');
	}

	public function class_status()
	{
		$this->load->view('template/v_header');
		$this->load->view('template/v_class_status');
		$this->load->view('template/v_footer');
	}

	public function class_booking()
	{
		$this->load->view('template/v_header');
		$this->load->view('template/v_class_booking');	
		$this->load->view('template/v_footer');
	}

	
}
