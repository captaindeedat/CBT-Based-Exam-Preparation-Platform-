<?php

	session_start();
	$subject = $_SESSION['sub']; 
	$_SESSION['count'] = 0;
	
	$_SESSION['realAnswer'] = []; $_SESSION['answer'] = [];
	
	$all = [];
	$con = new mysqli("localhost","root","","Exam");
	$q = "Select question, optionA, optionB, optionC, optionD, Answer from $subject";
	$r = $con->query($q);
	
	while(list($b,$c,$d,$e,$f,$g) = $r->fetch_row()){
		$t = [];
		$t[] = $b; $t[] = $c; $t[] = $d; $t[] = $e; $t[] = $f; $t[] = $g;  $_SESSION['realAnswer'][] = $g;
		$all[] = $t;
	}
	//$counter = $_SESSION['count'];
	$_SESSION['all'] = $all;
	header("location:../question.php");
	
?>