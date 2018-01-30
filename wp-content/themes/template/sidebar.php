<?php

	if(isset($_POST['submit'])){

		$name = $_POST['name'];

		$wpdb->query("INSERT INTO wp_woocommerce_shipping_zones(zone_name,zone_order)VALUES('$name','$name')");

	}


	if(isset($_POST['view'])){

		$result = $wpdb->get_results("SELECT * FROM wp_woocommerce_shipping_zones");
		
		//print_r($result);
		foreach($result as $r){						
		?>

			<p><?php echo $r->zone_name;?></p>

		<?php }

		
	}


?>






<form method="post">
	<input type="text" name="name">
	<input type="submit" name="submit">
</form>


<form method="post">
	<input type="submit" name="view" value="view">
</form>