<?php
$uid=$_REQUEST['id'];
session_start();
$email=$_SESSION['user'];
include('connection.php');
$res=mysql_query("select id from reg where email='$email'");
$row=mysql_fetch_array($res,MYSQL_BOTH);
$login_uid=$row['id'];
mysql_query("update request set status='accepted' where reqby='$uid' and reqto='$login_uid'");
header('location:acceptedrequest.php');
?>