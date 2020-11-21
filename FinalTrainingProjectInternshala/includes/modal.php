<div class="modal fade" id="myModal">
			<div class="modal-dialog" style="left:0px;">
				<div class="modal-content"  >
					<div class="modal-header"  >
                                            <button type="button" class="close" data-dismiss="modal" style="padding-top: 5px;">&times;</button>
                                           <h4 class="modal-title " style=" padding-top:5px;"> LOGIN</h4>
                                                
					</div>
					<div class="modal-body" style="background:url(./img/galaxy.jpg);" >
						<p>Don't have an account? <a href="signup.php" >Register</a></p>
						<form method="post" action="login-script.php">
                                                        <div class="form-group">
                                                            <input type="email" name="email" class="form-control" placeholder="Email" required autofocus pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" oninvalid="this.setCustomValidity('Invalid Email Address, Email id Should contain @, gmail, .com. e.g vishal@gmail.com')"  oninput="this.setCustomValidity('')">
                                                        </div>

                                                        <div class="form-group">
                                                            
                                                            <input type="password" name="password" class="form-control"  required placeholder="Password" pattern='.{6,}'  oninvalid="this.setCustomValidity('!! Password Should Must Contain 0 - 6 Characters')"  oninput="this.setCustomValidity('')">
                                                           
                                                        </div>
                                                        <button class="btn btn-primary" type="submit" value="submit"  name="button">Login</button>

                                                </form><br>
						<a href="forgot.php">Forgot Password?</a>
					</div>
				</div>
			</div>
		</div>