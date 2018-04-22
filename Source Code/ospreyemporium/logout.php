<?php
	//delete user session on logout attempt
	session_start();
	
	if($_SESSION['username'] == "")
	{
		header("Location: index.php?error=2");
		exit;
	}
	
	session_destroy();
	header("Location: index.php");
?>
