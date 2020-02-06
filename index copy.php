
<?php require"header.php";
if(!isset($_SESSION['id'])){
    header('location:login.php');
}
?>
<?php require"nav.php"?>

	
	
<?php
       					 include "connection.php";
							$categories=array();
							$data=mysqli_query($con,"select name FROM categories where state=1");
							while($row=mysqli_fetch_array($data)){
								$categories[]=$row['name'];
							}

							
							foreach($categories as $cat){
					?>						
						
						<!-- Life Style  -->
						<div class="p-b-25 m-r--10 m-r-0-sr991">
							<div class="how2 how2-cl5 flex-s-c m-r-10 m-r-0-sr991">
								<h3 class="f1-m-2 cl17 tab01-title">
								<?php echo $cat;?>
								</h3>
							</div>

							<div class="row p-t-35">
								<?php
									$row=true;
									$cat_posts=mysqli_query($con,"select * FROM posts where p_state='1' and cat_name='$cat' limit 4");
									while($post=mysqli_fetch_array($cat_posts)){
										if($row)
											echo'<div class="col-sm-6 p-r-25 p-r-15-sr991">';

								?>
									<!-- Item post -->	
									<div class="flex-wr-sb-s m-b-30">
										<a href="blog-detail-02.html" class="size-w-1 wrap-pic-w hov1 trans-03">
								<img src="images/post-25.jpg" alt="IMG">
										</a>

										<div class="size-w-2">
											<h5 class="p-b-5">
												<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
												<?php  echo $post['title'];?>
												</a>
											</h5>

											<span class="cl8">
												<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
													<?php echo $post['cat_name'];?>
												</a>

												<span class="f1-s-3 m-rl-3">
													-
												</span>

												<span class="f1-s-3">
								<?php  echo $post['date'];?>
											</span>
											</span>
										</div>
							</div>
								<?php
								if(!$row)
									echo"</div>";
									$row=!$row;
								}?>
									
									
								
						</div>
						<?php 
							}
							?>
				





<?php require"footer.php"?>

