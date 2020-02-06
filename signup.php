<?php require"header.php";
if(isset($_SESSION['id'])){
    header('location:login.php');
}
?>
<?php require"nav.php"?>
<div class="auth">
    <div class="signup-form">
    <form action="addA.php" method="post"  enctype="multipart/form-data">
            <h2>Sign Up</h2>
            <hr>
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Username" required="required">
               
                     
                        
                     
              
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
               
                     
                       
                     
              
            </div>
            <div class="form-group">
                    <input type="text" class="form-control" name="phone" placeholder="Phone Number" required="required">
                   
                         
                            
                         
                    
                </div>
                <!-- <div class="form-group">
                        <label class="control-label" for="img">profile Image</label>
                        <input class="filestyle form-control" id='img' name="img" data-icon="false" type="file">
                        <% let imgerr=vError.find(err=>err.param==='img')%>
                        <% if(imgerr){%>
                             
                                <%= imgerr.msg %>
                             
                        <%}%>
                    </div> -->
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                
               
                     
                       
                     
                
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="img" placeholder="img" required="required">
               
                     
                        
                     
               
            </div> 
            <!-- <div class="form-group">
                <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" required="required">
               
                     
                        
                     
               
            </div> -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" value='sing' name='btn_sign'>Sign Up</button>
            </div>
           
                 
                    
                 
            
            <p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>. 
        </form>
    </div>
</div>

<?php require"footer.php"?>
