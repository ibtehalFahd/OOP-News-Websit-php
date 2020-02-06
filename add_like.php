<?
session_start();
if(!isset($_SESSION['id']))
echo'<meta http-equiv="Refresh" content="0; url=http://localhost/hopes/login.php" />';
else{
function is_like($cc,$ud)
{
	require"connection.php";
	$sql="select user_id from likes where post_id=$cc&&user_id=$ud ";
$statement = mysqli_query($con_db,$sql) or die( mysqli_error() ); 
		
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
$id=$_GET['id'];
$u_id=$_GET['u'];
if(!is_like($id,$u_id))
{
	$query = mysqli_query($con_db," INSERT INTO likes ( post_id, user_id) VALUES ('$id', '$u_id')")
		               or die (mysqli_error($con_db));
if (!$query) 
		{
		echo "<h2>erorr accuer try agin</h2>";
		}
else
{header("location:home.php?id=$u_id");
exit();	}}
else
	{
	$query = mysqli_query($con_db," delete from likes where user_id=$u_id&&post_id=$id")
		               or die (mysqli_error($con_db));
if (!$query) 
		{
		echo "<h2>erorr accuer try agin</h2>";
		}
else
{header("location:home.php?id=$u_id");
exit();	}}
			
}	
	?>