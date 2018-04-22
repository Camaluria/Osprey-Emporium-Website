
<style>
	input[type="submit"]{
    background-color: white;
    border: 2px solid #4CAF50;
    color: black; 
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	}
	
	input[type="submit"]:hover{
	background-color: #4CAF50;
    color: white;
	}
</style>

<?php
	//Page to purchase items from cart.
	require_once('classes/debug.php');  
	require_once('classes/Request.php');
	require_once('templates/header.php');         
	error_reporting(0); //turn off error reporting on page
	session_start(); //retrieve session values
	
	//redirect if user is not logged in
	if(!isset($_SESSION['username']))
	{
		header('location:http://139.62.210.151/~group4/ospreyemporium/login.php');
	}
	$totalCost = $_POST['cost']; //retrieve cart cost total
	$cart = $_POST['cart']; //create cart array from session values
?>

<div class="container" >        
	<h2 style="font-family:Helvetica Neue Lt Std"  align=center>Checkout </h2></br> 
	<font color="red">*</font>are required fields
	<form class ="form-horizontal" method="post" form action= "confirmation.php" style="width:80%;height:200px;">
		
		
	<div class="container">
	<table style="margin: 0 auto;z-index: 1;width:50%;height: 50px;">
	<tr><td><h2 style="font-family:Helvetica Neue Lt Std">Shipping Information</h2><br></td></tr>
	<tr>
	<td><label><b><font color="red">*</font>Name</b></label></td><td>
	<input type="text"  type="text" placeholder="" name="name" required >
	</td>
	</tr>
    <tr><td><br></td></tr>
	<tr>
	<td><label><b><font color="red">*</font>Street Address</b></label></td><td>
	<input type="text" placeholder="" name="street_address" required >
	</td>
	</tr>
	<tr><td><br></td></tr>
	<tr>
	<td><label><b><font color="red">*</font>City</b></label></td><td>
	<input type="text" placeholder="" name="city" required >
	</td>
	</tr>
	<tr><td><br></td></tr>
	<tr>
	<td><label><b><font color="red">*</font>Zip</b></label></td><td>
	<input type="number" type="text" placeholder="" name="zip" required >
	</td>
	</tr>
	</table>
	<br>
	
	<table style="margin: 0 auto;z-index: 1;width:50%;height: 50px;">
	<tr><td><h2 style="font-family:Helvetica Neue Lt Std">Payment Information</h2><br></td></tr>
	<tr>
	<td><label><b><font color="red">*</font>Card Number</b></label></td><td>
	<input type="number" placeholder="" name="card_number" required >
	</td>
	</tr>
	<tr><td><br></td></tr>
	<tr>
	<td><label><b><font color="red">*</font>Card Street Address</b></label></td><td>
	<input type="text" placeholder="" name="card_street_address" required >
	</td>
	</tr>
	<tr><td><br></td></tr>
	<tr>
	<td><label><b><font color="red">*</font>Card City</b></label></td><td>
	<input type="text" placeholder="" name="card_city" required >
	</td>
	</tr>
	<tr><td><br></td></tr>
	<tr>
	<td><label><b><font color="red">*</font>Card Zip</b></label></td><td>
	<input type="number" placeholder="" name="card_zip" required >
	</td>
	</tr>
	</table>
	
	
	<?php
	echo '</br>';
	echo '<div class="panel-group">';
	echo '<div class="pannel panel-success">';
	echo '<div class= "panel-heading"><h3 align=center style="color:blue;font-family: Helvetica Neue Lt Std;font-size:200%;">Total Price</h3></div>';
	echo "<div><h3 align=center>$$totalCost</h3></div>";
	echo '</br>';
	?>
	
	<table  align=center>
	<tr>
	<td>
	<input type="submit" name = "submit" value="Checkout">
	</td>
	</tr>
	</table> 
	</form>
    <br> <br>
	
	
	
	<?php	           
	require_once('templates/footer.php');
	?>
	
	
		