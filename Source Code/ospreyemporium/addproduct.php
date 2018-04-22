
<?php	 
	//Page to add products from the website. Deprecated due to upload capabilities not being installed on server. Keeping for historical accurary.
	require_once('classes/debug.php');  
	require_once('classes/Request.php');
	require_once('templates/header.php');         
	$req = New Request();
	$req->admin_action();
?>


<div class="container" >        
	<form method="post">
		<table> 
			<tr><td>Item:</td><td> <input type="text" name="item" id="txtItem"></td></tr>
			<tr><td>Description:</td><td> <textarea rows="4" cols = "35" name="description" id="txtDesc"></textarea></td></tr>
			<tr><td>Price:</td><td> <input type="text" name="price" id="txtPrice"></td></tr>
			<tr><td>Category:</td><td> 
				<select name="category" id="txtCategory">
					<option value="Computers">Computers</option>
					<option value="Cellphones">Software</option>
					<option value="Software">Software</option>
					<option value="Clothing">Clothing</option>
					<option value="Food">Food</option>
					<option value="Misc">Misc</option>
				</select> 
				<td></tr>
				<tr><td>Quantity:</td>
				<td><input type="text" name="quantity" id="txtQuantity" style="width:60px;"></td></tr>
				<tr><td>Image Link:</td><td><input type="text" name="image_link" id="txtImgLink"></td></tr>	         
				<tr><td style="background-color:transparent;"><input type="submit" name = "submit" value="Save" ></td>
					<td style="background-color:transparent;"><input type="submit" name = "cancel" value="Cancel" ></tr>	          
				</table>	
			</form>
			</div>
		
		<?php
		if ( isset( $_POST['submit']) ) {            
		require_once('Request.php');
		$req = New Request();
		$req->add_product($_POST);    
		}
		if(isset( $_POST['cancel']))  { 
		require_once('Request.php');
		$req = New Request();
		$req->cancel_request();
		}
		?> 
		
		<?php	           
		require_once('templates/footer.php');
		?>
				