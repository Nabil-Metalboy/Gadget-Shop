<div class="container">
	<div class="col-sm-12">
		<center>

			<html>
				<?php
					if (isset($this->session->userdata['logged_in'])) 
					{
						$username = ($this->session->userdata['logged_in']['username']);
						$email = ($this->session->userdata['logged_in']['email']);
					} else 
						{
							header("location: login");
						}
				?>
				<head>
					<title></title>
					<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
					<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
				</head>
				<body>
					<div id="profile">
						<?php
						echo "Hello <b id='welcome'><i>" . $username . "</i> !</b>";
						echo "<br/>";
						echo "<br/>";
						echo "Welcome to Admin Page";
						echo "<br/>";
						echo "<br/>";
						echo "Your Username is " . $username;
						echo "<br/>";
						echo "Your Email is " . $email;
						
						echo "<br/>";
						?>
						<br>
						<br>
						<a href="<?php echo base_url()?>index.php/users" class='btn btn-success'>Click Here To Go Admin Panel</a>
						<br>
						<br>
					</div>
					<br/>
				</body>
			</html>
		</center>
	</div>
</div>