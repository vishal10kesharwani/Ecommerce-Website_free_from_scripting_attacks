<?php
         include 'includes/common.php';
       
               ?>
       
            
<!DOCTYPE html>
<html>
<head><title>E-Store |s Electronic Goods Sellers</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>    
    body{
      background-image: url("./img/bg2.png");
       background-position: center center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      background-color: cyan;

    }
    .bg{
        height:100%;
    }
    .checked {
  color: orange;}
</style>
</head>


<body >
     
<div class="navbar navbar-default navbar-fixed-top" style="background-image: url(./img/nav1.gif); background-position: center center ; background-size: cover" role="navigation">   
                <div class="container"> 
                    <div class="navbar-header">  
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">                
                            <span class="icon-bar"></span>    
                            <span class="icon-bar"></span>    
                            <span class="icon-bar"></span>   
                            <a href="includes/header.php"></a>
                        </button>       
                        <a class="navbar-brand" href="home.php">E- Store</a>   
                    </div>   
                    <div class="collapse navbar-collapse" id="myNavbar"> 
                            <ul class="nav navbar-nav navbar-right">   
                            <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>    
                            <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>     
                            <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li> 
                         </ul>
                    </div>
                </div>
            </div>
    <?php 
               include 'check-if-added.php';
               ?>


<div class="container container-fluid" style="padding-top:80px; margin-bottom: 100px ;width:100%; " >
	<div class="row row-style-login-page-pannel">
		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 1</div>
				<div class="panel-body">
                                    <center><img  class="img-responsive"  src="img\m31.jpg">
					<b> Samsung Galaxy M31 <br></b>(Ocean Blue, 6GB RAM, 128GB Storage)<br>Price:16,499/-</center>
                                     <?php  
                                                            if (check_if_added_to_cart(1)) { 
                                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                                                } else {                    
                                                                    ?>                     
                                   <button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>
                                                         <?php   }   
                                                            ?> 
					
                                        <center> <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>(10,56,000 Customer Reviews)</center>

				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 2</div>
				<div class="panel-body">
				
					<center><img  class="img-responsive" src="img\m21.jpg">
					<b> Samsung Galaxy M21  <br></b>(Raven Black, 4GB RAM, 64GB Storage)<br>Price:15,999/-</center>
                                          <?php  
                                                            if (check_if_added_to_cart(2)) { 
                                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                                                } else {                    
                                                                    ?>                     
                                   <button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>
                                                         <?php   }   
                                                            ?>                    
                                   <center> <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star "></span>
                                        <span class="fa fa-star "></span> (56,000 Customer Reviews)</center>

				</div>
			</div>
		</div>

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 3</div>
				<div class="panel-body" >
					
					<center><img  class="img-responsive" src="img\s20.jpg">
					<b> Samsung Galaxy S20  <br></b>(Cosmic Gray, 8GB RAM, 128GB Storage) <br>Price:70,499/-</center>
					  <?php  
                                                            if (check_if_added_to_cart(3)) { 
                                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                                                } else {                    
                                                                    ?>                     
                                   <button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>
                                                         <?php   }   
                                                            ?>    
                                        <center>  <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star "></span> (4,43,000 Customer Reviews)</center>

				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 4</div>
				<div class="panel-body" >
				
					<center><img  class="img-responsive" src="img\ir11.jpg">
					<b> Apple iPhone 11   <br></b>(64GB) - (Product) RED<br>Price:68,300/-</center>
					  <?php  
                                                            if (check_if_added_to_cart(4)) { 
                                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                                                } else {                    
                                                                    ?>                     
                                   <button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>
                                                         <?php   }   
                                                            ?>    
                                        <center><span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span> (6,53,000 Customer Reviews)</center>

				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 5</div>
				<div class="panel-body" >
					
					<center><img  class="img-responsive" src="img\i11.jpg">
					<b> Apple iPhone 11  <br></b>(128GB) - Black<br>Price:68,400/-</center>
					  <?php  
                                                            if (check_if_added_to_cart(5)) { 
                                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                                                } else {                    
                                                                    ?>                     
                                   <button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>
                                                         <?php   }   
                                                            ?>    
                                        <center><span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star "></span> (8,000 Customer Reviews)</center>

				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 6</div>
				<div class="panel-body">
				
					<center><img  class="img-responsive" src="img\xs.jpg">
					<b> Apple iPhone Xs Max  <br></b>(64GB) - Space Grey<br>Price:79,999/-</center>
					  <?php  
                                                            if (check_if_added_to_cart(6)) { 
                                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                                                } else {                    
                                                                    ?>                     
                                   <button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>
                                                         <?php   }   
                                                            ?>    
                                        <center>  <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star "></span>
                                        <span class="fa fa-star "></span> (3,000 Customer Reviews)</center>

				</div>
			</div>
		</div>	
	</div>
</div>
    
    <?php require 'confirm.php'; ?>
</body>
</html>



