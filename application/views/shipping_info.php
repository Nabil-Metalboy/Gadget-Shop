<center>
<div class="container">
	<div class="col-sm-12">
		<form action="/Fahim/index.php/shoppingcart/insert_shipping" method="post">
		<table border="0">
		<tr>
		<td>FULL NAME</td>
			<td><input type="text" name='fname'></input></td>
		</tr>
		<br/>
		<br/>

		<tr>
		<td>EMAIL</td>
		<td><input type="text" name='email'></input></td>
		</tr>
		<br/>
		<br/>

		<tr>
		<td>ADDRESS</td>
		<td><input type="text" name='address'></input></td>
		</tr>
		<br/>
		<br/>

		<tr>
		<td>MOBILE</td>
		<td><input type="text" name='mobile'></input></td>
		</tr>
		<br/>
		<br/>

		<tr>
		<td>CITY</td>
		<td><input type="text" name='city'></input></td>
		</tr>
		<br/>
		<br/>

		<tr>
		<td>COUNTRY</td>
			<td>
				<select type='country'>
					<option value="1">BANGLADESH</option>
					<option value="2">AMERICA</option>
					<option value="3">INDIA</option>
					<option value="4">PAKISTAN</option>
				
				</select>
			</td>
		</tr>
		</table>
		
			<br>
			<br>
			<button type="submit" class="btn btn-success">Save Shipping Info</button>
		</form>
		<br/>
		<br/>
		<tr>
			<td><a href="/Fahim/index.php/shoppingcart/view_cart" class="btn btn-success">View Cart</a></td>
		</tr>
	</div>
</div>
</center>