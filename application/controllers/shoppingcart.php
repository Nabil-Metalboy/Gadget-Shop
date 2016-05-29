<?php
class ShoppingCart extends CI_Controller
{
	public function buy($id)
	{
		$product=$this->mproduct->find($id);
		//print_r($product);
		$data = array(
               'id'      => $product->id,
               'qty'     => 1,
               'price'   => $product->price,
               'name'    => $product->name
            );

		$this->cart->insert($data);
		$this->load->view('cart');
	}
	
	public function delete($rowid)
	{
		$this->cart->update(array('rowid'=>$rowid,'qty'=>0));
		$this->load->view('cart');
	}
	public function update()
	{
		$i=1;
		foreach ($this->cart->contents() as $items)
		{
			$this->cart->update(array('rowid'=>$items['rowid'],'qty'=>$_POST['qty'.$i]));
			$i++;
		}
		$this->load->view('cart');
	}

}
?>