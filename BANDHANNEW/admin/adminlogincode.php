<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
include("connection.php");
$sql="select * from login where email='$email' and password='$password'";
$res=mysql_query($sql);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['admin']=$row['email'];
	header("location:admindasboard.php");
}
else
{
	header("location:adminlogin.php?msg=1");
}


?>