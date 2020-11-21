<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery -->
        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
         <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

</head>
<body>

<?php 
include './includes/common.php';

 if(isset($_SESSION['id']))
 {
    $user_id= $_SESSION['id'];
    $prod_id= $_POST['prodno'];

    if($prod_id <= 6)
    {
    	$user_reg="insert into users_products(user_id, product_id) values('$user_id','$prod_id')";
    	$result=mysqli_query($con, $user_reg) or die(mysqli_error($con));
    	echo "<center>Product Successfully Added to Cart</center>";
?>
	<div align="center" style="font-size: 18px;">
		<br><br>
	<p>
	<a href="home.php"><button class="btn btn-primary">Continue Shopping</button> <br></a> or<br> <a href="cart.php" class="btn btn-primary">Move to Cart</a>
	</p>
	</div>
<?php } 
	   else
	{ 
		echo "<center>Wrong Product ID <br> Please check user ID before entering.</center>"; ?><br><br>
		<a href="home.php"><center><button class="btn btn-primary">Try again</button></center> <br></a>
<?php } } ?>

</body>
</html>