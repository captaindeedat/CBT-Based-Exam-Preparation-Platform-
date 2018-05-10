<?php
	session_start();
	$y = $_SESSION['sub'];
?>

<!doctype html>
<html>

<head>
	<title> Exam </title>
	<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="../css/main.css" type="text/css"> 
</head>

<body>

<header>
	<span> <strong> Online Examination System </strong> </span>
	<div class="menu">
		<span > Education </span> <!-->&nbsp; <!-->
		<span class="back"> Student Panel </span> <!-->&nbsp; <!-->
		<span class="back"> Account </span>
	</div>
	
</header>

<aside>	
	<img src="../images/logo.png" alt="education">
	<p style="color:white; margin-left:40px"> <a href="questions.php">Set Question </a> </p>
	<p style="color:white; margin-left:40px"> <a href="newadmin.php">Add Admin </a> </p>
</aside> 

	<form action="newadminController.php" method="POST" style="float:left; margin-left:120px; margin-top:80px; width:280px">
		<div class="form-group">
			<input type="text" name="user" placeholder="username" class="form-control" required>
		</div>
		<div class="form-group">
			<input type="password" name="pass" placeholder="Password" class="form-control" required>
		</div>
		<div class="form-group" style="margin-left:80px">
			<input type="submit" value="submit" class="btn btn-primary">
		</div>
		
		<?php if(isset($_GET['status']))
			echo("<p style='color:blue'> Admin Added Successfully </p>");
		?>
		
	</form>
	
</body>

</html>