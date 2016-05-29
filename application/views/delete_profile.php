<div class="container">
	<div class="col-sm-12">
		<form action="/ci/index.php/users/delete_user" method="post">
			<input type="text" class="form-control" placeholder="Readonly input" readonly="readonly"name="username" value="<?php echo $user->name ?>"></input>
			<input type="text" class="form-control" placeholder="Readonly input" readonly="readonly" name="email" value="<?php echo $user->email ?>"></input>
			<input type="text" class="form-control" placeholder="Readonly input" readonly="readonly" name="address" value="<?php echo $user->address ?>"></input>
			<input type="text" class="form-control" placeholder="Readonly input" readonly="readonly" name="mobile" value="<?php echo $user->mobile ?>"></input>
			<input type="text" name="userid" value="<?php echo $user->id; ?>" style="display: none;"></input>
			<br>
			<br>
			<button type="submit" class="btn btn-danger">Delete Profile</button>
		</form>
	</div>
</div>