<?php
	require './includes/common.php';
	
	// destroy the session if present
	if(!isset($_SESSION["email"])){
		header("location: index.php");
	}else{
		session_unset();
		session_destroy();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>LifeStyle Stores</title>
		<!-- link to Bootstrap minified css-->
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery -->
        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
         <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <style>
           body {
  position: relative;
  min-height: 100%;
  min-height: 100vh;
}
        </style>
	</head>
	<body>
		<?php
			require './includes/header.php';
		?>
        <div class="container panel-margin" style="padding-top: 40px">
            <div class="alert alert-success"  >
                You have successfully logged out. Click <a href="index.php">here</a> to go back to index page.
            </div>
        </div>
		
	</body>
</html>
<?php
			require './includes/footer.php';
		?> 