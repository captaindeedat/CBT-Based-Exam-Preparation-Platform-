<?php

	$user = $_POST['user'];
	$pas = $_POST['pass'];

	$con = new mysqli("localhost","root","","Exam");
	$q = "Select * from admin where username='$user' and password='$pas' ";
	$r = $con->query($q);
	$num = $r->fetch_row();
	if($num > 0){
		header("location:admin.php");
	}else{
		header("location:index.php?status=Error");
	}
?>