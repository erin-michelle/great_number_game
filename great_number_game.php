<?php

	session_start();
    if(!isset($_SESSION['rand'])){
        $_SESSION['rand'] = rand(1,100);
    }

?>



<html>
<head>
	<title>The Great Number Game!</title>
	<style>
		body {
			text-align: center;
			font-family: futura;
		}
	</style>
</head>
<body>
	<h1>Welcome to the Great Number Game!</h1>
	<p>I am thinking of a number between 1 and 100</p>
	<p>Take a guess!</p>

	<form method="post" action="great-number-process.php">
        <input type="text" name="answer">
        <input type="submit" value="Submit">
    </form>

     <div class="restart">
            <form id="restart-form" action="test-process.php" method="post">
                <input type="hidden" name="action" value="restart_form" />
                <input type="submit" value="Start Over">
            </form>
        </div>

  
     <div class="response">   
    <?php


    if(isset($_SESSION['status'])) {
    	echo "My number: " . $_SESSION['rand'];
		echo "<br/>";
    	echo $_SESSION['status'];
    	unset($_SESSION['status']);

    }
    ?>

    </div>
</body>
</html>
