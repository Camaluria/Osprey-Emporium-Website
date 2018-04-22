
<?php
	//requestor object used to interact with all the various classes. Makes accessing the other classes easier and simpler
	require_once('User.php');
	require_once('Product.php');
	Class Request {
		
		public function __construct() {		
			if (session_status() !== PHP_SESSION_ACTIVE) {
				@session_start();
			}
			$usr = New User();
			
		}
		
		public function admin_action() {
			$usr = New User();
			if(!$usr->is_admin()) {
				header("Location: ../ospreyemporium/admin_error.php");
			}
		}
		public function customer_action() {
			$usr = New User();
			if(!$usr->is_customer()) {
				header("Location: ../ospreyemporium/customer_error.php");
			}
		}
		
		public function request_home_page(){
            header("Location: ../ospreyemporium/index.php");
		}
		
		
		public function request_login_page(){
            header("Location: ../ospreyemporium/login.php");
		}
		
		
	
	
	public function request_register_page(){
	header("Location: ../ospreyemporium/register.php");
	}
	
	
	public function request_register_user($arr) {
	$usr = New User();
	$usr->log_out();
	if($usr->register_user($arr)){
	$this->request_login($arr);
	$this->request_home_page();	
	}	  
	}
	
	public function add_new_product($post_array){
	$prod = New Product();
	$prod->add_product($post_array); 
	}
	
	public function get_product($product_name)
	{
	$prod = New Product();
	$output_array = $prod->get_product($product_name);
	return $output_array;
	}
	
	public function get_all_products(){
	$prod = New Product();
	$output_array = $prod->get_all_products();
	return $output_array;
	
	}
	
	public function select_products($category){
	$prod = New Product();
	$output_array = $prod->select_products($category);
	return $output_array;
	}
	public function add_to_cart($post_array){
	$sc = New ShoppingCart();
	$sc->add_to_cart($post_array);
	}
	
	public function view_cart(){
	$sc = New ShoppingCart();
	$sc->view_cart();		
	
	}
	public function get_username(){
	$usr = New User();
	if($usr->get_username()){
	print '<div class ="welcome"> Welcome '. $usr->get_username().'</div>' ;   
	}
	}
	
	
	public function request_login($arr){     	   
	$usr = New User();	     
	$login_status = $usr->log_in($arr);  
	if (!$login_status){
	print '<div class = "error"> Your login credentials are invalid</div>';	     
	}
	else{
	header("Location: index.php");
	}
	}
	
	public function is_logged_in(){
	return(!empty($_SESSION['username']));
	}
	
	
    }
	
	?>
		