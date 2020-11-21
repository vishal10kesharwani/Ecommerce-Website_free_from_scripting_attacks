<?php
include './includes/common.php';



	if(isset($_SESSION['id']))
	{ 
	
	$temp= $_SESSION['id']; 
	$select= "select * from users_products where user_id='$temp' order by product_id asc ";
	$select_qrray=mysqli_query($con, $select) or die(mysqli_error($con));

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery -->
        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
<style>
body{
  background-image: url("./img/cart-banner.jpg");
    background-position: center center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
  
}
 .bg{
        height:100%;
    }
</style>

</head>
<body>
         <div class="navbar navbar-default navbar-fixed-top " style="background-image: url(./img/cart.gif); background-position: center center ; background-size: cover" >   
                <div class="container"> 
                    <div class="navbar-header">  
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">                
                            <span class="icon-bar"></span>    
                            <span class="icon-bar"></span>    
                            <span class="icon-bar"></span>   
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
	<div class="jumbotron" style="margin-top: 80px;  ">
		<div class="row">
			<div class="col-xs-offset-2">
                            <h2><strong> My Cart</strong></h2>
			</div>
		</div>

		<div class="row">
			<div class=" col-xs-4 col-xs-offset-3  " style="border-bottom: 1px solid #ddd;">
				<h3>Item Number</h3>
			</div>

			<div class=" col-xs-4" style="border-bottom: 1px solid #ddd;">
				<h3>Price</h3>
			</div>
		</div>
		<div style=""></div>
			
<?php

$total=0;
 while ($row=mysqli_fetch_array($select_qrray)) { ?>
		<div class="row" style="padding-top:20px;  ">
			<div class="col-xs-offset-3 col-xs-4" style="border-bottom: 1px solid #ddd;">
				<?php echo $row['product_id'] ; $t= $row['product_id'];  
?>
			</div>

<?php  
	$sele="select * from products where id = '$t'";
	$sele_qrr=mysqli_query($con, $sele) or die(mysqli_error($con));
	$ress=mysqli_fetch_array($sele_qrr);
	$total = $total + $ress['price'];
?>


			<div class=" col-xs-4" style="border-bottom: 1px solid #ddd;">
				<?php echo $ress['price']."/-" ;?> 
                        </div>
                      <div class="row" >
			<div class=" col-xs-offset-3 col-xs-4 " style="border-bottom: 1px solid #ddd; padding-top:20px; ">
				<b>Total Amount:</b>
			</div>

			<div class=" col-xs-2" style="border-bottom: 1px solid #ddd; padding-top:20px;">
				<b>
<?php echo $total."/-"; ?>
				</b>
			</div>
   
</div><br><br>
                 <center>          
                             
                      <a href="success.php" role="button" class="btn btn-primary btn-lg btn-success">Place Order</a>
                     
</center>
		</div>

<?php } 

    
 ?> 
              





        <?php } ?>
</div><!-- container closed-->
