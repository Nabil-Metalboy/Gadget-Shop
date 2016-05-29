<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends CI_Controller
{
	public function index($index=0)
		{
			$data['listProduct']=$this->mproduct->findAll($userid);
			$this->load->view('index',$data);
		}
}
?>