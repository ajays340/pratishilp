<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_AdminController extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('admin/dashboard/index_view');
	}
}
