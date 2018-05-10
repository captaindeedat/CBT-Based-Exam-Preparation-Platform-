<?php 
		session_start();
		$num = $_SESSION['number'];
	if(isset($_POST['action'])){
		
		$param = $_POST['action'];
		switch($param){
			case 'Previous':
				if($_SESSION['count'] > 0){
				$p = $_POST['choose'];
				$ct = $_SESSION['count'];	$_SESSION['answer'][$ct] = $p;
				$_SESSION['count'] = $_SESSION['count'] - 1;
				}
				header("location:question.php");
			break;
			case 'Next':
				if($_SESSION['count'] < $num-1){
				$p = $_POST['choose'];
				$ct = $_SESSION['count'];	$_SESSION['answer'][$ct] = $p;
				$_SESSION['count'] = $_SESSION['count'] + 1;
				}
				header("location:question.php");
			break;
			case 'Finish':
				$y = count($_SESSION['answer']); $score = 0; $wrong = []; //print_r($_SESSION['answer']); print_r($_SESSION['realAnswer']); echo($y);
				
				for($i=0; $i < $y; $i++){
					if ($_SESSION['realAnswer'][$i] == $_SESSION['answer'][$i]){
						$score++;
					}
					else{
						$wrong[] = $i + 1;
					}
				}
				$user = $_SESSION['user'];
				
				$result = [];
				$result[] = "Thanks for taking the Exam ".$user;
				$result[] = "You got " .$score.  " Questions correctly";
				
				//echo("Thanks for taking the Exam $user"."<br>");
				//echo("You got $score Questions correctly".'<br>');
				
				if ($score < $num){
					$statement = "You failed Questions ";
					//echo("You failed Questions ");
					foreach($wrong as $w){
						$statement += $w." ";
						//echo("$w  ");
					}
					$result[] = $statement;
				}
				$_SESSION['results'] = $result;
				header("location:result.php");
			break;
		}
	}
	
	else{
	//session_start();
	$y = count($_SESSION['answer']); $score = 0; $wrong = []; //print_r($_SESSION['answer']); print_r($_SESSION['realAnswer']); echo($y);
				
				for($i=0; $i < $num; $i++){
					if ($_SESSION['realAnswer'][$i] == $_SESSION['answer'][$i]){
						$score++;
					}
					else{
						$wrong[] = $i + 1;
					}
				}
				$user = $_SESSION['user'];
				echo("Thanks for taking the Exam $user"."<br>");
				echo("You got $score Questions correctly".'<br>');
				
				if ($score < $num){
					echo("You failed Questions ");
					foreach($wrong as $w){
						echo("$w  ");
					}
				}
	}
?>