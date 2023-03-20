<?php

	$arr = array(
		"Gil" => array("id" => 1, "email" => "gil@gmail.com"),
		"Eduardo" => array("id" => 2, "email" => "eduardo@gmail.com")
	);
	print_r($arr);
	echo "<br>";

	unset($arr["Eduardo"]);
	print_r($arr);