<?php
	// if already logged in, go to home page
         session_start();
	if(isset($_SESSION["id"])){
		header("location: home.php");
	}

	require "./includes/common.php";
?>
<?php
   
    if(!isset($_SESSION['id'])){ 
    require './includes/header.php';}
    
 ?>
<!DOCTYPE html>
<html>
<head><title>E-Store |s Electronic Goods Dealers</title>
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery -->
        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
      <style>    
body{
  background-image: url("./img/bg1.jpg");
   background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color: cyan;
  
}
.bg{
    height:100%;
}


</style>
</head>


<body >


    <div class="container container-fluid" style="margin-top:40px; margin-bottom:100px; width: 100%;">
	<div class="row row-style-login-page-pannel">
		

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Apple</div>
				<div class="panel-body">
					<!--put mobile phone pics and its specifications in this box in all pannels. -->
					<center><img  class="img-responsive" src="img\phones\iphonex.jpg">
					<b> Apple Iphone X <br></b>Price:78,459/-</center>
					 <a href="./includes/modal.php/#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>


				</div>
			</div>
		</div>

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">SAMSUNG</div>
				<div class="panel-body" >
					<!--put mobile phone pics and its specifications in this box in all pannels. -->
					<center><img  class="img-responsive" src="img\phones\samsungs8.jpg">
					<b> Samsung S8 <br></b>Price:44,500/-</center>
					 <a href="./includes/modal.php/#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>


				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Apple</div>
				<div class="panel-body" >
					<!--put mobile phone pics and its specifications in this box in all pannels. -->
					<center><img  class="img-responsive" src="img\phones\iphone7s.jpg">
					<b> Apple Iphone 7S <br></b>Price:56,000/-</center>
					 <a href="./includes/modal.php/#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>


				</div>
			</div>
		</div>	

		
                <div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">One-Plus 1+</div>
				<div class="panel-body" >
					<!--put mobile phone pics and its specifications in this box in all pannels. -->
					<center><img  class="img-responsive" src="img\phones\oneplus3t.jpg">
					<b> One Plus 3T <br></b>Price:25,999/-</center>
					 <a href="./includes/modal.php/#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>


				</div>
			</div>
		</div>	
            <div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">One-Plus 1+ </div>
				<div class="panel-body">
					<center><img  class="img-responsive"  src="img\phones\oneplus5t.jpg">
					<b> One Plus 5T <br></b>Price:32,999/-</center>
					 <a href="./includes/modal.php/#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>


				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">OppO</div>
				<div class="panel-body">
					<!--put mobile phone pics and its specifications in this box in all pannels. -->
					<center><img  class="img-responsive" src="img\phones\oppoa57.jpg">
					<b> Oppo A57 <br></b>Price:22,500/-</center>
                                        <a href="./includes/modal.php/#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>


				</div>
			</div>
		</div>	
	</div>
    </div>

<div style="background-color: #333; color:white ;">
<?php require './includes/footer.php' ?>
    <?php require './includes/modal.php' ?>
</div>

</body>
</html>
