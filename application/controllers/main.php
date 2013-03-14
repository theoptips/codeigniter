<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Main extends CI_Controller 
	{
		//pass variables from controller to views
		protected $view_data = array();

		public function login()
		{
			$this->view_data['username'] = "John";
			$this->view_data['age']=  22;
			$account_number = 3;
			// $test_variable = "Test Direct access"; //didn't work
			// $test_variable['test'] = "Test Direct access"; // didn't work

			$this->view_data['account_number'] = $account_number;
			$this->load->view('login',$this->view_data);
		}
	}

//eof