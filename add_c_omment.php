<?php
session_start();
if(!isset($_SESSION['id']))
				echo'<meta http-equiv="Refresh" content="0; url=http://localhost/hopes/login.php" />';
				else{
if($_SERVER["REQUEST_METHOD"]=="POST")
		{
$com=$_POST["comm"];
$c_id=$_GET["c_id"];
$u=$_SESSION["id"];

if(!empty($com))
{
include"connection.php";
$query = mysqli_query($con," INSERT INTO commect_comments (comment_id, user_id,content) VALUES ('$c_id', '$u', '$com')")
		               or die (mysqli_error($con));
if (!$query) 
		{
		echo "<h2>erorr accuer try agin</h2>";
		}
else
{
	header('Location: ' . $_SERVER['HTTP_REFERER']);

	}
		}
	}
}	
?>