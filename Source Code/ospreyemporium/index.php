
<?php
	//Main page of the website. Allows for login and viewing of products and categories
	require_once('classes/debug.php');  
	require_once('classes/Request.php');
	require_once('templates/header.php');
	
	if (session_status() !== PHP_SESSION_ACTIVE){session_start();}
	if(isset($_SESSION['username'])){
		$name = $_SESSION['username'];
		echo "<h2 align=center>Welcome Back, $name!</h2>";
	}		
?>



<div class="container">    
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading">Household</div>
				<div class="panel-body"><a href="categoryproduct.php?category='Household'" onclick="post"><img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/4/005/0a9/2b4/2b7ea04.png" class="img-responsive" style="width:350px;height:250px;" alt="Image"></a></div>
				<div class="panel-footer">Click here to view all household products!</div>
			</div>
		</div>
		<div class="col-sm-4"> 
			<div class="panel panel-danger">
				<div class="panel-heading">Food</div>
				<div class="panel-body"><a href="categoryproduct.php?category='Food'" onclick="post"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Good_Food_Display_-_NCI_Visuals_Online.jpg/1200px-Good_Food_Display_-_NCI_Visuals_Online.jpg" class="img-responsive" style="width:350px;height:250px;" alt="Image"></a></div>
				<div class="panel-footer">Click here to view all food products!</div>
			</div>
		</div>
		<div class="col-sm-4"> 
			<div class="panel panel-success">
				<div class="panel-heading">Office</div>
				<div class="panel-body"><a href="categoryproduct.php?category='Office'" onclick="post"><img src="https://s7d4.scene7.com/is/image/roomandboard/parsons_189554_17e_g?$str_g$&size=760,480&scl=1" class="img-responsive" style="width:350px;height:250px;" alt="Image"></a></div>
				<div class="panel-footer">Click here to view all office products!</div>
			</div>
		</div>
	</div>
</div><br>

<div class="container">    
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading">Automotive</div>
				<div class="panel-body"><a href="categoryproduct.php?category='Automotive'" onclick="post"><img src="https://thumb1.shutterstock.com/display_pic_with_logo/1152974/212882707/stock-vector-collection-of-icons-arranged-in-the-shape-of-the-car-the-concept-of-automotive-subjects-vector-212882707.jpg" class="img-responsive" style="width:350px;height:250px;" alt="Image"></a></div>
				<div class="panel-footer">Click here to view all automotive products!</div>
			</div>
		</div>
		<div class="col-sm-4"> 
			<div class="panel panel-danger">
				<div class="panel-heading">Outdoor</div>
				<div class="panel-body"><a href="categoryproduct.php?category='Outdoor'" onclick="post"><img src="http://awswallpapershd.com/wp-content/uploads/2016/10/Outdoor-wallpaper-Wallpaper-For-Iphone.jpg" class="img-responsive" style="width:350px;height:250px;" alt="Image"></a></div>
				<div class="panel-footer">Click here to view all outdoor products!</div>
			</div>
		</div>
		<div class="col-sm-4"> 
			<div class="panel panel-success">
				<div class="panel-heading">Clothing</div>
				<div class="panel-body"><a href="categoryproduct.php?category='Clothing'" onclick="post"><img src="http://ensia.com/wp-content/uploads/2015/06/features_chemicals_clothes_inline.jpg" class="img-responsive" style="width:350px;height:250px;" alt="Image"></a></div>
				<div class="panel-footer">Click here to view all clothing products!</div>
			</div>
		</div>
	</div>
</div><br>

<div class="container">    
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading">Electronics</div>
				<div class="panel-body"><a href="categoryproduct.php?category='Electronics'" onclick="post"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Arduino_ftdi_chip-1.jpg/1200px-Arduino_ftdi_chip-1.jpg" class="img-responsive" style="width:350px;height:250px;" alt="Image"></a></div>
				<div class="panel-footer">Click here to view all electronics products!</div>
			</div>
		</div>
		<div class="col-sm-4"> 
			<div class="panel panel-danger">
				<div class="panel-heading">Pets</div>
				<div class="panel-body"><a href="categoryproduct.php?category='Pets'" onclick="post"><img src="http://10topmovers.com/wp-content/uploads/2017/06/pets.jpg" class="img-responsive" style="width:350px;height:250px;" alt="Image"></a></div>
				<div class="panel-footer">Click here to view all pet products!</div>
			</div>
		</div>
	</div>
</div><br><br>

<?php	           
	require_once('templates/footer.php');
?>


