<div class="container">
	<div class="col-sm-12">
<center><h2>Show Product Details</h2> </center>
	<table class="table">

	<tr>

		<th>Product Image</th>

		<th>Product Name</th>

		<th>Product Qty</th>

		<th>Product Description</th>

		<th>Product Price</th>

		<th>Manufacturer</th>

		<th>Option</th>
	</tr>

<?php foreach ($product_list as $p_key){ ?>

	<tr>

		<td><img src= "<?php echo $p_key->p_image;?>" width=150 height=100></td>
        
		<td><?php echo $p_key->p_name; ?></td>

		<td><?php echo $p_key->p_qty; ?></td>

		<td><?php echo $p_key->p_description; ?></td>

		<td><?php echo $p_key->p_price; ?></td>

		<td><?php echo $p_key->m_name; ?></td>


		<td><a href="buy_user/<?php echo $p_key->p_id ?>"><img src="/Fahim/assets/images/cart1.png" alt="nothing to show" height="35px" width="70px"></td>
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