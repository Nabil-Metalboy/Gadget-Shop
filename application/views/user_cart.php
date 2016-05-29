<div class="container">
	<div class="col-sm-12">
<!DOCTYPE html>
<html>
<head>
	<title>User Shopping Cart</title>
</head>
<body>
<center>
	<h3>Cart Infromation</h3>
	<?php echo anchor('users/user_panel','Continue Shopping')?>
	<br/>
	<br/>
	<?php echo form_open('users/update');?>
	<table cellpadding="6" cellspacing="1" border="1">

<tr>
  <th>Option</th>
  <th>QTY</th>
  <th>Item Description</th>
  <th>Item Price</th>
  <th>Sub-Total</th>
</tr>

<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

	<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

	<tr>
	  <td align="center"><?php echo anchor('users/user_cart_delete/'.$items['rowid'],'X') ?></td>
	  <td><?php echo form_input(array('name' => 'qty'.$i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '1')); ?></td>
	  <td>
		<?php echo $items['name']; ?>

			<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

				<p>
					<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

						<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

					<?php endforeach; ?>
				</p>

			<?php endif; ?>

	  </td>

	  <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
	  <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>

	</tr>

<?php $i++; ?>

<?php endforeach; ?>
<tr>
  <td colspan="1"></td>
  <td class="right"><strong>Items no.</strong></td>
  <td class="right"><?php echo $this->cart->format_number($this->cart->total_items()); ?></td
  <td colspan="1"> </td>
  <td class="right"><strong>Total</strong></td>
  <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>

<p><?php echo form_submit('','Update your Cart'); ?></p>

<button onclick="mybutton()">Check Out</button>
	<script type='text/javascript' >
		function mybutton() //calling mubutton() function after clicking
			{
				
				alert('Successfully Checked Out');
				//window.location.replace('/ci/index.php/users');
			}
	</script>
</center>
</body>
</html>
</div>
</div>