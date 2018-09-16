<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Africa/Lagos");
		$this->load->helper('path');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

	}

	public function index()
	{
		$this->load->view('home');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function feed()
	{
		$this->load->view('feed');
	}

	public function works()
	{
		$this->load->view('works');
	}

	public function my404()
	{
		$this->output->set_status_header('404');
		$this->load->view('err404');//loading in custom error view
	} 

	
}
