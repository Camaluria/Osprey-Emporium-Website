<?php
	//Shopping cart object to create shopping cart. Deprecated in place of using $_SESSION variables
	require_once('Database.php');
	require_once('Order.php');
	Class ShoppingCart  {
		
		
		
		public function __construct(){                    		  
			
			parent::__construct();
			if (session_status() !== PHP_SESSION_ACTIVE) {
				@session_start();
			}	
			$this->create_shopping_cart();
			$ord = New Order();
		}   
		
		private function create_shopping_cart(){
			if(!isset($_SESSION['cart']){ 
				$_SESSION['cart']=NULL;
			}
		}
		
		public function add_qty($item_name, $qty_to_add){
			$qty = $_SESSION['cart'][$item_name]['qty'];  
			$qty += $qty_to_add;
			$_SESSION['cart'][$item_name]['qty']=$qty;              
		} 
		
		public function decrease_qty($item_name, $qty_to_subtract){
			$qty = $_SESSION['cart'][$item_name]['qty'];  
			$qty -= $qty_to_subtract;
			$_SESSION['cart'][$item_name]['qty']=$qty;              
		} 
		
		public function add_to_cart($post_array){
			if(!isset($_SESSION['cart'][$post_array['item_name']])){
			$_SESSION['cart'][$post_array['item_name']]=$post_array; 
			$_SESSION['cart'][$post_array['item_name']]['qty']=1;  
			}else{
			$this->add_qty($post_array['item_name'],1);
			}       
            }
			
			public function remove_from_cart($item_name){
			unset($_SESSION['cart']['item_name']);     
            }
            
            public function view_cart(){
			return $_SESSION['cart'];
            }
            
            public function checkout(){
			return;
            }
			}
			
			?>
						