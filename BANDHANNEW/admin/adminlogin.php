<html>
<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==1)
{
	echo "<script>alert('your email and password is wrong,......')</script>";
}
?>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<style>

.h_bgimage
{
	min-height:600px;
	background:url('images/login-bg4.jpg');
	background-size:cover;
	background-repeat:no-repeat;
}
.h_hrgba
{min-height:250px;background:white;}
.h_content
{text-align:center;font-size:25px;color:white;margin-bottom:1%;margin-top:8%;text-shadow:1px 1px 1px black;}
.section1
{
min-height:200px;background:#eeeeee;
}
.faicons
{
font-size:100px;margin-top:50px;text-align:center;color:gray;
}
.fcontent
{
text-align:center;
font-family:calibri;
font-size:20px;
font-weight:bold;
}
.log
{

	min-height:600px;
}
</style>
</head>
<body>
<div class="col-sm-12">
<div class="row">


<!--header-->
<div class="col-sm-12" style="background:#eb2e4a;min-height:80px;color:white;font-size:50px;padding-left:1050px;">Admin Login</div>
<!--header End-->
<!--section1-->

<!--section1 end-->
<!--section1 start-->
<div class="col-sm-12 log">
<div class="col-sm-12">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<center>
<div class="row">
<form  action="adminlogincode.php" method="POST">
<div class="col-sm-12" style="color:#eb2e4a;margin-right:180px;font-size:20px;padding-top:150px;">
<h2>Login Here</h2>
</div>

<div class="col-sm-12" >
		<div class="col-sm-12"style="margin:15px 0px 15px 0px;">
			<input class="form-control" name="email" type="text" placeholder="Enter Your Email"/>
		</div>
	
</div>
<div class="col-sm-12" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input class="form-control" name="password" type="password" placeholder="Enter Your Password"/>
		</div>
	
</div>
<div class="col-sm-12" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input type="submit" value="LOGIN"/>
		</div>
	
</div>


</form>
</div>
</div>
</center>
<div class="col-sm-3"></div>
</div>
</div>
<!--section1 End-->
<!--footer start-->
<?php include('adminfoot.php')?>
<!--footer End-->


</div>
</div>
</body>
</html>