<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
           
        <a class="navbar-brand titlem" href="#">Korea Tv</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <%=title==='Home'?'active':'' %>">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
         
            <!-- <li class="nav-item  <%=title==='Cart'?'active':'' %>">
              <a class="nav-link" href="result.php">Result</a>
            </li> -->
           
            <li class="nav-item dropdown <%=title==='Drama'?'active':'' %> <%=title==='News'?'active':'' %> <%=title==='ComedyShow'?'active':'' %>  <%=title==='Kpop'?'active':'' %>" >
              <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallary
                <span class="icon-arrow-down"></span>
              </a>
              <?php 
$d = dir('gallary/');
?>

  
 
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <?php
              $i=1;
                    while (($file = $d->read()) !== false){ 
                      if($i>2)
                         echo"<a class='dropdown-item' href='file.php?id=$file'>zip.$i</a>";
                        $i++;
                  
                      } 
                         $d->close(); 
                   ?>        
              </div>
          </li>
          <li class="nav-item dropdown <%=title==='Drama'?'active':'' %> <%=title==='News'?'active':'' %> <%=title==='ComedyShow'?'active':'' %>  <%=title==='Kpop'?'active':'' %>" >
              <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories
                <span class="icon-arrow-down"></span>
              </a>
              <?php
        include "connection.php";
       
        $data=mysqli_query($con,"select * FROM categories where state=1");
                      ?>
      
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <?php
              while($row=mysqli_fetch_array($data)){
                    
                         echo"<a class='dropdown-item' href='category.php?id=$row[cat_name]'>$row[cat_name]</a>";
                        $i++;
                  
                      } 
                       
                   ?>        
              </div>
          </li>
          
          <!-- <li class="nav-item dropdown <%=title==='addProduct'?'active':'' %>  <%=title==='listProducts'?'active':'' %>  <%=title==='Manage Users'?'active':'' %>" >
            <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dashboard
              <span class="icon-arrow-down"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/admin/addProduct">Add product</a>
                <a class="dropdown-item" href="/admin/listProduct">Manage products</a>
                <a class="dropdown-item" href="/admin/manageUsers">Manage Users</a>
                <a class="dropdown-item" href="/admin/manageOrers">Manage Orders</a>
            </div>
        </li> -->
<!--         
            <% if(isAdmin){%>
            
            -->
            <li class="nav-item  <%=title==='addProduct'?'active':'' %>">
              <a class="nav-link" href="addArtical.php">Add Artical</a>
            </li>
            <li class="nav-item  <%=title==='addProduct'?'active':'' %>">
              <a class="nav-link" href="addCategory.php">Add Category</a>
            </li>
            <!-- <li class="nav-item  <%=title==='editProduct'?'active':'' %>">
              <a class="nav-link" href="/admin/editProduct">Edit product</a>
            </li> --> 
            <!-- <li class="nav-item  <%=title==='listProducts'?'active':'' %>">
              <a class="nav-link" href="/admin/listProduct">Manage products</a>
            </li>
            
            <%}%> -->
            <li class="nav-item  <%=title==='SignUp'?'active':'' %>">
              <a class="nav-link" href="users.php">manage users</a>
            </li> 
            <li class="nav-item  <%=title==='SignUp'?'active':'' %>">
              <a class="nav-link" href="articals.php">manage articals</a>
            </li> 
           
             <li class="nav-item  <%=title==='SignUp'?'active':'' %>">
              <a class="nav-link" href="signup.php">SignUp</a>
            </li> 
            <li class="nav-item  <%=title==='LogIn'?'active':'' %>">
              <a class="nav-link" href="login.php">LogIn</a>
            </li>
           
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a> -->
              <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div> -->
            <!-- </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> -->
          </ul>
       
        
          <!-- <form class="form-inline my-2 my-lg-0" action="/logout" method="POST"> -->
            <div class="form-inline my-2 my-lg-0">
             
            <input class="form-control mr-sm-2" style='background-color:#EEAA9C;color:white;border: none' type="submit" value='Logout' id='logoutbtn' placeholder="Logout" aria-label="Logout">
          </div>
            <form action="/logout" method="post" id='logout'>
        
        </form>
            

          <!-- </form> -->
        </div>
        </div>
      </nav>
     