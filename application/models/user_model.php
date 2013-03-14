<?php
	class User_model extends CI_Model 
	{
		public function get_users()
		{
			//traditional way of selecting, not fully using active record
			//has ot return to make data available
			//had to also import SQL DDL into mysql admin
			return $this->db->query("SELECT * FROM users")->result();
		}
	}
;?>