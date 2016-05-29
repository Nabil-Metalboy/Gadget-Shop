<?php

class Cart_model extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_all_product(){
		$query=$this->db->get('product');
		return $query->result();
	}
	public function get_single_product($id)
	{
		$product=$this->db->where('id',$id)->get('product')->result();
		if($product)
		{
			return $product[0];
		}else
			echo "product not valid";
	}
	public function update_product($info)
	{
		$this->db->where('id',$info['id'])->update('product',array(
			'qty'=>$info['qty'],'price'=>$info['price'],'name'=>$info['name']
			));

	}
	public function delete_product_data($info)
	{
		$this->db->where('id',$info['id']);
		$this->db->delete('product');
		$this->db->order_by('UPPER(id)',"desc");
	}


	public function insert_cart($info)
		{
			$data=array(
			'id'=>$info['id'],
			'qty'=>$info['qty'],
			'price'=>$info['price'],
			'name'=>$info['name'],
			
			);

			$this->db->insert('product',$data);
		}


}
?>