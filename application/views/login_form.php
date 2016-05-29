<html>
	<?php
		if (isset($this->session->userdata['logged_in'])) 
		{
			header("location: http://localhost/login/index.php/user_auth/user_login_process");
		}
?>
<div class="container">
<div class="col-sm-12">
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
	</head>
		<body>
			<!--<?php
				if (isset($logout_message)) 
					{
						echo "<div class='message'>";
						echo $logout_message;
						echo "</div>";
					}
			?>	
			<?php
				if (isset($message_display)) 
					{
						echo "<div class='message'>";
						echo $message_display;
						echo "</div>";
					}
			?>-->
		<div id="main">
			<div id="login">
			<center>
				<h1>Login Form</h1>
					<hr/>
						<?php echo form_open('user_auth/user_login_process'); ?>
						<!--<?php
							echo "<div class='error_msg'>";
							if (isset($error_message)) 
							{
								echo $error_message;
							}
						echo validation_errors();
						echo "</div>";
						?>-->
							<label>UserName :</label>
							<input type="text" name="username" id="name" placeholder="username"/><br /><br />
							<label>Password :</label>
							<input type="password" name="password" id="password" placeholder="**********"/><br/><br />
							<input  type="submit" class="btn btn-success"  value=" Login " name="submit"/><br />
							<a class="btn btn-info" href="user_auth/user_registration_show">To SignUp Click Here</a>
							<?php echo form_close(); ?>
							</center>
			</div>
		</div>
	</body>
	</div>
</div>
</html>
