<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checker extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		($this->session->userdata('TOKEN')) ? null : redirect('/');
	}

	public function dashboard()
	{
		$this->load->view('checker/header');
		$this->load->view('checker/sidebar');
		$this->load->view('pages_checker/dashboard');
		// $this->load->view('checker/footer');
	}

	public function user()
	{
		$this->load->view('checker/header');
		$this->load->view('checker/sidebar');
		$this->load->view('pages_checker/user_management/user');
		$this->load->view('checker/footer');
	}

	public function profile()
	{
		$this->load->view('checker/header');
		$this->load->view('checker/sidebar');
		$this->load->view('pages_checker/user_management/profile');
		$this->load->view('checker/footer');
	}

	public function user_cred()
	{
		$this->load->view('checker/header');
		$this->load->view('checker/sidebar');
		$this->load->view('pages_checker/user_cred');
		$this->load->view('checker/footer');
	}


	public function schedule()
	{
		$this->load->view('checker/header');
		$this->load->view('checker/sidebar');
		$this->load->view('pages_checker/schedule/schedule');
		$this->load->view('checker/footer');
	}

	// attendance
	public function rfdp()
	{
		$this->load->view('checker/header');
		$this->load->view('checker/sidebar');
		$this->load->view('pages_checker/attendance/rfdp');
		$this->load->view('checker/footer');
	}

	public function training()
	{
		$this->load->view('checker/header');
		$this->load->view('checker/sidebar');
		$this->load->view('pages_checker/attendance/training');
		$this->load->view('checker/footer');
	}
	public function university()
	{
		$this->load->view('checker/header');
		$this->load->view('checker/sidebar');
		$this->load->view('pages_checker/attendance/university');
		$this->load->view('checker/footer');
	}
	public function study()
	{
		$this->load->view('checker/header');
		$this->load->view('checker/sidebar');
		$this->load->view('pages_checker/performance/study');
		$this->load->view('checker/footer');
	}
	public function extension()
	{
		$this->load->view('checker/header');
		$this->load->view('checker/sidebar');
		$this->load->view('pages_checker/performance/extension');
		$this->load->view('checker/footer');
	}
	public function awards()
	{
		$this->load->view('checker/header');
		$this->load->view('checker/sidebar');
		$this->load->view('pages_checker/performance/awards');
		$this->load->view('checker/footer');
	}
	public function research()
	{
		$this->load->view('checker/header');
		$this->load->view('checker/sidebar');
		$this->load->view('pages_checker/performance/research');
		$this->load->view('checker/footer');
	}
}
