<?php 

class MProduct extends CI_model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();

		}

		function viewProduct()
		{
			$this->db->order_by('c_id' , 'RANDOM');
			$this->db->limit->(1);
			$query = $this->db->get->('product');
			return $query->result();
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
			$this->db->where('id',$id);
			return $this->db->get('product')->row();
		}

	} 



 ?>