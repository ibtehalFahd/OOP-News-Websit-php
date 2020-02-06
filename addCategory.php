<?php require"header.php"?>
<?php require"nav.php"?>
<div class="auth">
		<div class="modal-dialog modal-login ">
			<div class="modal-content">
			<div class="modal-header">
					
					<h4 class="modal-title">Add a Category</h4>	
				</div>
				<div class="modal-body">
                    <form action="addA.php" method="post" enctype='multipart/form-data'>
						<div class="form-group" id='emaildiv'>
                            <label for="name">Category name</label>
							<input type="text" class="form-control" name="cat" id="img"  >		
						   
								
							
                        </div>
                       
						    
						<div class="form-group" id='other'>
							<button type="submit" class="btn btn-primary btn-lg btn-block login-btn" value='add' name='add_cat'>Add</button>
						   
							   
                        </div>
                        </form>

				</div>
				
				
			</div>
		</div>
	</div>

    
<?php require"footer.php"?>
