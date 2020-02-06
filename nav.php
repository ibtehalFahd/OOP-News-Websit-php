<nav class="navbar navbar-expand-lg white-nav ">
           
        <a class="navbar-brand titlem" href="#">Hopes news</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
         
            <li class="nav-item <%=title==='Home'?'active':'' %>">
              <a class="nav-link element" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
         
            <!-- <li class="nav-item  <%=title==='Cart'?'active':'' %>">
              <a class="nav-link element" href="result.php">Result</a>
            </li> -->
           
           
          <li class="nav-item dropdown <%=title==='Drama'?'active':'' %> <%=title==='News'?'active':'' %> <%=title==='ComedyShow'?'active':'' %>  <%=title==='Kpop'?'active':'' %>" >
              <a class="nav-link element" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories
                <span class="icon-arrow-down"></span>
              </a>
              <?php
              include "connection.php";
              
              $data=mysqli_query($con,"select * FROM categories where state=1");
              ?>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style='background-color:#f8f8f8'>
              <?php
              while($row=mysqli_fetch_array($data)){
                echo"<a style='padding:4px;	text-transform: uppercase; ' class='dropdown-item element' href='category.php?id=$row[name]'>$row[name]</a>";
              } 
              ?>        
              </div>
              </li>
              <?php
              if(isset($_SESSION['id'])){?>
              <li class="nav-item <%=title==='Home'?'active':'' %>">
              <a class="nav-link element" href="contact.php">Contac us</a>
            </li>
            <li class="nav-item <%=title==='Home'?'active':'' %>">
              <a class="nav-link element" href="about.php">About us</a>
            </li>
          <!-- <li class="nav-item dropdown <%=title==='addProduct'?'active':'' %>  <%=title==='listProducts'?'active':'' %>  <%=title==='Manage Users'?'active':'' %>" >
            <a class="nav-link element" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dashboard
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
            <li class="nav-item <%=title==='Home'?'active':'' %>">

            <a href="profile.php" class="nav-link element"><i class="fa fa-fw fa-user  "></i> Profile</a>
            </li>
            <?php
           if(($_SESSION['role'])==1){?>
           <li class="nav-item dropdown <%=title==='Drama'?'active':'' %> <%=title==='News'?'active':'' %> <%=title==='ComedyShow'?'active':'' %>  <%=title==='Kpop'?'active':'' %>" >
              <a class="nav-link element" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dashboadrd
                <span class="icon-arrow-down"></span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style='background-color:#f8f8f8'>
              <a style='padding:4px;	text-transform: uppercase; ' class='dropdown-item element'  href="admin.php">Home</a>
              <a style='padding:4px;	text-transform: uppercase; ' class='dropdown-item element'  href="addArtical.php">Add Artical</a>
              <a style='padding:4px;	text-transform: uppercase; ' class='dropdown-item element'  href="addCategory.php">Add Category</a>
              <a style='padding:4px;	text-transform: uppercase; ' class='dropdown-item element'  href="users.php">manage users</a>
              <a style='padding:4px;	text-transform: uppercase; ' class='dropdown-item element'  href="articals.php">manage posts</a>
              <a style='padding:4px;	text-transform: uppercase; ' class='dropdown-item element'  href="comments.php">manage comments</a>
              <a style='padding:4px;	text-transform: uppercase; ' class='dropdown-item element'  href="manage_cat.php">manage categories</a>
              <a style='padding:4px;	text-transform: uppercase; ' class='dropdown-item element'  href="addArtical.php">Add Artical</a>
              </div>
          </li>
           <?php }?>
            <?php }else{?>
             <li class="nav-item  <%=title==='SignUp'?'active':'' %>">
              <a class="nav-link element" href="signup.php">SignUp</a>
            </li> 
            <li class="nav-item  <%=title==='LogIn'?'active':'' %>">
              <a class="nav-link element" href="login.php">LogIn</a>
            </li>
            <?php } ?>
            
            <?php
           if(isset($_SESSION['id'])){?>
            <li class="nav-item <%=title==='Home'?'active':'' %>">

            <a href="logout.php" class="nav-link element"><i class="fa fa-sign-out"></i> logout</a>
            </li>
            <?php } ?>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link element dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <a class="nav-link element disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> -->

            <li class="nav-item ">
            <form class="search">
  <div class="search__wrapper">
    <input type="text" name="" placeholder="Search for..." class="search__field">
    <button type="submit" class="fa fa-search search__icon"></button>
  </div>
</form>
            </li>
          </ul>
       
        
          <!-- <form class="form-inline my-2 my-lg-0" action="/logout" method="POST"> -->
        
          <!-- <form action="logout.php" method="post" id='logout'>
            <div class="form-inline my-2 my-lg-0">
             
            <input class="form-control mr-sm-2" style='background-color:#EEAA9C;color:white;border: none' type="submit" value='Logout' id='logoutbtn' placeholder="Logout" aria-label="Logout">
          </div>
           
        
        </form> -->
            
           
          <!-- </form> -->
        </div>
        </div>
      </nav>
     