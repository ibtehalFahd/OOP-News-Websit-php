<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
		{
$com=$_POST["comm"];
if(!empty($com))
{
include"connection.php";
$id=$_GET['id'];
$u_id=$_GET['u'];
$query = mysqli_query($con_db," INSERT INTO comments ( post_id, user_id,comment) VALUES ('$id', '$u_id', '$com')")
		               or die (mysqli_error($con_db));
if (!$query) 
		{
		echo "<h2>erorr accuer try agin</h2>";
		}
else
{
	header("location:Home.php?id=$u_id");
		exit();	}
		
	}
		}
		
?>