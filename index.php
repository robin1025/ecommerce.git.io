<!DOCTYPE html>
<?php
session_start();

	include("functions/functions.php");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Online Shop</title>

    <!-- Bootstrap -->
    <link href="styles/bootstrap.min.css" rel="stylesheet">
	<link href="styles/custom.css" rel="stylesheet">
	<link href="styles/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<!--Main Container starts here-->
    <div class="container">
		<!--Navigation starts here-->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">ROBIN Shop</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="all_products.php">All Product</a></li>
					<li><a href="customer/my_account.php">My Account</a></li>
					
					<li><a href="customer_register.php">Sign Up</a></li>
					<li><a href="cart.php">Shopping Cart</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
				<form class="navbar-form navbar-right" method="get" action="results.php" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" placeholder="Search Product Here" class="form-control" name="user_query">
					</div>
					<div class="form-group">
						<input type="submit" class= "btn btn-success" name="search" value="Search">
					</div>
				</form>
			</div>
		</nav>
		<!--Navigation ends here-->
		
		<div class="jumbotron">	
		
			<div class="container-fliud">
				<h3>ROBIN Online Store</h3>
				<p style="font-size: 20px">This is a template for a simple marketing or informational website. 
				It includes a large callout called a jumbotron and three supporting pieces of content. 
				Use it as a starting point to create something more unique.</p>
				
				<p><a href="#" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-shopping-cart"> </span> Get Shopping Now</a> </p>		
			</div>
					
			
		</div>
		
		<!--Content Area starts-->
		<section>
		<div class="row">
			
			<div class ="col-lg-3 sidebar">
				<div class = "panel panel-primary">
					<div class="panel-heading">Category</div>		
					<div class="panel-body">
						
							<!--<a href="#" class="list-group-item">Laptops</a>
							<a href="#" class="list-group-item">Computers</a>
							<a href="#" class="list-group-item">Mobiles</a>
							<a href="#" class="list-group-item">Cameras</a>
							<a href="#" class="list-group-item">iPads</a>
							<a href="#" class="list-group-item">Tablets</a> -->
							<?php
							getCats();
							?>
						
					</div>
				</div>
				
				<div class = "panel panel-primary">
					<div class="panel-heading">Brands</div>		
					<div class="panel-body">
						
							<!--<a href="#" class="list-group-item">HP</a>
							<a href="#" class="list-group-item">DELL</a>
							<a href="#" class="list-group-item">ASUS</a>
							<a href="#" class="list-group-item">ACER</a>
							<a href="#" class="list-group-item">APPLE</a>
							<a href="#" class="list-group-item">LENOVO</a> -->
							<?php
							getBrands();
							?>
						
					</div>
				</div>
			</div>
			
			<div class ="col-lg-9">
				<div class = "container-fluid" style="background: #eee">
					<div class="row">
						<div class="shopping_cart">
							<span style="float:right;padding:5px;font-size:13px;line-height:35px">
							
								<?php
									if(isset($_SESSION['customer_email']))
									{
										echo "<b>Welcome</b> "	. "<i>". $_SESSION['customer_email'] . "</i>";
											
										
										
									}
									else{
										
										echo "Welcome Guest!";
									}
								?>



								<label>Shopping Cart</label>
								Total Item : <?php total_items(); ?>
								| Total Price : $<?php total_price(); ?>
								<a href="cart.php" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span> Go to Cart</a>
								
								
								<?php
							
							if(!isset($_SESSION['customer_email']))
							{
								
								echo "<a href='checkout.php' class='btn btn-success btn-sm'>
								
								<span class='glyphicon glyphicon-log-in'></span> Log in </a>
								
								
								";
								
							}else
							{
								echo "<a href='logout.php' class='btn btn-warning btn-sm'>
								
								<span class='glyphicon glyphicon-log-out'></span> Log out </a>
								
								
								";
							}
							
							
							?>
								
							</span>

							
							
						</div>
					</div>
					
					<?php cart(); ?>
					<div class="row">
						
						<div class="col-lg-12">
							<h4>Please choose product...</h4>
						</div>
						
						<?php getProd() ?>
						<?php getCatProd() ?>
						<?php getBrandProd() ?>
						
					</div>
						
							
						
					
				</div>
			</div>
			
		</div>
		</section>
		<!--Content Area end-->
		
		<!--Footer Starts here-->
		
		<footer class="footer" style="background:#22A7F0;height:100px;color:white;padding:50px;margin-bottom:10px;">
			<div class="container">
					<p class="">&copy; Copyright <?php echo date("Y"); ?> ROBIN STORE ONLINE INC.</p>
			</div>
		</footer>
		
		<!--Footer ends here-->
		
	</div>
	<!--Main Container ends here-->
	
	
	
	
	
	
	
	
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>