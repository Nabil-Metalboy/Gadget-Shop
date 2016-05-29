<div class="container">
	<div class="col-sm-12">
		<table border="0">
		<form action="/ci/index.php/users/deleting_product" method="post">
			<!--<input type="text" class="form-control" name="p_id" value="<?php echo $product->p_id ?>"></input>-->
			<input type="text" class="form-control" placeholder="Readonly input" readonly="readonly" name="p_qty" value="<?php echo $product->qty ?>"></input>
			<input type="text" class="form-control" placeholder="Readonly input" readonly="readonly" name="p_price" value="<?php echo $product->price ?>"></input>
			<input type="text" class="form-control" placeholder="Readonly input" readonly="readonly" name="p_name" value="<?php echo $product->name ?>"></input>
			<input type="text" name="productid" value="<?php echo $product->id; ?>" style="display: none;"></input>
			<br>
			<br>
			<td></td>
			<button type="submit" class="btn btn-success">Delete Product</button>
			<button type="submit" class="btn btn-danger">Cancel</button>
		</form>
		</table>
	</div>
</div>