<div class="container">
	<div class="col-sm-12">
<!DOCTYPE html>
<html>

<?php
	if (isset($this->session->userdata['logged_in'])) 
	{
		$username = ($this->session->userdata['logged_in']['username']);
		$type = ($this->session->userdata['logged_in']['type']);
		$id = ($this->session->userdata['logged_in']['id']);
	} else 
		{
			header("location: login");
		}
?>
<head>
	<title></title>
</head>
<center>
<body>
<?php 
	echo "welcome <b>".$username."</b>";
	echo "<br/>";
	echo "<br/>";
	echo "Your type is <b>".$type."</b>";
	echo "<br/>";
	echo "<br/>";
	echo "Your type is <b>".$id."</b>";
?>

<br/>
<br/>
<a href="<?php echo base_url()?>index.php/users/user_panel" class='btn btn-success'>Click Here To Go User Panel</a>
</body>
</center>
</html>
</div>
</div>