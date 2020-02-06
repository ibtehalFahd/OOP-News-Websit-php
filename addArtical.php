<?php

 require"header.php" ;
if(!isset($_SESSION['id']) || ($_SESSION['id']==2) ){
    header('location:login.php');
}
require"nav.php";
?>
			<div class="modal-header">
					
				</div>
				<div class="modal-body">
<section class="main-block">
  <div class="container addp">
           <div class="row justify-content-center">
                 
             </div>
  

<div class="row ">

  <div class="col-md-12">
      <form action="addA.php" method="post"  enctype="multipart/form-data">

    <select class="form-control" id="ArticalSelect" name="cat"><option>Please Select a Artical Category</option>
      <?php
        include "connection.php";
       
        $data=mysqli_query($con,"select * FROM categories where state=1");

        while($row=mysqli_fetch_array($data)){
          echo"<option value='$row[name]'>".$row['name']."</input>";
        }

      ?>
    </select>
    <br>
 <div class="form-group">
   <label for="Articalname" class="loginFormElement" >Artical title:</label>
   <input class="form-control" id="Articalname" type="text" name="name">
 </div>
    


<div class="form-group">
<label class="control-label">Artical Image</label>
 
<input class="filestyle" data-icon="false" type="file" name="img">
 
</div>
    
    <div class="form-group">
      <label class="loginformelement" for="Articaldescription">Artical content</label>
        <input id="Articaldescription" class="form-control input-lg" placeholder="Large" type="text" name="desc" >
    </div>
      <br>
    <button type="submit" id="addArtical" class="btn btn-info loginFormElement" name='add_btn' value='Add Artical'>Add Artical</button>
  
    </div>
    
    </div>
  </form>
  </div>
</div>
</section>

<?php require"footer.php"?>

