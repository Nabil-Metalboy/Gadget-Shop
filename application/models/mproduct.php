<?php 

class MProduct extends CI_model
	{
		function __construct()
		{
			parent::__construct();

		}
		function findAll($userid)
		{
			$product = $this->db->where('id', $userid)->get('product')->result();
			if($product)
				{
					return $product[0];
				} else
					{
						echo("product not valid");
					}

			//return $this->db->get('products')->result();
		}
		function find($id)
		{
			$this->db->where('p_id',$id);
			return $this->db->get('product')->row();
		}
		function update_cart($info)
		{
			$data=array(

				'u_id'=>$info['u_id'],
				'p_id'=>$info['p_id'],
				'p_name'=>$info['p_name'],
				'p_image'=>$info['p_image'],
				'p_qty'=>$info['p_qty'],
				'p_price'=>$info['p_price']
				);
			$this->db->insert('cart',$data);
			/*$data=array(
				'u_id'=>$this->session->userdata('session_id'),
				'p_id'=>$info[$p_id],
				'p_name'=>$info[$p_name],
				'p_image'=>$info[$p_image],
				'p_qty'=>$info[$p_qty],
				'p_price'=>$info[$p_price]

				);*/
		}

	} 



 ?>