 <?php
if(isset($_SESSION['id'])){
    header('location:login.php');
}
require"header.php";

require"nav.php";

?>

<div class="auth bg0">
		<div class="modal-dialog modal-login ">
			<div class="modal-content">
				<div class="modal-header">
					<div class="avatar">
						<img src="images/avatar.png" alt="Avatar">
					</div>				
					<h4 class="modal-title">Member Login</h4>	
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<form action="addA.php" method="post" >
				<div class="modal-body">
						<div class="form-group" id='emaildiv'>
							<input type="email" class="form-control" name="email" placeholder="email" required="required">		
						   
								
							
						</div>
						<div class="form-group" id="passdiv">
							<input type="password" class="form-control" name="pass" placeholder="password" required="required">	
						   
							   
						   
						</div>        
						<div class="form-group" id='other'>
							<button type="submit" class="btn btn-primary btn-lg btn-block login-btn" name='btn_login'>Login</button>
						   
							   
						</div>

				</div>
				
					
				</form>
				<div class="modal-footer">
					<a href="#">Forgot Password?</a>
				</div>
			</div>
		</div>
	</div>

<?php require"footer.php"?>
