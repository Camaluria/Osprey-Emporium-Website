
<?php	 
	//Customer page. Creates Customer Object and starts Session after login
	require_once('classes/debug.php');  
	require_once('classes/Request.php');
	require_once('templates/header.php');
	$req = New Request();
	$req->customer_action();
?>





<div class="container" >
	
</div>
<?php	           
	require_once('templates/footer.php');
?>


