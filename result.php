<!doctype html>
<html>

<head>
	<title> Online Examination </title>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/main.css" type="text/css"> 
</head>

<body>
	<?php session_start(); ?>
<header>
	<span> <strong> Online Examination System </strong> </span>
	<div class="menu">
		<span > Education </span> <!-->&nbsp; <!-->
		<span class="back"> Student Panel </span> <!-->&nbsp; <!-->
		<span class="back"> Account </span>
	</div>
	
</header>

<aside>	
	<img src="images/logo.png" alt="education">
	<p style="color:white; margin-left:40px"> Result </p>
</aside>

<div class="intromain">
		
		<div style="margin:0px 220px; border: 1px solid #ededed; height: 400px">
			<p style="background-color:#ededed; height:40px; text-align:center; font-size: 16px; padding-top: 10px"> Your Result </p>
			<div style="margin: 20px 40px ">
			
			<div style="margin-left:180px; margin-top:40px">
				<?php 
					if(isset($_SESSION['results'])){
						$statement = $_SESSION['results'];
						foreach($statement as $stm){
							echo($stm ."<br>");
						}
					}
				?>
				<button class="btn btn-success" style="margin-left:50px"> <a href="index.php" style="color:white">Home </a> </button>
			</div>
			</div>
		</div>
</div>
	
<footer>
		
</footer>
	
</body>

<script>
	function setTimer(){
		localStorage.setItem("time", new Date().getTime() + 20 * 60 * 1000); 
	}
	document.getElementById("timer").onclick = setTimer();
</script>

</html>