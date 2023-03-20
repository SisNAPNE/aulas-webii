<?php

	$table = "users";
	$data = array("id" => 1, "name" => "Gil");

	$sql = sprintf(
		"INSERT INTO %s(%s) VALUES(%s)",
		$table,
		implode(", ", array_keys($data)),
		implode(", ", array_values($data)),
	);

	print_r($sql);