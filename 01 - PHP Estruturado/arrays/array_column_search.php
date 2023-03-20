<?php

	$arr = array(
		array("id" => 1, "email" => "gil@gmail.com"),
		array("id" => 2, "email" => "eduardo@gmail.com")
	);
	print_r($arr);
	echo "<br>";

	$index = array_search("eduardo@gmail.com", array_column($arr, 'email'));
	print_r($index);