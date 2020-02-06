<?php require"header.php"?>
<?php require"nav.php"?>

<section class="main-block">
    <div class="container addp">
             <div class="row justify-content-center">
                   <div class="col-md-5">
                          <div class="styled-heading">
                              <h2 class="title2">Manage users  </h2>
                          </div>
                      </div>
               </div>
    <div class="row ">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

            <table id="myTable">
              <tr class="header">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>manage</th>
              </tr>
              <?php
        include "connection.php";
       
        $data=mysqli_query($con,"select * FROM users ");

        while($row=mysqli_fetch_array($data)){

          ?>
                <tr>
                <td> <?php echo $row['id'] ;   ?> </td>
                <td><?php echo $row['name'];   ?></td>
                <td><?php echo $row['email'];   ?></td>
                <td><?php echo $row['phone'];   ?></td>
                <td>
                    <form action='addA.php' method='post'  class='form-inline'>
                      <input type='hidden' name='uid' value="<?php echo $row['id']?>">
                      <?php if($row['state']==0){?>
                         <button type='submit' class='btn btn-info' title='active' value='1' name='btn_activ'> <span class='ti-check'></span></button>
                      <?php }else{?>
                        <button type='submit' class='btn btn-danger' title='active' value='0' name='btn_activ'> <span class='ti-close'></span></button>
                      <?php }?>
                      </form>
                 </td>
                </tr>
                <?php } ?>
            </table>
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
