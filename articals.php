<?php require"header.php";
if(!isset($_SESSION['id']) || ($_SESSION['id']==2) ){
  header('location:login.php');
}
?>
<?php require"nav.php"?>


<div class="product">
        <section class="main-block">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <!-- <div class="styled-heading">
                                <h2 class="title2" >products managment</h2>
                            </div> -->
                        </div>
                    </div>
                    <div class="container">
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
                    
    <table class="table myt"  id="myTable">
        <thead >
            <tr >
                <th>Post No.</th>	
                <th>title</th>
                <th>category</th>
                <th>content</th>
                <th>date</th>
                <th>manage</th>
                
            </tr>
            
        </thead>
        <tbody id="tbody">
        <?php
        include "connection.php";
       
        $data=mysqli_query($con,"select * FROM posts ");

        while($row=mysqli_fetch_array($data)){

          ?>
                <tr>
                <td> <?php echo $row['post_id'] ;   ?> </td>
               
                <td><?php echo $row['title'];  ?></td>
                <td><?php echo $row['cat_name'];  ?></td>
                <td><?php echo $row['content'];   ?></td>
                <td><?php echo $row['date'];   ?></td>
                <td>
                    <form action='addA.php' method='post'  class='form-inline'>
                      <input type='hidden' name='pid' value="<?php echo $row['post_id']?>">
                      <?php if($row['p_state']==1){?>
                         <button type='submit' class='btn btn-danger' title='active' value='2' name='btn_p_activ'> <span class='ti-close'></span></button>
                      <?php }else{?>
                        <button type='submit' class='btn btn-info' title='active' value='1' name='btn_p_activ'> <span class='ti-check'></span></button>
                      <?php }?>
                      </form>
                 </td>
                </tr>
                <?php } ?>
        </tbody>
    </table>  
    </div>
</div>
</div>
</section>
<script>
        function myFunction() {
          // Declare variables 
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
        
          // Loop through all table rows, and hide those who don't match the search query
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            } 
          }
        }
        </script>
<?php require"footer.php"?>

