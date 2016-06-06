<?php
class ShoppingCart extends CI_Controller
{
	public function buy($id)
	{
		$product=$this->mproduct->find($id);
		print_r($product);
		$data = array(
               'id'      => $product->p_id,
               'image'   => $product->p_image,
               'qty'     => 1,
               'price'   => $product->p_price,
               'name'    => $product->p_name
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
	public function view_cart()
	{
		$this->load->view('cart');
	}
	public function shipping()
	{
		foreach ($this->cart->contents() as $items){
			$p_id = $items['id'];
			$p_name = $items['name'];
			$p_image = $items['image'];
			$p_qty = $items['qty'];
			$p_price = $items['price'];
			
			$data=array(
				'u_id'=>$this->session->userdata('session_id'),
				'p_id'=>$p_id,
				'p_name'=>$p_name,
				'p_image'=>$p_image,
				'p_qty'=>$p_qty,
				'p_price'=>$p_price

				);
			$this->mproduct->update_cart($data);
		}
			
	{
		$this->load->view('shipping_info');
	}
	}
	public function insert_shipping()
	{
			
		$user_id = ($this->session->userdata['logged_in']['id']);
		$full_name=$this->input->post('fname');
		$email=$this->input->post('email');
		$address=$this->input->post('address');
		$mobile=$this->input->post('mobile');
		$city=$this->input->post('city');
		$country=$this->input->post('country');
		

		$this->cart_model->insert_database(array(
			'u_id'=>$user_id,
			'full_name'=>$full_name,
			'email'=>$email,
			'address'=>$address,
			'mobile'=>$mobile,
			'city'=>$city,
			'country'=>$country
			));
		redirect('/ShoppingCart/payment', true);
	}
	public function payment()
	{
		$username = ($this->session->userdata['logged_in']['username']);
		echo "hello <b>".$username.'.</b>you have to give your payment information for completing your order.!!';
		$this->load->view('payment_info');
	}
	public function insert_payment()
	{
		if(isset($_POST['order_btn']))
		{
			if (isset($_POST['radio'])) 
			{
				echo "you have selected :".$_POST['radio'];
				$payment=$this->input->post('radio');
				$this->cart_model->insert_payment_database(array(
					'payment_type'=> $payment

					));
			}

		}
		/*$cash = $this->input->post('payment_type');
		$bkash = $this->input->post('payment_type');
		$paypal = $this->input->post('payment_type');*/

	}


}
?>










