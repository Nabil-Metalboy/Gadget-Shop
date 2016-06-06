<?php

class Cart_model extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_all_product(){
		$query=$this->db->select('product.*,manufacturer.*,categories.*')->join('manufacturer','product.m_id = manufacturer.m_id')->join('categories','product.category_id =categories.category_id')->get('product');
		//$query=$this->db->get('product');
		return $query->result();

	}
	public function get_single_product($id)
	{
		$product=$this->db->where('p_id',$id)->get('product')->result();
		if($product)
		{
			return $product[0];
		}else
			echo "product not valid";
	}
	public function update_product($info)
	{
		$this->db->where('p_id',$info['p_id'])->update('product',array(
			'p_qty'=>$info['p_qty'],'p_price'=>$info['p_price'],'p_name'=>$info['p_name']
			));

	}
	public function delete_product_data($info)
	{
		$this->db->where('p_id',$info['p_id']);
		$this->db->delete('product');
		$this->db->order_by('UPPER(p_id)',"desc");
	}


	public function insert_cart($info)
		{
			$data=array(
			//'id'=>$info['id'],
			'p_name'=>$info['name'],
			'p_image'=>$info['image'],
			'p_qty'=>$info['qty'],
			'p_price'=>$info['price'],
			'p_description'=>$info['description'],
			'c_id'=>$info['category'],
			'm_id'=>$info['manufacturer']
			
			);

			$this->db->insert('product',$data);
		}
	public function insert_database($info)
	{
		$data=array(
			'u_id'=>$info['u_id'],
			'full_name'=>$info['full_name'],
			'email'=>$info['email'],
			'address'=>$info['address'],
			'mobile'=>$info['mobile'],
			'city'=>$info['city'],
			'country'=>$info['country']
			
			);

			$this->db->insert('shipping',$data);

	}
	public function insert_payment_database($info)
	{
		$data=array(
			'pay_type'=> $info['payment_type'],
			'status' => 'pending'
			);
		$this->db->insert('payment',$data);
	}


}
?>