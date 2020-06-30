<?php 

class M_login extends CI_Model{	
	

	function login($user,$pass){		
		return $this->db->query("SELECT * FROM login WHERE user='$user' AND pass='$pass' LIMIT 1");
	}

	/*function login_user($table,$where){		
		return $this->db->get_where($table,$where);
	}
	*/	
}