
<?php require"header.php";
if(!isset($_SESSION['id'])){
    header('location:login.php');
}
?>
<?php require"nav.php"?>

<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    	 <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                <?php
        include "connection.php";
       
        $data=mysqli_query($con,"  select * from users where user_id='$_SESSION[id]' ");

        while($row=mysqli_fetch_array($data)){

          ?>
                    <h2><?php echo $row['user_name']; ?></h2>
                    <p><strong>About: </strong> <?php echo $row['bio']; ?> </p>
                    <p><strong>full name: </strong> <?php echo $row['full_name']; ?> </p>
                    <p><strong>Birth date: </strong> <?php echo $row['birth_date']; ?> </p>
                    <p><strong>gender: </strong> <?php echo $row['gender']; ?> </p>
                    <p><strong>email name: </strong> <?php echo $row['email']; ?> </p>
                   
                </div>             
                <div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                        <img src="<?php echo $row['profile']; ?>" alt="" class="img-circle img-responsive">
                       
                    </figure>
                </div>
            </div>            
            <div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong> 20,7K </strong></h2>                    
                    <p><small>Followers</small></p>
                    <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong>245</strong></h2>                    
                    <p><small>Following</small></p>
                    <button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Profile </button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong>43</strong></h2>                    
                    <p><small>Snippets</small></p>
                    <div class="btn-group dropup btn-block">
                      <button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Options </button>
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu text-left" role="menu">
                        <li><a href="#"><span class="fa fa-envelope pull-right"></span> Send an email </a></li>
                        <li><a href="#"><span class="fa fa-list pull-right"></span> Add or remove from a list  </a></li>
                        <li class="divider"></li>
                        <li><a href="#"><span class="fa fa-warning pull-right"></span>Report this user for spam</a></li>
                        <li class="divider"></li>
                        <li><a href="#" class="btn disabled" role="button"> Unfollow </a></li>
                      </ul>
                    </div>
                </div>
            </div>
            <?php }?>

    	 </div>                 
		</div>
	</div>
</div>
<?php require"footer.php"?>
