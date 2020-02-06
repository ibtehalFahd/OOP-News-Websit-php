<?php
 require"header.php" ;

require"nav.php";
?>
<section class="bg0 p-t-0 ">
    <div class="container">
                
        <div class='row'>
                    <!-- <h2 class="title2" style="margin-left: 30%;" >Admin Dash Board</h2> -->
        
        <!-- <h3 class="title2" style="margin: -50px 30px 0 30px" >Dash Board</h3> -->

            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap ">
                   <a href="users.php">
                        <img src='capture.png'  class="img-fluid img" alt="#">
                        <div class="adminTitle">
                        <h3  >Manage Users</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                <a href="addCategory.php">
                        <img src='capture2.png'  class="img-fluid img" alt="#">
                        <div class="adminTitle">
                        <h3  >ADD category</h3>
                        </div>
                </a>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                <a href="comments.php">
                        <img src='capture5.png'  class="img-fluid img" alt="#">
                        <div class="adminTitle">
                        <h3  >Manage comm</h3>
                        </div>
                </a>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="manage_cat.php">
                        <img src='capture6.png'  class="img-fluid img" alt="#">
                        <div class="adminTitle">
                        <h3  >Manage cate</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                <a href="addArtical.php">
                        <img src='capture4.png'  class="img-fluid img" alt="#">
                        <div class="adminTitle">
                        <h3  >ADD posts</h3>
                        </div>
                </a>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                <a href="articals.php">
                        <img src='capture1.png'  class="img-fluid img" alt="#">
                        <div class="adminTitle">
                        <h3  >Manage posts</h3>
                        </div>
                </a>
                </div>
            </div>
            
           
        </div>
        <!-- <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="featured-btn-wrap">
                    <a href="#" class="btn btn-danger">VIEW ALL</a>
                </div>
            </div>
        </div> -->
    </div>
</section>

<?php

require"footer.php";
?>