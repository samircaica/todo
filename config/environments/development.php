<?php

	/*
	The way to set routes is:
	
	$default = array("producto", "index", "");
	$default = array("producto", "show", "1");
	*/
	$default = array("todo", "index", "");

	$database = array(
		"mysql" => array('host' => 'localhost', 'user' => 'root', 'password' => 'password', 'schema' => 'todo')
	);

?>

