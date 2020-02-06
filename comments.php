
<?php require"header.php";
if(!isset($_SESSION['id'])){
    header('location:login.php');
}
?>
<?php require"nav.php"?>


<div class="container">
    <div class="row">
        <div class="panel panel-default widget">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-comment"></span>
                <h3 class="panel-title">
                    posts Comments</h3>
                <!-- <span class="label label-info">
                   </span> -->
                 
            </div>
            <div class="panel-body">
                <ul class="list-group">
                <?php
        include "connection.php";
       
        $data=mysqli_query($con,"  select comment_id, post_id, user_id, date, c_state, comment FROM comments  ");

        while($row=mysqli_fetch_array($data)){

          ?>
                    <li class="list-group-item">
                        <div class="row">
                           
                            <div class="col-xs-10 col-md-12">
                                <div>
                                    <a href="artical.php?pid=<?php echo $row['post_id']?>">
                                        comment related with post number <?php echo"$row[post_id]"?></a>
                                    <div class="mic-info">
                                        By: <a href="#"><?php echo"$row[user_id]"?></a> on   <?php echo"$row[date]"?>
                                    </div>
                                </div>
                                <div class="comment-text">
                                <?php echo"$row[comment]"?>
                                </div>
                                <div class="action">
                                <form action='addA.php' method='post'  class='form-inline'>
                                  <input type='hidden' name='cid' value="<?php echo $row['comment_id']?>">
                                 
                                   <button type='submit' class="btn btn-success btn-xs  <?php if($row['c_state']==1) echo'disabled'?>  "  title='active' value='1' name='btn_c_activ'> <span class="glyphicon glyphicon-ok"></span></span></button>
                               
                                  <button type='submit'  class="btn btn-danger btn-xs  <?php if($row['c_state']==2) echo'disabled'?>" title='delete' value='2' name='btn_c_activ'>  <span class="glyphicon glyphicon-trash"></span></span></button>
                                  
                                 </form>
                                   
                                </div>
                            </div>
                        </div>
                    </li>
        <?php }?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php require"footer.php"?>
