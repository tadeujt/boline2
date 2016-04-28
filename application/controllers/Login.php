<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if ($this->Auth->CheckAuth($this->router->fetch_class(), $this->router->fetch_method()))
		{
			$this->load->view('login_view');
		}
		else
		{
			$this->load->view('login_view');
		}
	}
}
