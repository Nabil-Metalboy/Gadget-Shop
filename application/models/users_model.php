<?php

class Users_model extends CI_Model{


	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_all_users(){
		$query=$this->db->get('users');
		return $query->result();
	}
	
	public function get_single_user($userid)
	{
		$user = $this->db->where('id', $userid)->get('users')->result();
		if($user) {
			return $user[0];
		} else {
			echo("user not valid");
		}

	}

	public function update_user_data($info)
	{
		$this->db->where('id', $info['id'])->update('users', array(
			'name' => $info['name'] ,'email'=>$info['email'] ,'address'=>$info['address'] ,'mobile'=>$info['mobile']
		));
	}
	public function delete_user_data($info)
	{
		$this->db->where('id',$info['id']);
		$this->db->delete('users');
	}
	public function insert_database($info)
	{
		$data=array(
			'id'=>$info['id'],
			'name'=>$info['name'],
			'email'=>$info['email'],
			'address'=>$info['address'],
			'mobile'=>$info['mobile'],
			);
		$this->db->insert('users',$data);
	}
	
}
?>