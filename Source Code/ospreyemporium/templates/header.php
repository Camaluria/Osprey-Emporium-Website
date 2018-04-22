<?php
	//default heard userd by all pages, checks to see a session is started to determine whether cart function is there
	require_once("classes/User.php");
	if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
	if(!isset($_SESSION['username'])){
		Print '
		<!DOCTYPE html>
		<html lang="en">
		<head>
		<title>Osprey Emporium</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
		<style> 
		/* Remove the navbar  default rounded borders and increase the bottom margin */ 
		.navbar {
		margin-bottom: 50px;
		border-radius: 0;
		}
		
		
		.confirm {
		background-color:#64FE2E;
		border: 1px solid black;
		width:50%;
		margin-left:auto;
		margin-right:auto;
		}    
		tr, td {
		padding:10px;
		}
		
		/* Remove the jumbotron default bottom margin */ 
		.jumbotron {
		margin-bottom: 0;
	}
	
    /* Add a gray background color and some padding to the footer */
    footer {
	background-color: #f2f2f2;
	padding: 25px;
    }
	</style>
	</head>
	<body>
	<div class="jumbotron">
	<div class="container text-center">
    <h1>Osprey Emporium</h1>      
    <p>Mission, Vision & Values</p>
	</div>
	</div>
	
	<nav class="navbar navbar-inverse">
	<div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>                        
	</button>
	<a class="navbar-brand" href="#">OE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	<ul class="nav navbar-nav">
	<li class="active"><a href="http://139.62.210.151/~group4/ospreyemporium/">Home</a></li>
	<li><a href="http://139.62.210.151/~group4/ospreyemporium/products.php">Products</a></li>
	<li><a href="http://139.62.210.151/~group4/ospreyemporium/stores.php">Stores</a></li>
	<li><a href="http://139.62.210.151/~group4/ospreyemporium/contact.php">Contact</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
	<li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
	</ul>
    </div>
	</div>
	</nav>
	';
	}
	else {
	Print '
	<!DOCTYPE html>
	<html lang="en">
	<head>
	<title>Osprey Emporium</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style> 
	/* Remove the navbar  default rounded borders and increase the bottom margin */ 
    .navbar {
	margin-bottom: 50px;
	border-radius: 0;
    }
    
    /* Remove the jumbotron default bottom margin */ 
	.jumbotron {
	margin-bottom: 0;
    }
	
    /* Add a gray background color and some padding to the footer */
    footer {
	background-color: #f2f2f2;
	padding: 25px;
    }
	</style>
	</head>
	<body>
	<div class="jumbotron">
	<div class="container text-center">
    <h1>Osprey Emporium</h1>      
    <p>Mission, Vision & Values</p>
	</div>
	</div>
	
	<nav class="navbar navbar-inverse">
	<div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>                        
	</button>
	<a class="navbar-brand" href="#">OE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	<ul class="nav navbar-nav">
	<li class="active"><a href="http://139.62.210.151/~group4/ospreyemporium/">Home</a></li>
	<li><a href="http://139.62.210.151/~group4/ospreyemporium/products.php">Products</a></li>
	<li><a href="http://139.62.210.151/~group4/ospreyemporium/stores.php">Stores</a></li>
	<li><a href="http://139.62.210.151/~group4/ospreyemporium/contact.php">Contact</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
	<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
	<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
	</ul>
    </div>
	</div>
	</nav>
	';
	}
	?>
		