<!doctype html>
<html>

<head>
	<title> Online Examination </title>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/main.css" type="text/css"> 
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
	<img src="images/logo.png" alt="education">
	<p style="color:white; margin-left:40px"> Result </p>
</aside>

<div class="intromain">
		<div class="introbody">
			<p> Welcome <?php   if(isset($_GET['username'])){ echo($_GET['username']);}?> </p> 
		</div>
		
		<div style="margin:0px 220px; border: 1px solid #ededed; height: 400px">
			<p style="background-color:#ededed; height:40px; text-align:center; font-size: 16px; padding-top: 10px"> Take Test </p>
			<div style="margin: 20px 40px ">
				<p> <span class="describe"> You are about to begin the following: </span> </p>
				<p> <span class="describe"> Test: </span> <span> <?php   if(isset($_GET['quest'])){ echo($_GET['quest']);}?> </span></p>
				<p> <span class="describe"> Total Question: </span> <span> <?php if(isset($_GET['numb'])) {echo($_GET['numb']);} ?> </span></p>
				<p> <span class="describe"> Test Duration: </span> <span> 20 mins </span></p>
				
				<div style="background-color:#ddf3a1; height: 100px">
					<p style="padding:10px 0px 0px 20px"> Before you begin, Read the following </p>
					<ul type="square">
						<li> Do not refresh the page or close your test window </li>
						<li> Please, keep in mind the time limit of each section using the timer on the test interface </li>
					<ul>
				</div> <br>
				<form action="server/questionController.php" method="POST">
				<span style="margin-left: 280px; padding-top: 10px"> <input type="submit" class="btn btn-primary" value="Start Test" id="timer"> </span>
				</form>
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