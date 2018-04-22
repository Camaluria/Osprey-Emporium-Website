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
	//page to load items based on categories. Pulls from the Category page to know how to load items. Also allows adding to cart
	require_once('classes/Database.php');
	require_once('classes/debug.php');  
	require_once('classes/Request.php');
	require_once('templates/header.php');
	error_reporting(0);
	if (session_status() !== PHP_SESSION_ACTIVE){session_start();}
	if ($_SESSION['message'] != "") {
		$message = $_SESSION['message'];
		echo "<h2 align=center>$message</h2>";
		echo "<br>";
		$_SESSION['message'] = "";
	}
?>

<?php
	$category = $_REQUEST['category'];
	$req = New Request();
	$items = $req->select_products($category);
	$category = str_replace("'", "", $category);
	echo "<h2 align=center>$category</h2>"; 
	
	$itemChunks = array_chunk($items,3);
	
	foreach($itemChunks as $chunk)
	{
		echo '<div class="row">';
		foreach($chunk as $product)
		{
			
			echo '<div class="col-sm-4"  align=center>';
			echo '<div class="panel panel-primary">';
			echo '<div class="panel-heading">' .$product['item_name']. '</div>';
			echo '<div class="panel-body"> <img src="' .$product['image_link']. '" class="img-responsive" style="width:350px;height:250px;" alt="Image"></div>';
			echo '<div class="panel-body">' .$product['item_description']. '</div>';
			echo '<div class="panel-footer">$' .$product['price'].'</div>';
			
			echo '<form method="post">';
			echo '<input type="hidden" name="test" value=" '.$product['item_name'].'"/>';
			echo '<div class ="panel-footer"> <input type="submit" name = "submit" value="Add to cart"></div>';
			echo '</form>';
			
			echo '</div></div>';
		}
		echo '</div></div></div></br>';
	}
?>



<?php
	
	if (isset($_POST['submit']))
	{ 
		
		if(!isset($_SESSION['username'])){
			echo "<script> window.location.replace('login.php') </script>";
			exit;
		}
		
		if(!isset($_SESSION['cart']))
		{
			$_SESSION['cart'] = array();
		} 
		$add = $_POST['test'];
		array_push($_SESSION['cart'],$add);  
		$_SESSION['message'] = $add . " has been added to cart!";
		echo "<script> window.location.replace(window.location.pathname + window.location.search); </script>";	  
	}
	
	require_once('templates/footer.php');
?>
