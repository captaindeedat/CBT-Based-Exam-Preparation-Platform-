<?php

	$user = $_POST['user'];
	$pas = $_POST['pass'];

	$con = new mysqli("localhost","root","","Exam");
	$q = "Insert into admin (username,password) values('$user','$pas')";
	$r = $con->query($q);
	
	header("location:newadmin.php?status=Accept");
?>