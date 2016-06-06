<div class="container">
	<div class="col-sm-12">
<center><h2>Show Product Details</h2> </center>
	<table class="table">

	<tr>

		<th>Product image</th>

		<th>Product Name</th>

		<th>Product qty</th>

		<th>Product description</th>

		<th>Product Price</th>

		<th>Manufacturer</th>

		<th>Category Name</th>

		<th>Size</th>

		<th>Option</th>
		<th>Option</th>
		<th></th>
	</tr>

<?php foreach ($product_list as $p_key){ ?>

	<tr>

		<td><img src= "<?php echo $p_key->p_image ;?>"width=150 height=100></td>

		<td><?php echo $p_key->p_name; ?></td>

		<td><?php echo $p_key->p_qty; ?></td>

		<td><?php echo $p_key->p_description; ?></td>

		<td><?php echo $p_key->p_price; ?></td>

		<td><?php echo $p_key->m_name; ?></td>

		<td><?php echo $p_key->category_name ?></td>

		<td><?php echo $p_key->category_size;?></td>

		

		<td><a href="/Fahim/index.php/users/edit_product/<?php echo $p_key->p_id; ?>" class="btn btn-info"onclick="return confirm('Are you sure  to Edit?')">Edit</a></td>

		<td><a href="/Fahim/index.php/users/delete_product/<?php echo $p_key->p_id; ?>"class="btn btn-danger"onclick="return confirm('Are you sure  to Delete?')">Delete</a>
		</td>

		<td><a href="shoppingcart/buy/<?php echo $p_key->p_id ?>"><img src="/Fahim/assets/images/cart1.png" alt="nothing to show" height="35px" width="70px"></td>
	</tr>
	
	<?php }?>
	</table>
	<center>
		<tr>
			<td><a href="/Fahim/index.php/users/add_to_cart/" class="btn btn-info">Insert Product</a></td>
		</tr>
		<br>
		<br>
		<tr>
			<td><a href="/Fahim/index.php/users/add_to_category/" class="btn btn-info">Insert Category</a></td>
		</tr>
	</center>
</div>
</div>