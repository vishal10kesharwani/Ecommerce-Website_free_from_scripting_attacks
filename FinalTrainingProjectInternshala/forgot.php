
<?php
session_start();
include './includes/common.php';

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $result = mysqli_query($con,"SELECT * FROM users where email='" . $_POST['email'] . "'");
    $row = mysqli_fetch_assoc($result);
	$name =$row['name'];
	$email_id=$row['email'];
	$password=$row['password'];
        $pass= randomPassword();
        $hashpass=md5($pass);
	if($email==$email_id) {
				
                      echo "<h1><mark>$name your password is : $pass</mark></h1>";
                $update_query="update users set password = '$hashpass' where email = '$email'";
		$update_result=mysqli_query($con, $update_query) or die(mysqli_error($con));
		$_SESSION['password']= $pass;
                
		echo "<center><br><strong><h4> !!! Password Updated Successfully<br> Now you can use this password into Login Form but it is suggested to you that change password by going to settings page after logging in</h3></strong> ";
			}
				else{
					echo 'invalid Email Id or Email is not registered';
				}
}
?>
<!DOCTYPE HTML>
<html>
<head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery -->
        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
         <!-- Custom CSS -->
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 width: 500px;
 height: 20px
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
  padding-top: 80px;
 }
 h4{
     color:green;
 }

</style>
</head>
<body >
    <?php
    require './includes/header.php';
    ?>
<h1 style="padding-top: 80px">Forgot Password</h1>
<form action='' method='post' style=" border-color: red; ">
    <center>
    Email: <input type='text' name='email' required/><br><br>
    <button  class="btn-success " type='submit' name='submit' value='Submit' style="border-radius: 20px; width:70px">RESET</button>
  
    </center>
</form>
</body>
</html>