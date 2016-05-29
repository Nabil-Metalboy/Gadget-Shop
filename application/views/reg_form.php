<html>
<head>
<title>My Form</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('form'); ?>

<h5>First Name</h5>
<input type="text" name="fname" value="" size="50" />

<h5>Last Name</h5>
<input type="text" name="lname" value="" size="50" />
<h5>Email</h5>
<input type="text" name="email" value="" size="50" />

<h5>Password</h5>
<input type="text" name="password" value="" size="50" />

<h5>Password Confirm</h5>
<input type="text" name="passconf" value="" size="50" />

<h5>Address</h5>
<input type="text" name="address" value="" size="50" />
<h5>Mobile</h5>
<input type="text" name="mobile" value="" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>