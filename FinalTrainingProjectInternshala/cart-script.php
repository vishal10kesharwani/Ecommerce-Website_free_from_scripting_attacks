<?php
include './includes/common.php';


	if(isset($_SESSION['id']))
	{ 
	require './includes/header.php';
	$temp= $_SESSION['id']; 
	$select= "select * from users_products where user_id='$temp' order by product_id asc ";
	$select_qrray=mysqli_query($con, $select) or die(mysqli_error($con));
	//echo $_SESSION['id'];
	//echo mysqli_num_rows($select_qrray);
	
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
         <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet"></head>
<body>

	<div class="container" style="margin-top: 80px; ">
		<div class="row">
			<div class="col-xs-offset-2">
				<h2>Cart</h2>
			</div>
		</div>

		<div class="row">
			<div class=" col-xs-offset-4 col-xs-2 " style="border-bottom: 1px solid #ddd;">
				<h3>Item Number</h3>
			</div>

			<div class=" col-xs-2" style="border-bottom: 1px solid #ddd;">
				<h3>Price</h3>
			</div>
		</div>
		<div style=""></div>
			
<?php
$total=0;
 while ($row=mysqli_fetch_array($select_qrray)) { ?>
		<div class="row" style="padding-top:20px;  ">
			<div class="col-xs-offset-4 col-xs-2" style="border-bottom: 1px solid #ddd;">
				<?php echo $row['product_id'] ; $t= $row['product_id'];  
 ?>
			</div>

<?php  
	$sele="select * from products where id = '$t'";
	$sele_qrr=mysqli_query($con, $sele) or die(mysqli_error($con));
	$ress=mysqli_fetch_array($sele_qrr);
	$total = $total + $ress['price'];
?>


			<div class=" col-xs-2" style="border-bottom: 1px solid #ddd;">
				<?php echo $ress['price']."/-" ; ?>			
			</div>
		</div>

<?php } ?>
<div class="row" >
			<div class=" col-xs-offset-4 col-xs-2 " style="border-bottom: 1px solid #ddd; padding-top:20px; ">
				<b>Total Amount:</b>
			</div>

			<div class=" col-xs-2" style="border-bottom: 1px solid #ddd; padding-top:20px;">
				<b>
				<?php echo $total."/-"; ?>
				</b>
			</div>
		</div><br><br>
<center>
<a href="success.php" type="button" class="btn btn-primary btn-lg"> Place Order </a>
</a>
</center>
<!-- cart after this step should again become empty.-->



<?php } ?>
</div>