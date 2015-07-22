<?php

class UserDAO extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}

	function get_all_users(){
		$query = $this->db->get('users');
		return $query->result();
	}

	function get_user_by_id($user_id){
		$this->db->where('userid', $user_id);
		return $this->db->get('users');
	}

	function get_user_by_username($username){
		$this->db->where('username', $username);
		return $this->db->get('users');
	}

	function get_user_by_email($email){
		$this->db->where('email', $email);
		return $this->db->get('users');
	}

	function create_new_user(UserDto $user){
		$data = array(
			"username" => $user->getUsername();
			"password" => $user->getpassword();
			"usertype" => $user->getUsertype();
			"active"   => $user->getActive();
		);
		return $this->db->insert('users', $data);
	}

	function update_user($user_id, $data){
		$data = array(
			"username" => $user->getUsername();
			"password" => $user->getpassword();
			"usertype" => $user->getUsertype();
			"active"   => $user->getActive();
		);
		$this->db->where('userid', $user_id);
		return $this->db->update('users', $data);
	}

	function chage_password($user_id, $new_pssword){
		$this->db->set("password", $new_pssword);
		$this->db->where('id', $user_id);
		return $this->db->update('users');
	}

}