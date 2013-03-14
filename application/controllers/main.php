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

		public function show_users()
		{
			$this->output->enable_profiler(TRUE);
			//load model
			$this->load->model('User_model');
			//set variable view_data
			//User_model, capped? referring to class? Answer: accessing functions in model with Object with the same name as the class
			$this->view_data['users'] = $this->User_model->get_users();
			// var_dump($this->view_data);
			//load->view('name') name is hte name of the view file
			$this->load->view('users', $this->view_data);

		}
	}

//eof