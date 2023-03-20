<?php

	$arr = array(
		array("id" => 1, "email" => "gil@gmail.com"),
		array("id" => 2, "email" => "eduardo@gmail.com")
	);
	print_r($arr);
	echo "<br>";

	unset($arr[0]);
	print_r($arr);