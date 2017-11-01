<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		$this->load->view('template/v_header2');
		$this->load->view('template/v_login2');
	}

	public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);

		$this->load->model('model_user'); // load model_user
		
		$hasil = $this->model_user->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['uid'] = $sess->uid;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='dosen') {
				redirect('dosen/home');
			}
			elseif ($this->session->userdata('level')=='mhs') {
				redirect('mahasiswa/home');
			}
			elseif ($this->session->userdata('level')=='admin') {
				redirect('admin/home');
			}

		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

		public function about()
	{
		$this->load->view('template/v_header2');
		$this->load->view('template/v_about');	
		$this->load->view('template/v_footer');
	}

	public function contact()
	{
		$this->load->view('template/v_header2');
		$this->load->view('template/v_contact');		
		$this->load->view('template/v_footer');
	}

	public function login()
	{
		$this->load->view('template/v_header2');
		$this->load->view('template/v_login');		
		$this->load->view('template/v_footer');
	}

	public function complain()
	{
		$this->load->view('template/v_header2');
		$this->load->view('template/v_complain');		
		$this->load->view('template/v_footer');
	}

	public function class_status()
	{
		$this->load->view('template/v_header2');
		$this->load->view('template/v_class_status');
		$this->load->view('template/v_footer');
	}

	public function class_booking()
	{
		$this->load->view('template/v_header2');
		$this->load->view('template/v_class_booking');	
		$this->load->view('template/v_footer');
	}

}

?>
