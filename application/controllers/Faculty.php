<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faculty extends CI_Controller
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
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/dashboard');
		// $this->load->view('faculty/footer');
	}

	public function user()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/user_management/user');
		$this->load->view('faculty/footer');
	}

	public function items()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/item_management/items');
		$this->load->view('faculty/footer');
	}

	public function items_category()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/item_management/items_category');
		$this->load->view('faculty/footer');
	}

	public function order_details()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/order_management/order_details');
		$this->load->view('faculty/footer');
	}

	public function transactions()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/transactions');
		$this->load->view('faculty/footer');
	}

	public function user_credentials()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/user_management/user_credentials');
		$this->load->view('faculty/footer');
	}

	public function client()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/client');
		$this->load->view('faculty/footer');
	}

	public function contract()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/contract_management/contract');
		$this->load->view('faculty/footer');
	}

	public function pawn()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/pawn_management/pawn');
		$this->load->view('faculty/footer');
	}

	public function pawn_payment()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/pawn_management/pawn_payment');
		$this->load->view('faculty/footer');
	}

	public function contract_category()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/contract_management/contract_category');
		$this->load->view('faculty/footer');
	}

	public function employee()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/user_management/employee');
		$this->load->view('faculty/footer');
	}

	public function profile()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/user_management/my_profile');
		$this->load->view('faculty/footer');
	}

	public function user_cred()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/user_cred');
		$this->load->view('faculty/footer');
	}


	public function schedule()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/schedule/schedule');
		$this->load->view('faculty/footer');
	}

	// attendance
	public function rfdp()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/attendance/rfdp');
		$this->load->view('faculty/footer');
	}

	public function training()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/attendance/training');
		$this->load->view('faculty/footer');
	}
	public function university()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/attendance/university');
		$this->load->view('faculty/footer');
	}
	public function study()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/performance/study');
		$this->load->view('faculty/footer');
	}
	public function extension()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/performance/extension');
		$this->load->view('faculty/footer');
	}
	public function awards()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/performance/awards');
		$this->load->view('faculty/footer');
	}
	public function research()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/performance/research');
		$this->load->view('faculty/footer');
	}
	public function classification()
	{
		$this->load->view('faculty/header');
		$this->load->view('faculty/sidebar');
		$this->load->view('pages_faculty/performance/research');
		$this->load->view('faculty/footer');
	}
}
