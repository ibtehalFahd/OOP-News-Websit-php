<?php
if(!isset($_SESSION['id']))
echo'<meta http-equiv="Refresh" content="0; url=http://localhost/hopes/login.php" />';
else{
	function is_like($cc,$ud)
{
	require"connection.php";
	$sql="select user_id from comment_likes where comment_id=$cc&&user_id=$ud ";
$statement = mysqli_query($con,$sql) or die( mysqli_error($con) ); 
		
		if ($row = mysqli_fetch_array($statement))
			{ 
						   return true;
					   }
					   else
					   {
						   return false;
					   }

	}
include"connection.php";
$c_id=$_GET["c_id"];
$u=$_SESSION["id"];
if(!is_like($c_id,$u))
{
	$query = mysqli_query($con," INSERT INTO comment_likes (user_id, comment_id) VALUES ('$u', '$c_id') ")
		               or die (mysqli_error($con));
if (!$query) 
		{
		echo "<h2>erorr accuer try agin</h2>";
		}
else
{
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	exit();	}
}
else{
	$query = mysqli_query($con," delete from comment_likes where user_id=$u&&comment_id=$c_id")
		               or die (mysqli_error($con));
if (!$query) 
		{
		echo "<h2>erorr accuer try agin</h2>";
		}
else
{
	header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();	}
	
}

}
	
	?>