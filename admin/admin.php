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
	<p style="color:white; margin-left:40px"> <a href="newadmin.php">Add Admin </a> </p>
</aside> 
	
<div style="margin:0px 40px">
	<div style="width:40%;float:left;height:60px;margin-top:80px"> 
		<form action="adminController.php" method="POST" class="form-inline">
			<div class="form-group"> &nbsp; &nbsp;
				<select class="form-control" name="subject"> 
					<?php 
						$con = new mysqli("localhost","root","","Exam");
						$q = "Select Subject from General";
						$r = $con->query($q);
						while(list($y) = $r->fetch_row()){
							echo("<option> $y </option>");
						}
					?>
				</select>
			</div> &nbsp;
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="GO" name="set">
			</div>
		</form>

	</div>
	
	<div style="width:40%;float:left;margin-top:80px;height:60px">
		<form action="adminController.php" method="POST">
			<div class="form-inline">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Add a new Subject" name="sub">
				</div> &nbsp;
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="CREATE" name="set">
				</div>
			</div>
		</form>
	</div>
</div>
	
</body>

</html>