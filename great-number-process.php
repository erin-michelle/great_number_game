<?php

	session_start();
	
	
// 	 if (isset($_POST['action']) && $_POST['action'] == 'restart_form')
// {
// 	$_SESSION = array();
// 	header("Location: great_number_game.php");
// }

	
	if ($_POST['answer'] > $_SESSION['rand'])
	{
		$_SESSION['status']= "You must be be trippin', man, Your answer is way too high!";
	}
	if ($_POST['answer'] < $_SESSION['rand'])
	{
		$_SESSION['status']=  "Have you been up to some shady business? Because you're answer is too low.";
	}
	else if ($_POST['answer'] == $_SESSION['rand'])
	{
		$_SESSION['user_guess'] = $_POST['answer'];
		$_SESSION['status']=  "You got it! Get out of my head! <br>
		</div><input type='hidden' name='reset' value='reset'>
       <input type='submit' id='sub' value='Restart'>";
    }
	
	if(isset($_POST['reset']) && $_POST['reset'] == 'reset')
 	{
   		session_destroy();
   		header("Location: great_number_game.php");
 	}

 		// session_unset($_SESSION['user_guess']);
		header("Location: great_number_game.php");
		exit()

	?>