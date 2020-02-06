
<?php require"header.php";
if(!isset($_SESSION['id']) ){
  header('location:login.php');
}
?>
<?php require"nav.php"?>


<section class="bg0 p-b-140 p-t-10">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-30">
					<div class="p-r-10 p-r-0-sr991">
            <!-- Blog Detail -->
            <?php
        include "connection.php";
       
        $data=mysqli_query($con,"select * FROM posts where post_id='$_GET[pid]'");
        while($row=mysqli_fetch_array($data)){

          ?>
						<div class="p-b-70">
							<a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
							<?php echo"$row[cat_name] "?>
							</a>

							<h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
							<?php echo"$row[title] "?>
							</h3>
							
							<div class="flex-wr-s-s p-b-40">
								<span class="f1-s-3 cl8 m-r-15">
									<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
										by Hopes news
									</a>

									<span class="m-rl-3">-</span>

									<span>
									<?php echo"$row[date] "?>
									</span>
								</span>

								<span class="f1-s-3 cl8 m-r-15">
									5239 Views
								</span>

								<a href="#" class="f1-s-3 cl8 hov-cl10 trans-03 m-r-15">
									0 Comment
								</a>
							</div>

							<div class="wrap-pic-max-w p-b-30">
              <img src='images/post-30.jpg' alt="IMG">
							</div>

							<p class="f1-s-11 cl6 p-b-25">
              <?php echo"$row[content] "?>
            							</p>

						
							<!-- Tag -->
							<div class="flex-s-s p-t-12 p-b-15">
								<span class="f1-s-12 cl5 m-r-8">
									Tags:
								</span>
								
								<div class="flex-wr-s-s size-w-0">
									<a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
										Streetstyle
									</a>

									<a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
										Crafts
									</a>
								</div>
							</div>

							<!-- Share -->
							<div class="flex-s-s">
								<span class="f1-s-12 cl5 p-t-1 m-r-15">
									Share:
								</span>
								
								<div class="flex-wr-s-s size-w-0">
									<a href="#" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-facebook-f m-r-7"></i>
										Facebook
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-twitter m-r-7"></i>
										Twitter
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-google borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-google-plus-g m-r-7"></i>
										Google+
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-pinterest borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-pinterest-p m-r-7"></i>
										Pinterest
									</a>
								</div>
              </div>
              
              
						</div>
<?php}?>
						<!-- Leave a comment -->
						
   <div class="container "style="margin-left:-100px;">           
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="page-header">
            <h3 class="reviews">Leave your comment</h3>
            
        </div>
        <div class="comment-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#comments-logout" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Comments</h4></a></li>
                <li><a href="#add-comment" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Add comment</h4></a></li>
            </ul>            
            <div class="tab-content">
                <div class="tab-pane active" id="comments-logout">                
                    <ul class="media-list">
					<?php include "connection.php";
					$comments=mysqli_query($con,"select comment_id, user_id, date,post_id,  comment FROM comments WHERE c_state=1 and  post_id='$_GET[pid]'");
					 while($comment=mysqli_fetch_array($comments)){ 
					  ?>
					  <li class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews">Marco </h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="aaaa"><?php echo"$comment[date]"?></li>
                              </ul>
                              <p class="media-comment">
							  <?php echo"$comment[comment]"?>
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                              <a class="btn btn-warning btn-circle text-uppercase" data-toggle="collapse" href="#replyOne"><span class="glyphicon glyphicon-comment"></span> <?php echo mysqli_affected_rows($con)?> comments</a>
                          </div>              
                        </div>
                        <div class="collapse" id="replyOne">
                            <ul class="media-list">
							
                            <?php
					$replaies=mysqli_query($con,"select c_comm_id, comment_id, user_id, content, date FROM commect_comments WHERE comment_id='$comment[comment_id]'");
					 while($replay=mysqli_fetch_array($replaies)){ 
					  ?>
								<li class="media media-replied">
                                    <a class="pull-left" href="#">
                                      <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/ManikRathee/128.jpg" alt="profile">
                                    </a>
                                    <div class="media-body">
                                      <div class="well well-lg">
                                          <h4 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> The Hipster</h4>
                                          <ul class="media-date text-uppercase reviews list-inline">
                                            <li class="aaaa"> <?php echo"$replay[date]"?></li>
                                          </ul>
                                          <p class="media-comment">
										  <?php echo"$replay[content]"?>
                                          </p>
                                          <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                      </div>              
                                    </div>
                                </li>
					 <?php } ?>
                            </ul>  
                        </div>
                      </li>          
					 <?php
					 }?>
                    </ul> 
                </div>
                <div class="tab-pane" id="add-comment">
                    <form action="#" method="post" class="form-horizontal" id="commentForm" role="form"> 
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Comment</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" name="addComment" id="addComment" rows="5"></textarea>
                            </div>
                        </div>
                     
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">                    
                                <button class="btn btn-success btn-circle text-uppercase" type="submit" id="submitComment"><span class="glyphicon glyphicon-send"></span> Summit comment</button>
                            </div>
                        </div>            
                    </form>
                </div>
                
            </div>
        </div>
	</div>
  </div>
  
  
						
						</div>
					</div>
				</div>
				
				<!-- Sidebar -->
				<div class="col-md-10 col-lg-4 p-b-30">
					<div class="p-l-10 p-rl-0-sr991 p-t-70">						
						<!-- Category -->
						<div class="p-b-60">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Category
								</h3>
							</div>

							<ul class="p-t-35">
								<li class="how-bor3 p-rl-4">
									<a href="#" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
										Fashion
									</a>
								</li>

								<li class="how-bor3 p-rl-4">
									<a href="#" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
										Beauty
									</a>
								</li>

								<li class="how-bor3 p-rl-4">
									<a href="#" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
										Street Style
									</a>
								</li>

								<li class="how-bor3 p-rl-4">
									<a href="#" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
										Life Style
									</a>
								</li>

								<li class="how-bor3 p-rl-4">
									<a href="#" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
										DIY & Crafts
									</a>
								</li>
							</ul>
						</div>

						<!-- Archive -->
						<div class="p-b-37">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Archive
								</h3>
							</div>

							<ul class="p-t-32">
								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											July 2018
										</span>

										<span>
											(9)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											June 2018
										</span>

										<span>
											(39)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											May 2018
										</span>

										<span>
											(29)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											April  2018
										</span>

										<span>
											(35)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											March 2018
										</span>

										<span>
											(22)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											February 2018
										</span>

										<span>
											(32)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											January 2018
										</span>

										<span>
											(21)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											December 2017
										</span>

										<span>
											(26)
										</span>
									</a>
								</li>
							</ul>
						</div>

						<!-- Popular Posts -->
						<div class="p-b-30">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Popular Post
								</h3>
							</div>

							<ul class="p-t-35">
								<li class="flex-wr-sb-s p-b-30">
									<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="images/popular-post-04.jpg" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
												Donec metus orci, malesuada et lectus vitae
											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
												Music
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												Feb 18
											</span>
										</span>
									</div>
								</li>

								
							</ul>
						</div>

					
					</div>
				</div>
			</div>
		</div>
	</section>




        <?php }require"footer.php"?>
