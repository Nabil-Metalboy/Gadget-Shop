<div class="container">
	<div class="col-sm-12">
		<form action="/Fahim/index.php/users/update_user" method="post">
			<input type="text" class="form-control" name="username" value="<?php echo $user->u_name ?>"></input>
			<input type="text" class="form-control" name="email" value="<?php echo $user->u_email ?>"></input>
			<input type="text" class="form-control" name="password" value="<?php echo $user->u_password ?>"></input>
			<input type="text" class="form-control" name="mobile" value="<?php echo $user->u_mobile ?>"></input>
			<input type="text" class="form-control" name="address" value="<?php echo $user->u_address ?>"></input>	
			<input type="text" name="userid" value="<?php echo $user->u_id; ?>" style="display: none;"></input>
			<br>
			<br>
			<button type="submit" class="btn btn-success">Update Profile</button>
			<button type="submit" class="btn btn-danger">Cancel</button>
		</form>
	</div>
</div>