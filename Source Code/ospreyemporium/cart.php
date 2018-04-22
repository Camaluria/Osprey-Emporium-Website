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
	//Cart page to load the items the user has added to the cart. Uses the $_SESSION['cart'] value to know which items to load
	require_once('classes/Database.php');
	require_once('classes/debug.php');  
	require_once('classes/Request.php');
	require_once('templates/header.php');
	
	error_reporting(0);
	session_start();
	
	if(!isset($_SESSION['username']))
	{
		header('location:http://139.62.210.151/~group4/ospreyemporium/login.php');
	} 
	
	$items = array();
	$items = $_SESSION['cart'];
	$req = New Request();
	
	
	$itemChunks = array_chunk($items,3); //divide array into sections of 3 for better loading onto the page
	$totalCost = 0.00;
	
	foreach($itemChunks as $chunk)
	{
		echo '<div class="row">';
		foreach($chunk as $product_name) //loop through array items
		{
			$product = $req->get_product($product_name); //find the product based on cart array value
			echo '<div class="col-sm-4">';
			echo '<div class="panel panel-primary">';
			echo '<div class="panel-heading" align=center>' .$product[0]['item_name']. '</div>';
			echo '<div class="panel-body" align=center> <img src="' .$product[0]['image_link']. '" class="img-responsive" style="width:350px;height:250px;" alt="Image"></div>';
			echo '<div class="panel-body" align=center>' .$product[0]['item_description']. '</div>';
			echo '<div class="panel-footer" align=center>$' .$product[0]['price'].'</div>';
			$totalCost += ((float)$product[0]['price']);
			echo '<form method="post">';
			echo '<input type="hidden" name="test" value="'.$product[0]['item_name'].'"/>';
			echo '<div class ="panel-footer" align=center> <input type="submit" name = "remove" value="Remove from Cart"></div>';
			echo '</form>';
			
			echo '</form>';
			echo '</div></div>';
		}
		echo '</div></div></div></br>';
	}
	
	echo '<div class="panel-group">';
	echo '<div class="pannel panel-success">';
	echo '<div class= "panel-heading"><h3 align=center style="color:blue;font-family: Helvetica Neue Lt Std;font-size:200%;">Total Price</h3></div>';
	echo "<div><h3 align=center>$$totalCost</h3></div>";
	echo '</br>';
	echo '<form method="post" form action="checkout.php">';
	echo '<input type="hidden" name="cost" value="'.$totalCost.'"/>';
	echo '<input type="hidden" name="cart" value="'.$_SESSION['cart'].'"/>';
	echo '<div class ="panel-footer" align=center> <input type="submit" name = "submit" value="Place Order"></div>';
	echo '</form>';
	echo '</div></div>';
	
?>



<?php
	//if remove from cart button is pressed then remove from $_SESSION array
	if (isset($_POST['remove']))
	{ 
		$item_name = $_POST['test'];
		$item_removal = $_SESSION['cart'];
		foreach ($items as $itemKey => $item)
		{
			if(trim($item) === trim($item_name))
			{
				unset($item_removal[$itemKey]);
				break;
			}
		}
		$_SESSION['cart'] = $item_removal;
		echo "<script> window.location.replace('cart.php') </script>";
		exit;
		
	}
	
	require_once('templates/footer.php');
?>
