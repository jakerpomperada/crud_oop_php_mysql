<?php

	include('code.php');

	$user = new Users();
	
	if($user->insert($_POST['name'],$_POST['address'], $_POST['age'], $_POST['gender'])) {
		header("location: index.php");
	} else {
		echo "Not save";
	}