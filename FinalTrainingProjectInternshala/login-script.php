<?php 
	include './includes/common.php';

 	if(isset($_POST['button'])){
		$email=mysqli_real_escape_string($con, $_POST['email']);
		$password=mysqli_real_escape_string($con, $_POST['password']);
		$pass=md5($password);
		$query="select id, name, email, password from users where email = '$email' and password = '$pass' ";
		$result=mysqli_query($con, $query);
		$row=mysqli_fetch_array($result);



		if(mysqli_num_rows($result)==1)
		{
				session_start();
			$_SESSION['id']=$row['id'];
			$_SESSION['name']=$row['name'];
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $pass;


			header("location:home.php");
		}
		else
		{
?>

	<div style="font-size: 18px;">
	<?php
	echo "<br><br><center>Wrong Username or Password</center><br><br>";  ?>
	</div>

<!DOCTYPE html>
<html>
<head>
       
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery -->
        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
	<div align="center" style="font-size: 18px;">
    <p>
        <a href="index.php"><button class="btn btn-primary">Try Again</button> <br><br></a> or <br><br> <a href="signup.php"><button class="btn btn-primary">Sign Up</button></a>
    </p>
        </div>
</body>
</html>


	<?php 
}
}

?>