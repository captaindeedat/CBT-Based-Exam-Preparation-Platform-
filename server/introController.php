<?php

	session_start();
	$_SESSION['sub'] = $_POST['questions'];
	$_SESSION['user'] = $_POST['nickname'];
	
	$sub = $_POST['questions'];
	
	$con = new mysqli("localhost","root","","Exam");
	$q = "Select * from $sub";
	$r = $con->query($q);
	$num = mysqli_num_rows($r);
	
	$_SESSION['number'] = $num;
	
	$user = $_POST['nickname'];
	$ques = $_POST['questions'];
	header("location:../intro.php?username=$user&quest=$ques&numb=$num");
?>