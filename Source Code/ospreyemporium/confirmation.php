
<?php
	//Confirmation Website after an Order has been placed and redirect to home page
	require_once('classes/debug.php');  
	require_once('classes/Request.php');
	require_once('templates/header.php');
	if (session_status() !== PHP_SESSION_ACTIVE){session_start();}		 
	$_SESSION['cart'] = array();
	header('Refresh: 5; URL=http://139.62.210.151/~group4/ospreyemporium/');
?>
<h2 style="font-family:Helvetica Neue Lt Std"  align=center>Your order has been placed!</h2></br> 
<h6 style="font-family:Helvetica Neue Lt Std"  align=center>You will be redirected to homepage in 5 seconds</h6></br> 

<?php	           
	require_once('templates/footer.php');
?>

