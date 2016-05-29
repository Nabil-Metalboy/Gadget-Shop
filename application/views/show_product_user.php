<div class="container">
	<div class="col-sm-12">
<center><h2>Show Product Details</h2> </center>
	<table class="table">

	<tr>

		<th>Product Id</th>

		<th>Product quantity</th>

		<th>Product Price</th>

		<th>Product Name</th>
		<th>Option</th>
	</tr>

<?php foreach ($product_list as $p_key){ ?>

	<tr>

		<td><?php echo $p_key->id; ?></td>

		<td><?php echo $p_key->qty; ?></td>

		<td><?php echo $p_key->price; ?></td>

		<td><?php echo $p_key->name; ?></td>

		<td><a href="buy_user/<?php echo $p_key->id ?>"><img src="/ci/assets/images/cart1.png" alt="nothing to show" height="35px" width="70px"></td>
	</tr>
	
	<?php }?>
	</table>
	<center>
		<tr>
			<td><a href="/ci/index.php/users/user_add_to_cart/" class="btn btn-info">Insert Category</a></td>
		</tr>
		<br>
		<br>
		<a href="<?php echo base_url()?>index.php/user_auth/logout" class="btn btn-danger">Logout</a>

	</center>
</div>
</div>