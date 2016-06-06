<div class="container">
	<div class="col-sm-12">

<center><h2>CRUD Application</h2> </center>
<table class="table">

<tr>

<th>Id</th>

<th>User Name</th>

<th>Email</th>

<th>Mobile</th>

<th>Address</th>

<th>Option</th>

<th>Option</th>

</tr>

<?php foreach ($user_list as $u_key){ ?>

<tr>

<td><?php echo $u_key->u_id; ?></td>

<td><?php echo $u_key->u_name; ?></td>

<td><?php echo $u_key->u_email; ?></td>

<td><?php echo $u_key->u_mobile; ?></td>

<td><?php echo $u_key->u_address; ?></td>



<td><a href="/Fahim/index.php/users/edit/<?php echo $u_key->u_id; ?>" class="btn btn-info"  onclick="return confirm('Are you sure  to Edit?')">Edit</a></td>
<td><a href="/Fahim/index.php/users/delete/<?php echo $u_key->u_id; ?>" class="btn btn-danger"onclick="return confirm('Are you sure  to Delete?')">Delete</a>
</td>
</tr>

<?php }?>

</table>
<div>
	<center>
	<?php echo $this->pagination->create_links();?>
	</center>
</div>
	</div>


</div>
<center>
<tr>
	<td><a href="/Fahim/index.php/users/insert/" class="btn btn-info">Insert New User</a></td>
</tr>
<br/>
<br/>
<tr>
	<td><a href="/Fahim/index.php/shoppingcart/view_cart" class="btn btn-success">View Cart</a></td>
</tr>
<br/>
<br/>
<a href="<?php echo base_url()?>index.php/user_auth/logout" class="btn btn-danger">Logout</a>
<!--<div class="dropdown">
<button class="btn btn-defaut dropdown-toggle" type="button" id="dropdown1" data-toggle='dropdown' area-hashpopup='true' aria-expanded='true'>Dropdown<span class="caret"></span></button>
<ul class="dropdown-menu" aria-lebelledby='dropdown1'>
	<li><a href="#">Shoe</a></li>
	<li><a href="#">Pant</a></li>
	<li><a href="#">Sandle</a></li>
	<li><a href="#">Pen</a></li>
	<li><a href="#">Panjabi</a></li>
	<li><a href="#">Hizab</a></li>
	<li role="separator" class="divider"></li>

</ul>
</div>-->
</center>
<!--<div class="container">
  <div class="progress progress-striped active">
    <div class="progress-bar" style="width: 100%;">
      <span class="sr-only">60% Complete</span>
    </div>
  </div>
</div>-->