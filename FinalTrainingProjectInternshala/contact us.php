<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Contact Us | E-Store.com</title>
        <link rel="shortcut icon" href="img\cont.png">
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery -->
        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
         <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        
    </head>

<body style="padding-top: 50px;" >
    
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <br>
    
<div class="container container-fluid">
    <div class="row">
        <div class="col-sm-10">
		  <h1 class="title">LIVE SUPPORT</h1>
		  <h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3><br>
          <div>
             <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variations of passages of Lorel Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
          </div>
      </div>
        <div class="col-sm-2" style="padding-top: 40px">
            <img  align="right" src="./img/livesupport.png" alt="contact us" class="img img-responsive">
        </div>
    </div>
    

<div class="row">
    <div class="container" style="margin-top: 20px; margin-bottom: 50px;">
	<div class="row-style-login-page-pannel " >
		<div class="col-sm-6 col-xs-12"  >
			<h3>CONTACT US</h3>
                        <form method="post"  action="contact-script.php" >
				<div class="form-group">
					Name:<input type="text" class="form-control" name="name" >
				</div>

				<div class="form-group">
					Email Id:<input type="email" class="form-control" name="email" >
				</div>

				<div class="form-group">
					Message:<textarea rows="4"  class="form-control" name="message"></textarea>
				</div>

					<button class="btn btn-primary" type="submit" value="Submit"  name="button">Submit</button>						
					

			</form>
					              
		</div><div class="col-sm-3 col-lg-4" >
	       <div class="contact-info">
	           <h2 class="title">Company Information</h2>
	               <address>
				    <p>500 Lorem Ipsum Dolar Sit,</p>
				    <p>22-56-3-5 Sit Amet, Lorem,</p>
				    <p>USA</p>
				    <p>Phone:(00) 222 555 3333</p>
				    <p>Fax:(000) 222 55 33 6</p>
				    <p>Email: info@estore.com</p>
	               </address>
	               
	            <div><h4 class="title">Follow Us On&#58;</h4>
                   <a href="http://www.facebook.com/estore" target="_blank"><img src="./img/logofb.png" alt="fb logo" style="width:30px; height:30px; border:0"></a>
                   <a href="http://www.twitter.com/estore" target="_blank"><img src="./img/logotwitter.png" alt="twitter logo" style="width:30px; height:30px; border:0; padding-left:10px;"></a>
               </div>
            </div>
        </div>
	</div>
        
    </div>
	    		
        
    </div>
</div>



      <?php include 'includes/footer.php'; ?>
    </body>
</html>
