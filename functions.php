<?php


function post_like($p_id)
{

	include"connection.php";
$sql="SELECT count(like_id )FROM likes WHERE post_id=?";
			if ($statement = mysqli_prepare($con,$sql))
		{
			 mysqli_stmt_bind_param($statement, 'i', $p_id);
				mysqli_stmt_execute($statement);
				mysqli_stmt_bind_result($statement,$l); 
		while (mysqli_stmt_fetch($statement))
{return $l;}}
}

function post_comments($p_id)
{
	include"connection.php";
$sql="SELECT count(comment_id) FROM  comments WHERE post_id=?";
			if ($statement = mysqli_prepare($con,$sql))
		{
			 mysqli_stmt_bind_param($statement, 'i', $p_id);
				mysqli_stmt_execute($statement);
				mysqli_stmt_bind_result($statement,$c); 
		while (mysqli_stmt_fetch($statement))
{return $c;}}
}

function comments_like($c_id)
{
	include"connection.php";
$sql="SELECT count(c_like_id )FROM comment_likes WHERE comment_id=?";
			if ($statement = mysqli_prepare($con,$sql))
		{
			 mysqli_stmt_bind_param($statement, 'i', $c_id);
				mysqli_stmt_execute($statement);
				mysqli_stmt_bind_result($statement,$l); 
		while (mysqli_stmt_fetch($statement))
{return $l;}}
}
function comments_comments($c_id)
{
	include"connection.php";
$sql="SELECT count(c_comm_id) FROM  commect_comments WHERE comment_id=?";
			if ($statement = mysqli_prepare($con,$sql))
		{
			 mysqli_stmt_bind_param($statement, 'i', $c_id);
				mysqli_stmt_execute($statement);
				mysqli_stmt_bind_result($statement,$c); 
		while (mysqli_stmt_fetch($statement))
{return $c;}}
}
?>