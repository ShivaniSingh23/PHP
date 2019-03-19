<?php
include("connection.php");
$id=$_REQUEST['id'];
$sql="delete from reg where id='$id'";
mysql_query($sql);
header("location:adminuser.php");
?>