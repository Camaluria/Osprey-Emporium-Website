
<?php	 
	//Login Page. Allows guests to create an account or use existing credentials
	require_once('classes/debug.php');  
	require_once('classes/Request.php');         
	require_once('templates/header.php');         
?>





<div class="container" >        
	<h2>Login </h2>
	<form  method="post" style="width:40%;">
		<div class="imgcontainer">
			<img src="images/profile_icon.png" style ="margin-bottom:30px;" alt="Avatar" class="avatar" height="200" width="200">
		</div>
		
		<div class="container">
			<table>
				<tr>
					<td><label><b>Username</b></label></td><td>
						<input type="text" class=""  placeholder="Enter Username" name="username" required>
					</td>
				</tr>
				<tr>
					<td>
						<label><b>Password</b></label>
						</td><td>
						<input type="password" class=""  placeholder="Enter Password" name="password" required>
					</td></tr>
					<tr><td>
					<input type="checkbox"> Remember me</td></tr>
					<tr><td>
						<input type="submit" name = "submit" value="Login">
					</td></tr></table>
		</div>
		
		<br>
		<div class="container-fluid" style="background-color:#f1f1f1;">
			Don't have an account? <span class="psw"> <a href="register.php">Register</a></span>
		</div>
	</form>
</div>

<?php	           
	//require_once('templates/footer.php');
	//on form submission validate user and login
	if ( isset( $_POST['submit']) ) { 		     
		$req = New Request();
		$req->request_login($_POST);			    
	}	
?>


