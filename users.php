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
                <th>User No.</th>
                <th>full Name</th>
                <th>uName</th>
                <th>birth_date</th>
                <th>Email</th>
                <th>gender</th>
                <th>manage</th>
                
            </tr>
            
        </thead>
        <tbody id="tbody">
        <?php
        include "connection.php";
       
        $data=mysqli_query($con,"select * FROM users ");

        while($row=mysqli_fetch_array($data)){

          ?>
                <tr>
                <td> <?php echo $row['user_id'] ;   ?> </td>
                <td><?php echo $row['full_name'];   ?></td>
                <td><?php echo $row['user_name'];   ?></td>
                <td><?php echo $row['birth_date'];   ?></td>
                <td><?php echo $row['email'];   ?></td>
                <td><?php echo $row['gender'];   ?></td>
                <td>
                    <form action='addA.php' method='post'  class='form-inline'>
                      <input type='hidden' name='uid' value="<?php echo $row['user_id']?>">
                      <?php if($row['state']==2){?>
                         <button type='submit' class='btn btn-info' title='active' value='1' name='btn_activ'> <span class='ti-check'></span></button>
                      <?php }else{?>
                        <button type='submit' class='btn btn-danger' title='active' value='2' name='btn_activ'> <span class='ti-close'></span></button>
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

