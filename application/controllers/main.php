<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Main extends CI_Controller 
	{
		public function login()
		{
			$this->load->view('login');
		}
	}

//eof