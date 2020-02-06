<?php session_start();?>
<?php
include "connection.php";
function addFile(){
    $info = explode("/",$_FILES["img"]["type"]);

    if($info[0]=='image' ){
        $path="uploads/".time().".".end($info);
                     if(move_uploaded_file($_FILES["img"]["tmp_name"],$path))
                        return $path;
                     else 
                        return  $path="articalImages/default.jpg";
    } 
    
}

print_r($_FILES);
print_r($_POST);

if(isset($_POST['add_btn'])){

    mysqli_query($con,"insert into posts(title,content,img,cat_name,user_id) values('$_POST[name]','$_POST[desc]','".addFile()."','$_POST[cat]','$_SESSION[id]')");
    // echo"insert into posts(title,content,img,cat_name,user_id) values('$_POST[name]','$_POST[desc]','".addFile()."','$_POST[cat]','$_SESSION[id]')";
    header("Location: addArtical.php"); 
    // echo"<br>insert into articals(name,description,img,cat_id) values('$_POST[name]','$_POST[desc]','".addFile()."','$_POST[cat]') ";
}
if(isset($_POST['add_cat'])){

    mysqli_query($con,"insert into categories values(null,'$_POST[cat]','$_SESSION[id]','2')");
    header("Location: addCategory.php"); 
    // echo"<br>insert into articals(name,description,img,cat_id) values('$_POST[name]','$_POST[desc]','".addFile()."','$_POST[cat]') ";
}

if(isset($_POST['btn_sign'])){

    mysqli_query($con,"insert into users (name, email, phone,profile, pass) VALUES('$_POST[name]','$_POST[email]','$_POST[phone]','".addFile()."','$_POST[pass]')");
    header("Location: index.php"); 
    // echo"<br>insert into articals(name,description,img,cat_id) values('$_POST[name]','$_POST[desc]','".addFile()."','$_POST[cat]') ";
}
if(isset($_POST['btn_activ'])){

    mysqli_query($con,"update users set state='$_POST[btn_activ]' where user_id='$_POST[uid]'");
   echo("update users set state='$_POST[btn_activ]' where id='$_POST[uid]'");
    header("Location: users.php"); 
    // echo"<br>insert into articals(name,description,img,cat_id) values('$_POST[name]','$_POST[desc]','".addFile()."','$_POST[cat]') ";
}

if(isset($_POST['btn_cat_activ'])){

    mysqli_query($con,"update categories set state='$_POST[btn_cat_activ]' where id='$_POST[pid]'");
    header("Location: manage_cat.php"); 
    // echo"<br>insert into articals(name,description,img,cat_id) values('$_POST[name]','$_POST[desc]','".addFile()."','$_POST[cat]') ";
}
if(isset($_POST['btn_p_activ'])){

    mysqli_query($con,"update posts set p_state='$_POST[btn_cat_activ]' where id='$_POST[pid]'");
    header("Location: manage_cat.php"); 
    // echo"<br>insert into articals(name,description,img,cat_id) values('$_POST[name]','$_POST[desc]','".addFile()."','$_POST[cat]') ";
}

if(isset($_POST['btn_c_activ'])){

    mysqli_query($con,"update comments set c_state='$_POST[btn_c_activ]' where comment_id='$_POST[cid]'");
//    echo "update comments set c_state='$_POST[btn_c_activ]' where comment_id='$_POST[cid]'";

    header("Location: comments.php"); 
    // echo"<br>insert into articals(name,description,img,cat_id) values('$_POST[name]','$_POST[desc]','".addFile()."','$_POST[cat]') ";
}

if(isset($_POST['btn_login'])){
	$data=mysqli_query($con,"select * from users where email='$_POST[email]' && password='$_POST[pass]'") or die(mysqli_error($con));
	$r=mysqli_fetch_array($data);
	if($r){
	$_SESSION['id']=$r['user_id'];
	$_SESSION['role']=$r['priv'];
        // print_r($_SESSION);
	if($r['priv']==2)
		header("Location: admin.php"); 
    elseif($r['priv']==1)
		header("Location: index.php"); 
	}
	else
	  echo"user not found";
    // echo"<br>insert into articals(name,description,img,cat_id) values('$_POST[name]','$_POST[desc]','".addFile()."','$_POST[cat]') ";
}
?>
