
<?php require"header.php";
?>
<?php require"nav.php"?>

	
	
		<!-- Post -->
        <section class="post bg0 p-t-85">
		<div class="container">
			<div class="row justify-content-center">
			<div class="col-md-10 col-lg-4">
					<div class="p-l-10 p-rl-0-sr991 p-b-20">
						
						<div class="p-b-60">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Category
								</h3>
							</div>

							<ul class="p-t-35">
							<?php
        include "connection.php";

        $data=mysqli_query($con,"select * FROM categories where state=1") ;
                      ?>
              <?php
              while($row=mysqli_fetch_array($data)){?>
                     
								<li class="how-bor3 p-rl-4">
									<a href="category.php?id=<?php echo $row['name']?>" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
										<?php echo $row['name'];?>
									</a>
								</li>
			  <?php }?>

								
							</ul>
						</div>
						
						
						
					</div>
				</div>
				<div class="col-md-10 col-lg-8">
					<div class="p-r-10 p-rl-0-sr991 p-b-20">
		
						<?php
       					 include "connection.php";
							$categories=array();
							$data=mysqli_query($con,"select name FROM categories where state=1");
							while($row=mysqli_fetch_array($data)){
								$categories[]=$row['name'];
							}
							// $categories=['technology'];

							
							foreach($categories as $cat){
					?>						
						
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
										<a href='artical.php?pid=<?php echo"$post[post_id]" ?>' class="size-w-1 wrap-pic-w hov1 trans-03">
								<img  src="<?php echo $post['img']; ?>"  alt="IMG">
										</a>

										<div class="size-w-2">
											<h5 class="p-b-5">
												<a href='artical.php?pid=<?php echo"$post[post_id]" ?>' class="f1-s-5 cl3 hov-cl10 trans-03">
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

					</div>
				</div>
				
				
			</div>
		</div>
	</section>

	<!-- Latest -->
	<section class="bg0 p-t-0 p-b-40">
		<div class="container">
			<div class="how2 how2-cl4 flex-s-c">
				<h3 class="f1-m-2 cl3 tab01-title">
					Latest Articles
				</h3>
			</div>

			<div class="row p-t-35">
			<?php
				$latest_posts=mysqli_query($con,"select max(post_id) as post_id,title,img,cat_name,date FROM posts group by(cat_name)   limit 9");
									while($post=mysqli_fetch_array($latest_posts)){
								?>
				

				<div class="col-sm-6 col-md-4">
					<!-- Item latest -->	
					<div class="m-b-45">
						<a href='artical.php?pid=<?php echo"$post[post_id]" ?>' class="wrap-pic-w hov1 trans-03">
							<img src=<?php  echo $post['img'];?> alt="IMG">
						</a>

						<div class="p-t-16">
							<h5 class="p-b-5">
								<a href='artical.php?pid=<?php echo"$post[post_id]" ?>' class="f1-m-3 cl2 hov-cl10 trans-03">
								<?php  echo $post['title'];?>
								</a>
							</h5>

							<span class="cl8">
								<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
								<?php  echo $post['cat_name'];?>
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
				</div>

				<?php 
									}
									?>
			</div>
		</div>
	</section>

	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
	</div>


<?php require"footer.php"?>

