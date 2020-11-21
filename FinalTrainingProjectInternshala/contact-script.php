<?php
include './includes/common.php';
 
	$name=mysqli_real_escape_string($con, $_POST['name']);
	$email=mysqli_real_escape_string($con, $_POST['email']);
	$message=mysqli_real_escape_string($con, $_POST['message']);

	$user_reg="insert into query(name,email,message) values('$name','$email','$message')";

	$result=mysqli_query($con, $user_reg) or die(mysqli_error($user_reg));

	
	echo "<center><h1>Thankyou for contacting us.<br>Our Representative will contact you soon. </h1><br>";
?>
<a href="index.php"> <?php echo "<br>Continue Shopping..!!</center>"; ?> </a>
