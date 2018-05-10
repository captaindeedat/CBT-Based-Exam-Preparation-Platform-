<?php
	session_start();
	$counter = $_SESSION['count'];
	$all = $_SESSION['all'];
?>
<!doctype html>
<html>

<head>
	<title> Online Examination </title>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/main.css" type="text/css"> 
	<script src="js/jquery-3.2.1.js"></script>
	<script>
	$(document).ready(function(){
		
		
		var countDownDate = localStorage.getItem("time");

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
 

  // Find the distance between now an the count down date
  var distance = countDownDate - now; 

  // Time calculations for minutes and seconds
  
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="time"
 
  document.getElementById("time").innerHTML = minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("time").innerHTML = "EXPIRED";
	$("#f").submit();
  }
}, 1000);
		
	})
	
	
	
	
	
	</script>
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

<div class="main">
	
	<div class="submain">
		<div class="sub">
		 <form action="questionController.php" method="POST" id="f">
			<?php //foreach($all[$counter] as $g){ echo($g); } ?> 
			
				<p> <strong> Questions </strong> </p>
			</div>
			<div class="sub-other">
				<p style="font-size:20px"> <strong> Question No. <?php echo($counter+1);?> </strong> </p>
				<p style="font-size:18px"> <?php echo($all[$counter][0]);?> </p>
				<input type="radio" name="choose" value="A"> <?php echo($all[$counter][1]);?> <br>
				<!--div style="background-color:#f3f4f8; height:18px; boder: 1px solid #f3f4f8"-->
				<input type="radio" name="choose" value="B">	<?php echo($all[$counter][2]);?> <br>
				<input type="radio" name="choose" value="C">	<?php echo($all[$counter][3]);?> <br>
				<input type="radio" name="choose" value="D">	<?php echo($all[$counter][4]);?> <br>
				
			</div>
			
			<div class="sub-foot">
			
				<input type="submit" class="btn btn-primary" value="Previous" name="action"> &nbsp;
				<!--input type="submit" class="btn btn-primary" value="Mark for Review & Next" name="action"--> &nbsp;
				<input type="submit" class="btn btn-primary" value="Next" name="action"> &nbsp;
				<!--input type="submit" class="btn btn-primary" value="Clear Answer" name="action"--> &nbsp;
				<input type="submit" class="btn btn-primary" value="Finish" name="action">
			
				
			</div>
		 </form>
	</div>
	
	<div class="sub-others">
		<div class="sub">
			<p > <strong> <?php echo($_SESSION['sub']) ?> </strong> </p>
		</div>
		<div class="sub1">
			<p style="font-size:18px"> <strong> &nbsp; Exam: </strong> <span style="margin-left:100px"> <?php echo($_SESSION['sub']) ?> </span> </p>
			<p style="background-color:#f3f4f8; line-height:35px; font-size:18px"> <strong> &nbsp; Duration </strong> <span style="margin-left:80px"> 20 mins </span> </p>
			<p style="font-size:18px"> <strong> &nbsp; Time Left </strong> <span style="margin-left:80px" id="time">  </span> </p>
			
		</div>
	</div>
	
<div>
	
<footer>
		<div style="display:none" id="timer1">  </div>
		<div style="display:none" id="timer2">  </div>
</footer>
	
<script>
// Set the date we're counting down to

</script>	

</body>
</html>