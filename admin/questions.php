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

	<form action="questionsController.php" method="POST" >
		<div style="float:left; margin-left:60px; margin-top:40px; width:320px">
		<p> <?php  echo($y); ?></p>
		<?php if(isset($_GET['status'])){echo("<p style='color:steelblue'>Question Set Successfully </p>");} ?>
			<p> Question </p>
			<div class="form-group">
				<textarea rows="4" name="question" class="form-control" required> </textarea>
			</div>
			
			<div class="form-group">
				<input type="text"  placeholder="option A" class="form-control" name="optA" required>
			</div>
			<div class="form-group">
				<input type="text"  placeholder="option B" class="form-control" name="optB" required>
			</div>
			<div class="form-group">
				<input type="text"  placeholder="option C" class="form-control" name="optC" required>
			</div>
			<div class="form-group">
				<input type="text"  placeholder="option D" class="form-control" name="optD" required>
			</div>
			<div class="form-group">
				<select name="answer" class="form-control">
					<option value="A"> A </option>
					<option value="B"> B </option>
					<option value="C"> C </option>
					<option value="B"> D </option>
				</select>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Submit">
			</div>
		</div>
		
	</form>
	
</body>

</html>