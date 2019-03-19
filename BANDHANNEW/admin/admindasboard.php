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
	margin-top:2%;
}
</style>
</head>
<body>
<div class="col-sm-12">
<div class="row">

<!--menu start-->
<?php include('adminmenu.php');?>
<!--menu End-->
<!--header-->
<div class="col-sm-12" style="background:#eb2e4a;min-height:80px;color:white;font-size:50px;padding-left:1050px;">Admin Login</div>
<!--header End-->
<!--section1-->

<!--section1 end-->
<!--section1 start-->
<div class="col-sm-12 log">
<div class="col-sm-1"></div>
<div class="col-sm-10">
<div class="col-sm-12">
<div class="col-sm-6">
<div class="col-sm-12">
<a href="admindashboard.php"><span class="fa fa-th" style="font-size:200px;color:#eb2e4a;border:2px solid #eb2e4a;border-radius:2px 0px 2px 0px;height:230px;width:230px;padding-top:20px;margin-top:2%;padding-left:15px;margin-left:20px;"></span></a>
</div>
</div>
<div class="col-sm-6">
<div class="col-sm-12">
<a href="adminuser.php"><span class="fa fa-file-o" style="font-size:200px;color:#eb2e4a;border:2px solid #eb2e4a;border-radius:2px 0px 2px 0px;height:230px;width:230px;padding-top:20px;margin-top:2%;padding-left:15px;margin-left:200px;"></span></a>
</div>
</div>

<div class="col-sm-4">
<div class="col-sm-12">
<a href="adminstory.php"><span class="fa fa-gittip" style="font-size:200px;color:#eb2e4a;border:2px solid #eb2e4a;border-radius:2px 0px 2px 0px;height:230px;width:230px;padding-top:20px;margin-top:130px;padding-left:15px;margin-left:20px;"></span></a>
</div>
</div>

<div class="col-sm-4">
<div class="col-sm-12" style="margin-bottom:10%">
<a href="adminrequest.php"><span class="fa fa-list-alt" style="font-size:200px;color:#eb2e4a;border:2px solid #eb2e4a;border-radius:2px 0px 2px 0px;height:230px;width:230px;padding-top:20px;padding-left:15px;margin-top:30px;margin-left:25px;"></span></a>
</div>
</div>

<div class="col-sm-4">
<div class="col-sm-12" style="margin-bottom:10%">
<a href="admincontact.php"><span class="fa fa-phone-square" style="font-size:200px;color:#eb2e4a;border:2px solid #eb2e4a;border-radius:2px 0px 2px 0px;height:230px;width:230px;padding-top:20px;padding-left:15px;margin-top:130px;margin-left:30px;"></span></a>
</div>
</div>
<div class="col-sm-4">
<div class="col-sm-12" style="margin-bottom:10%">
<a href="adminlogout.php"><span class="fa fa-unlock-alt" style="font-size:200px;color:#eb2e4a;border:2px solid #eb2e4a;border-radius:2px 0px 2px 0px;height:230px;width:230px;padding-top:20px;padding-left:25px;margin-left:370px;margin-top:30px;"></span></a>
</div>
</div>
</div>
</div>
<div class="col-sm-1"></div>
</div>
<!--section1 End-->
<!--footer start-->
<?php include('adminfoot.php')?>
<!--footer End-->


</div>
</div>
</body>
</html>