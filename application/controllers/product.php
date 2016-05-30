<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends CI_Controller{
	
	public function __construct()
		{
			parent::__construct();
		}




	public function index($index=0)
		{
			$data['listProduct']=$this->mproduct->viewProduct();
			$this->load->view('index',$data);
		}
}
?>