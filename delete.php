<?php
	/*
	* Author: Dr. Jake Rodriguez Pomperada, MAED-IT, MIT, PHD-TM
	* URL: https://www.jakerpomperada.com
	* Email: jakerpomperada@gmail.com
    * Date: February 22, 2025   Saturday  
	* Description: This is a simple CRUD(Create, Read, Update, Delete) using OOP(Object Oriented Programming) in PHP and MySQL
	*/
	include 'code.php';
	$users = new Users();
	if($users->delete(intval($_GET['id']))) {
		header("Location: index.php");
	} else {
		echo "No user found";
	}