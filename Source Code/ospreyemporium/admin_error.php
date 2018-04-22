<?php
	//Page to show user that invalid attempt to get to admin pages did not work. Deprecated due to being out of scope. Keeping for historical accurary.
	require_once('classes/debug.php');  
	require_once('classes/Request.php');
	require_once('templates/header.php');
?>





<div class="container" >        
	<h1>You are not permitted to perform this action</h1>
	
	<p class="error"> You do not possess the authorization
	to process this administrator request</p>
	
</div>
