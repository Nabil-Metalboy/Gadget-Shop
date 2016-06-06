<?php


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
		$this->load->model('cart_model');
		$this->load->model('mproduct');
		
	}

	public function index($offset=0)
	{
	  	$this->load->library('pagination');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->database();

		//$num_rows=$this->db->get_all_users()->result();
		//$config['base_url'] = base_url().'/index.php/users';
		$config['base_url'] = base_url().'index.php/users';
		$config['total_rows']=10;
		$config['per_page']=5;
		$config['num_links']=5;
		$config['use-_page_numbers']=TRUE;
		$this->pagination->initialize($config);

		//$data['user_list']=$this->db->get('user',$config['per_page'],$offset)->result();
		$data['user_list'] = $this->users_model->get_all_users();//get all user from database

		$data['product_list'] = $this->cart_model->get_all_product();//get all product from database
		//print_r($data['product_list']);

		$this->load->view('template/header', array
		(
			'title' => 'View all users and product'
		));
		$this->load->view('show_users', $data);

		$this->load->view('show_product',$data);

		$this->load->view('template/footer');
	}
	public function insert()
	{
		$this->load->view('template/header', array(
			'title' =>'New User'
		));
		$this->load->view('insert_new_user');

		$this->load->view('template/footer');
	}
	public function insert_user()
	{
		//$userid=$this->input->post('u_id');
		$username=$this->input->post('u_name');
		$password=$this->input->post('u_pass');
		$email=$this->input->post('u_email');
		$mobile=$this->input->post('u_mobile');
		$address=$this->input->post('u_address');
		

		$this->users_model->insert_database(array(
			//'u_id'=>$userid,
			'u_name'=>$username,
			'u_password'=>$password,
			'u_email'=>$email,
			'u_mobile'=>$mobile,
			'u_address'=>$address
			));
		redirect('/users/', true);

	}

	public function edit($userid)
	{

		$user = $this->users_model->get_single_user($userid);

		$this->load->view('template/header', array(
			'title' => $user->u_name . ' Profile'
		));
		$this->load->view('edit_profile', array(
			'user' => $user
		));
		$this->load->view('template/footer');
	}

	public function update_user()
	{
		$userid = $this->input->post('userid');
		$username = $this->input->post('username');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$mobile=$this->input->post('mobile');
		$address=$this->input->post('address');
		
		
		$this->users_model->update_user_data(array(
			'id' => $userid,
			'u_name' => $username,
			'u_email'=>$email,
			'u_password'=>$password,
			'u_mobile'=>$mobile,
			'u_address'=>$address
			
		));
		redirect('/users/', true);
	}
	public function delete($userid)
	{

		$user = $this->users_model->get_single_user($userid);

		$this->load->view('template/header', array(
			'title' => $user->u_name . ' Profile'
		));
		$this->load->view('delete_profile', array(
			'user' => $user
		));
		$this->load->view('template/footer');
	}
	public function delete_user()
	{
		$userid=$this->input->post('userid');
		$this->users_model->delete_user_data(array(
				'u_id'=>$userid

			));
		redirect('/users/',true);
	}
	public function add_to_cart()
	{
		$this->load->view('template/header', array(
			'title' =>'Add To Cart'
		));
		$this->load->view('insert_product_cart');

		$this->load->view('template/footer');
	}
	public function user_add_to_cart()
	{
		$this->load->view('template/header', array(
			'title' =>'Add To Cart'
		));
		$this->load->view('user_insert_product_cart');

		$this->load->view('template/footer');
	}
	public function insert_product()
	{
		//$product_id=$this->input->post('p_id');
		$product_name=$this->input->post('p_name');
		$product_image=$this->input->post('p_image');
		$product_qty=$this->input->post('p_qty');
		$product_price=$this->input->post('p_price');
		$product_description=$this->input->post('p_description');
		$c_id=$this->input->post('c_id');
		$m_id=$this->input->post('m_id');

		$this->cart_model->insert_cart(array(
			//'id'=>$product_id,
			'name'=>$product_name,
			'image'=>$product_image,
			'qty'=>$product_qty,
			'price'=>$product_price,
			'description'=>$product_description,
			'category'=>$c_id,
			'manufacturer'=>$m_id
			));
		redirect('/users/', true);
	}
	public function user_insert_product()
	{
		$product_id=$this->input->post('p_id');
		$product_quantity=$this->input->post('p_qty');
		$product_price=$this->input->post('p_price');
		$product_name=$this->input->post('p_name');

		$this->cart_model->insert_cart(array(
			'id'=>$product_id,
			'qty'=>$product_quantity,
			'price'=>$product_price,
			'name'=>$product_name
			));
		redirect('/users/user_panel', true);
	}
	public function edit_product($pid)
	{
		$product=$this->cart_model->get_single_product($pid);

		$this->load->view('template/header', array(
			'title' => $product->p_name . ' Profile'
		));
		$this->load->view('product_edit', array(
			'product' => $product
		));
		$this->load->view('template/footer');
	}
	public function delete_product($pid)
	{
		$product=$this->cart_model->get_single_product($pid);

		$this->load->view('template/header', array(
			'title' => $product->p_name . ' Profile'
		));
		$this->load->view('product_delete', array(
			'product' => $product
		));
		$this->load->view('template/footer');

	}
	public function deleting_product()
	{
		$productid = $this->input->post('productid');
		$this->cart_model->delete_product_data(array(
			'p_id'=>$productid

			));
		redirect('/users/', true);
	}
	public function update_product()
	{
		$pid=$this->input->post('productid');
		$pqty = $this->input->post('p_qty');
		$pprice = $this->input->post('p_price');
		$pname = $this->input->post('p_name');

		$this->cart_model->update_product(array(
			'p_id'=>$pid,
			'p_qty'=>$pqty,
			'p_price'=>$pprice,
			'p_name'=>$pname,
			));
		redirect('/users/',true);
	}
	public function user_panel()
		{
			$data['product_list'] = $this->cart_model->get_all_product();
				$this->load->view('template/header', array
				(
					'title' => 'View all products'
				));

			$this->load->view('show_product_user',$data);

			$this->load->view('template/footer');
		}
	public function buy_user($id)
	{
		$product=$this->mproduct->find($id);
		$data = array(
               'id'      => $product->p_id,
               'qty'     => 1,
               'price'   => $product->p_price,
               'name'    => $product->p_name
            );
		$this->cart->insert($data);
		$this->load->view('template/header', array
				(
					'title' => 'Adding To Cart'
				));
		$this->load->view('user_cart');
		$this->load->view('template/footer');
	}
	public function user_cart_delete($rowid)
	{
		$this->cart->update(array('rowid'=>$rowid,'qty'=>0));
		$this->load->view('user_cart');
	}
	public function update()
	{
		$i=1;
		foreach ($this->cart->contents() as $items)
		{
			$this->cart->update(array('rowid'=>$items['rowid'],'qty'=>$_POST['qty'.$i]));
			$i++;
		}
		$this->load->view('user_cart');
	}
	public function add_to_category()
	{
		$this->load->view('template/header', array(
			'title' =>'Add To Cart'
		));
		$this->load->view('insert_product_in_category');

		$this->load->view('template/footer');	
	}
	public function insert_category_to_database()
	{
		$category_name = $this->input->post('c_name');
		$category_size = $this->input->post('c_size');

		$this->users_model->insert_category(array(
			'name'=>$category_name,
			'size'=>$category_size
			));
		redirect('/users/',true);
	}

}

?>
















