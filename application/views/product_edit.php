<div class="container">
	<div class="col-sm-12">
		<form action="/Fahim/index.php/users/update_product" method="post">
			<!--<input type="text" class="form-control" name="p_id" value="<?php echo $product->p_id ?>"></input>-->
			<input type="text" class="form-control" name="p_qty" value="<?php echo $product->p_qty ?>"></input>
			<input type="text" class="form-control" name="p_price" value="<?php echo $product->p_price ?>"></input>
			<input type="text" class="form-control" name="p_name" value="<?php echo $product->p_name ?>"></input>
			<input type="text" name="productid" value="<?php echo $product->p_id; ?>" style="display: none;"></input>
			<br>
			<br>
			<button type="submit" class="btn btn-success">Update Product</button>
			<button type="submit" class="btn btn-danger">Cancel</button>
		</form>
	</div>
</div>