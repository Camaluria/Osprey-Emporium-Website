
<?php
	//Page to load admin only parts of the website. Deprecated due being out of scope. Keeping for historical accurary.
	require_once('classes/debug.php');  
	require_once('classes/Request.php');
	require_once('templates/header.php');
	$req = New Request();
	$req->admin_action();
?>



<!-- Enter page content here -->

<div class="container" >
	
</div>
<?php	           
	require_once('templates/footer.php');
?>


