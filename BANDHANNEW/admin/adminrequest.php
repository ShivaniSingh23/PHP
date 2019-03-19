<?php
include("connection.php");
$sql="select * from request";
$res=mysql_query($sql);
?>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<style>
.user
{

	min-height:600px;
margin-bottom:2%;	
margin-top:2%;	
}
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

<!--menu start-->
<?php include('adminmenu.php');?>
<!--menu End-->
<!--header-->
<div class="col-sm-12" style="background:#eb2e4a;min-height:80px;color:white;font-size:50px;padding-left:1050px;">Admin Zone</div>
<!--header End-->
<!--section1-->

<!--section1 end-->
<!--section1 start-->
<div class="col-sm-12 user"><center>
<table border='2' ><h2><center>Request Records</center></h2>
<tr style="margin-top:2%;background:#33485a;height:40px;color:white;">

<th style="padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;">REQUEST BY</th>
<th style="padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;">REQUEST TO</th>
<th style="padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;">REQUEST DATE</th>
<th style="padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;">STATUS</th>


</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
	<tr><center>
	
	<td  style="padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;"><?php echo $row['reqby']; ?></td>
	<td style="padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;"><?php echo $row['reqto']; ?></td>
	<td style="padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;"><?php echo $row['reqdate']; ?></td>
	<td style="padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;"><?php echo $row['status']; ?></td>
	
	
	
	
	
	</center></tr>
	<?php
$a++;	
}
?>
</table>
</div></center>
<!--section1 End-->
<!--footer start-->
<?php include('adminfoot.php')?>
<!--footer End-->


</div>
</div>
</body>
</html>