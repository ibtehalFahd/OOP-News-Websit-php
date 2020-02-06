<?php require"header.php"?>
<?php require"nav.php"?>
<div class="auth">
		<div class="modal-dialog modal-login ">
			<div class="modal-content">
			<div class="modal-header">
					
					<h4 class="modal-title">PHP UPLOAD PRACTICE</h4>	
				</div>
				<div class="modal-body">
                    <form action="result.php" method="post" enctype='multipart/form-data'>
						<div class="form-group" id='emaildiv'>
                            <label for="img">Image File</label>
							<input type="file" class="form-control" name="img" id="img"  >		
						   
								
							
                        </div>
                        <div class="form-group" id='emaildiv'>
                            <label for="img">Zip File</label>
							<input type="file" class="form-control" name="zip" id="zip" >		
						   
								
							
						</div>
						    
						<div class="form-group" id='other'>
							<button type="submit" class="btn btn-primary btn-lg btn-block login-btn" id='login'>Login</button>
						   
							   
                        </div>
                        </form>

				</div>
				
				
			</div>
		</div>
	</div>

    
<?php require"footer.php"?>
