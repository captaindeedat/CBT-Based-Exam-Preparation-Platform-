<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Online Examination Portal</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <div class="navbar navbar-dark navbar_color">
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand">Online Exams</a>
        <p id="date_time"></p>
      </div>
    </div>

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Online Examination Portal</h1>
        <p class="lead text-muted"> This portal has been designed to help students prepare for any CBT Examination. 
		It has several courses you can choose from and it's easy to use. 
		This platform has been designed to give you the real exam experience with varieties of courses to choose from. 
		The platform is useful for schools, colleges, universities, teachers and professors for evaluating candidates' strength. 
		Our courses are frequently updated and new courses are been introduced frequently.</p>

      </div>
    </section>

	<div class="container self form_entry">
		<div class="row">
            <div class="col-sm-4">
			<a href="#"><img src="images/interaccion.png" alt="online exam" width="320"></a>
			</div>

			<div class="col-sm-4">
				<form action="server/introController.php" method="POST"> 
					<input class="btn input_color" type="text" name="nickname" placeholder="Nick Name" required><br/><br/>
					<select class="btn input_color" name="questions">
					<?php
					//$con = new mysqli("localhost","root","","examproject");
					$con = new mysqli("localhost","root","","Exam");
					$q = "Select subject from General";
					$r = $con->query($q);
					
		
		while(list($y) = $r->fetch_row()){
							echo("<option> $y </option>");					
							}
					?>
					  
					</select> <br/><br/>
					<input type="submit" class="btn input_color" value="Submit" >
				</form>
			</div>

			<div class="col-sm-4">
				<h2>Online Exams!!!</h2>
				<p>Take your examinations online</p>
			</div>
		</div>
	</div>

	<hr class="featurette-divider">

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#"></a>
        </p>
        <p>Kick start your awesome experience with any of our courses. 
		Each course has a speculated time attached to it. You are adviced to answer the questions as fast as you can.
		If the exam you wish to take isn't available, please check again after sometime as questions are introduced on regular bases.
		Your final score is revealed instantly and all missed questions are shown. 
		This unique platform is copy; Specially designed for you!</p>
        <p>New Online Exam <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started online exam</a>.</p>
      </div>
    </footer>

    <!--CDN (Content Delivery Network)-->
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        var d = new Date();
        document.getElementById("date_time").innerHTML = d;
    </script>
  </body>
</html>

