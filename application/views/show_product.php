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
		<th>Option</th>
		<th></th>
	</tr>

<?php foreach ($product_list as $p_key){ ?>

	<tr>

		<td><?php echo $p_key->id; ?></td>

		<td><?php echo $p_key->qty; ?></td>

		<td><?php echo $p_key->price; ?></td>

		<td><?php echo $p_key->name; ?></td>

		<td><a href="/ci/index.php/users/edit_product/<?php echo $p_key->id; ?>" class="btn btn-info"onclick="return confirm('Are you sure  to Edit?')">Edit</a></td>

		<td><a href="/ci/index.php/users/delete_product/<?php echo $p_key->id; ?>"class="btn btn-danger"onclick="return confirm('Are you sure  to Delete?')">Delete</a>
		</td>

		<td><a href="shoppingcart/buy/<?php echo $p_key->id ?>"><img src="/ci/assets/images/cart1.png" alt="nothing to show" height="35px" width="70px"></td>
	</tr>
	
	<?php }?>
	</table>
	<center>
		<tr>
			<td><a href="/ci/index.php/users/add_to_cart/" class="btn btn-info">Insert Product</a></td>
		</tr>
		<br>
		<br>
	</center>
</div>
</div>