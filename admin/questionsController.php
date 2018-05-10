<?php

	session_start();
	$y = $_SESSION['sub'];

	$con = new mysqli("localhost","root","","Exam");
	
	$ques = $_POST['question'];
	$optA = $_POST['optA'];
	$optB = $_POST['optB'];
	$optC = $_POST['optC'];
	$optD = $_POST['optD'];
	$ans = $_POST['answer'];
	
	$q = "Insert into $y(question,optionA,optionB,optionC,optionD,Answer) values('$ques','$optA','$optB','$optC','$optD','$ans')";
	$con->query($q);
	header("location:questions.php?status=success");
?>