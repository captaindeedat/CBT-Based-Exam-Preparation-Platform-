<?php
	$con = new mysqli("localhost","root","","Exam");
	$value = $_POST['set'];
	
	switch($value){
		case 'CREATE':
			$sub = $_POST['sub'];
			$q = "Insert into General(Subject) values('$sub')";
			$y = "Create table $sub(Id INT AUTO_INCREMENT PRIMARY KEY, question text, optionA varchar(255), optionB varchar(255), optionC varchar(255), optionD varchar(255), Answer varchar(2) )";
			$con->query($q);
			$con->query($y);
			header("location:admin.php");
		break;
		case 'GO':
			session_start();
			$_SESSION['sub'] = $_POST['subject'];
			header("location:questions.php");
		break;
	}
?>