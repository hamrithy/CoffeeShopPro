<?php

class DaoUser extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("dto/DtoUser");
		$this->load->library('encryption');
	}

	function get_all_users(){
		$query = $this->db->get('USERS');
		return $query->result();
	}

	function get_user_by_id($user_id){
		$this->db->where('userid', $user_id);
		return $this->db->get('USERS');
	}

	function get_user_by_username($username){
		$this->db->where('username', $username);
		return $this->db->get('USERS');
	}

	function get_user_by_email($email){
		$this->db->where('email', $email);
		return $this->db->get('USERS');
	}

	function create_new_user(DtoUser $user){
		$data = array(
			"username" => $user->getUsername(),
			"password" => md5($user->getPassword()),
			"usertype" => $user->getUsertype(),
			"active"   => $user->getActive()
		);
		return $this->db->insert('USERS', $data);
	}

	function update_user($user_id, $data){
		$data = array(
			"username" => $user->getUsername(),
			"password" => $user->getpassword(),
			"usertype" => $user->getUsertype(),
			"active"   => $user->getActive()
		);
		$this->db->where('userid', $user_id);
		return $this->db->update('USERS', $data);
	}

	function change_password($user_id, $new_pssword){
		$this->db->set("password", $new_pssword);
		$this->db->where('id', $user_id);
		return $this->db->update('USERS');
	}

	function login(DtoUser $user){
		$this -> db -> select('userid, username');
		$this -> db -> from('USERS');
		$this -> db -> where('username', $user->getUsername());
		$this -> db -> where('password', md5($user->getPassword()));
		$this -> db -> where('active', 1);
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1){
		    return $query->result();
		}else{
			return false;
		}
	}

}