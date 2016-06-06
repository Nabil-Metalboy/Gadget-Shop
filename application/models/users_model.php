<?php

class Users_model extends CI_Model{


	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_all_users(){
		$query=$this->db->get('user');
		return $query->result();
	}
	
	public function get_single_user($userid)
	{
		$user = $this->db->where('u_id', $userid)->get('user')->result();
		if($user) {
			return $user[0];
		} else {
			echo("user not valid");
		}

	}

	public function update_user_data($info)
	{
		$this->db->where('u_id', $info['id'])->update('user', array(
			'u_name' => $info['u_name'] ,'u_email'=>$info['u_email'] ,'u_password'=>$info['u_password'] ,'u_mobile'=>$info['u_mobile'],'u_address'=>$info['u_address']
		));
	}
	public function delete_user_data($info)
	{
		$this->db->where('u_id',$info['u_id']);
		$this->db->delete('user');
	}
	public function insert_database($info)
	{
		$data=array(
			//'id'=>$info['u_id'],
			'u_name'=>$info['u_name'],
			'u_email'=>$info['u_email'],
			'u_password'=>$info['u_password'],
			'u_mobile'=>$info['u_mobile'],
			'u_address'=>$info['u_address'],
			'u_type'=>'user'
			
			);
		$this->db->insert('user',$data);
	}
	public function insert_category($info)
	{
		$data=array(
			'category_name'=>$info['name'],
			'status'=>1,
			'category_size'=>$info['size']
			);
		$this->db->insert('categories',$data);
	}
	
}
?>