<div class="container">
		<div class="col-sm-12">
			
		
<html>
<head>
	<meta http-equiv="Content-Type" content="text.html; charset="Cp1252" ">
	<title>Demo Shopping Cart</title>
</head>
<body>
	<?php
		$this->load->library('table');
		$this->table->set_heading('name','price','quantity','description' ,'buy');
	foreach ($listProduct as $p)
			{
				$this->table->add_row($p->name,$p->price,$p->quantity,$p->description,anchor('shoppingcart/buy/'.$p->id,'Order Now'));
				$this->table->set_template(array('table_open'=>'<table border="1" cellpadding="10" cellspacing="3">'));
			}
			echo $this->table->generate();
	 
	 ?>

</body>
</html>
</div>
</div>