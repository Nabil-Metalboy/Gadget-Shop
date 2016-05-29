<?php
	session_start();

	Class User_Auth extends CI_Controller{

		public function __construct()
		{
			parent::__construct();

			$this->load->helper('form');

			$this->load->library('form_validation');

			$this->load->library('session');

			$this->load->model('login_database');
		}

		public function index()
		{
			$this->load->view('template/header',array(
			'title' =>'Login Area'
		));
			$this->load->view('login_form');
			$this->load->view('template/footer');
		}

		public function user_registration_show()
		{
			$this->load->view('template/header', array(
			'title' =>'New User'
		));
			$this->load->view('registration_form');
			$this->load->view('template/footer');
		}

		public function new_user_registration()
		{
				$this->load->view('template/header',array(
					'title'=>'Please Register To Login'
					));
				$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
				$this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
				$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
				if ($this->form_validation->run() == FALSE) {
				$this->load->view('registration_form');
			} else{
				$data =array(
						'user_name' => $this->input->post('username'),
						'user_email' => $this->input->post('email_value'),
						'user_password' => $this->input->post('password')
					);
				$result  = $this->login_database->registration_insert($data);
				if ($result == true) {
					$data['message_display'] = 'Registration Successfully';
					$this->load->view('login_form',$data);
				}else {
					$data['message_display'] = 'Username already exists!';
					$this->load->view('registration_form',$data);
				}
			}
			$this->load->view('template/footer');
		}

		public function user_login_process()
		{
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		if($this->form_validation->run()==FALSE)
		{
			if(isset($this->session_userdata['logged_in']))
				{
					$this->load->view('admin_page');
					$this->load->view('template/footer');
				}else

				{
					$this->load->view('template/header',array(
					'title'=>'Please Log In'
					));
					$this->load->view('login_form');
					$this->load->view('template/footer');
				}
		}else{

				$data = array('username'=>$this->input->post('username'),
						'password'=>$this->input->post('password')
						);
				$result=$this->login_database->login($data);
				if ($result==true)
					{
						$username= $this->input->post('username');
						$result= $this->login_database->read_user_information($username);
						if ($result !=FALSE) 
							{
								$session_data = array
								(
									'username'=>$result[0]->u_name,
									'email' => $result[0]->u_email,
									'type'=> $result[0]->u_type
								);

								$this->session->set_userdata('logged_in',$session_data);

								if($result[0]->u_type=='admin')
									{
										$this->load->view('template/header',array(
										'title'=>'Hello Admin'

										));
										$this->load->view('admin_page');
										$this->load->view('template/footer');
									}else
										{
											$this->load->view('template/header',array(
											'title'=>'Hello User'

											));
											$this->load->view('user_page');
											$this->load->view('template/footer');
										}
								
							}
						
					}else{

						$data = array
							(
								'error_message' => 'Invalid Username or Password'

							);
						$this->load->view('template/header',array
							(
								'title'=>'Please Log In'
							));
						$this->load->view('login_form',$data);
						$this->load->view('template/footer');
						}

			}
	}
		public function logout()
		{
			/*if (isset($this->session->userdata['logged_in'])) 
				{
					$username = ($this->session->userdata['logged_in']['username']);
				}

			$this->session->unset_userdata('$username');*/
			$sess_array = array(
					'username' => ''
				);
			//$this->session->sess_destroy();
			
			$this->session->unset_userdata('logged_in',$sess_array);
			$data['message_display'] ='Successfully Logout';
			$this->load->view('template/header',array(
				'title'=>'Login Area'

				));
			$this->load->view('login_form',$data);
			
			$this->load->view('template/footer');
		}

	}



?>