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
			$this->db->where('id',$id);
			return $this->db->get('product')->row();
		}

	} 



 ?>