<?php
include("connection.php");
$sql="select * from reg";
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
<div class="col-sm-12" style="background:#eb2e4a;min-height:80px;color:white;font-size:50px;padding-left:1050px;">Admin Login</div>
<!--header End-->
<!--section1-->

<!--section1 end-->
<!--section1 start-->
<div class="col-sm-12 user">
<table border='2'><h2><center>User Management</center></h2>
<tr style="margin-top:2%;background:#33485a;height:40px;color:white;padding-left:10px;">

<th style="text-align:center;padding-left:10px;padding-right:10px;">EMAIL</th>
<th style="text-align:center;padding-left:10px;padding-right:10px;">NAME</th>
<th style="text-align:center;padding-left:10px;padding-right:10px;">DOB</th>
<th style="text-align:center;padding-left:10px;padding-right:10px;">PASSWORD</th>
<th style="text-align:center;padding-left:10px;padding-right:10px;">MOBILE</th>
<th style="text-align:center;padding-left:10px;padding-right:10px;">NATIONALITY</th>
<th style="text-align:center;padding-left:10px;padding-right:10px;">CITY</th>
<th style="text-align:center;padding-left:10px;padding-right:10px;">RELIGION</th>
<th style="text-align:center;padding-left:10px;padding-right:10px;">MOTHERTONGUE</th>
<th style="text-align:center;padding-left:10px;padding-right:10px;">HEIGHT</th>
<th style="text-align:center;padding-left:10px;padding-right:10px;">WEIGHT</th>
<th style="text-align:center;padding-left:10px;padding-right:10px;">ADDRESS</th>
<th style="text-align:center;padding-left:10px;padding-right:10px">GENDER</th>

<th style="text-align:center;">FILE</th>
<th style="text-align:center;">DELETE</th>

</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
	<tr>
	
	<td style="text-align:center;"><?php echo $row['email']; ?></td>
	<td  style="text-align:center;"><?php echo $row['name']; ?></td>
	<td style="text-align:center;"><?php echo $row['dob']; ?></td>
	<td style="text-align:center;"><?php echo $row['password']; ?></td>
	<td style="text-align:center;"><?php echo $row['mobile']; ?></td>
	<td style="text-align:center;"><?php echo $row['nationality']; ?></td>
	<td style="text-align:center;"><?php echo $row['city']; ?></td>
	<td style="text-align:center;"><?php echo $row['religion']; ?></td>
	<td style="text-align:center;"><?php echo $row['mothertongue']; ?></td>
	<td style="text-align:center;"><?php echo $row['height']; ?></td>
	<td style="text-align:center;"><?php echo $row['weight']; ?></td>
	<td style="text-align:center;"><?php echo $row['address']; ?></td>
	<td style="text-align:center;"><?php echo $row['gender']; ?></td>
	<td style="text-align:center;"><img src="/upload/<?php echo $row['file'];?>"></td>
	
	
	<td><a href="adminusercode.php?id=<?php echo $row['id'] ?>">delete</td>
	
	</tr>
	<?php
$a++;	
}
?>
</table>
</div>
<!--section1 End-->
<!--footer start-->
<?php include('adminfoot.php')?>
<!--footer End-->


</div>
</div>
</body>
</html>