<?php
	require_once '../sugar_rest.php';
	
	$sugar = new Sugar_REST("https://completesolardev.sugarondemand.com/service/v2/rest.php",
							"developer",
							"dR5DR+vE&Ex-8aZ");

	/*$leadID = "7c39a70e-62f8-db6b-4ad3-524b575c86bc";
	$options['where'] = " id = '$leadID' "; 
	echo "here";
	print_r($options);
	$result = $sugar->get("Leads",array("first_name"), $options);
	print_r($result);
	*/
	$result = $sugar->get_dropdown_values("Leads","status");
	print_r($result);
	
?>