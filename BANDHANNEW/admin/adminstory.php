
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
}.h_bgimage
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
.section
{
margin-top:100px;
	min-height:300px;
	color:white;
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


<!------section--->
<div class="col-sm-12 section">
<div class="row">
<form action="storycode.php" method="POST" enctype="multipart/form-data">
<div class="col-sm-12 s1"><center><b style="color:grey;font-size:20px;">Add Success Story</center></div><br>
<div class="col-sm-12 s2" style="font-size:15px;color:grey;text-align:center;">
<div class="col-sm-4"></div>
	<div class="col-sm-4" style="margin:15px 0px 15px 0px;">
		<div class="col-sm-12">
			<input  type="text" name="name" class="form-control" placeholder="Enter Your name and your partner name"/>
		</div>
		<div class="col-sm-12">
			<input class="form-control"  name="mdate" type="text" placeholder="Enter Your Mdate"/>
		</div>
		<div class="col-sm-12">
		<textarea class="form-control" placeholder="Enter Desc.." name="desc">
		</textarea>
		</div>
		<div class="col-sm-12">
			<input name="file" type="file"/>
		</div>
		<div class="col-sm-12">
			<input  type="submit" value="SUBMIT"/>
		</div>
	</div>
	<div class="col-sm-4"></div>
	</div>
	
</div>
</div>
</form>
</div>
</center>
<!------------story-->
<!--section1 start-->
<div class="col-sm-12 user"><center>
<h2><center>Success Story Records</center></h2>
<div class="col-sm-12">
<?php
session_start();
$Sid=$_SESSION['admin'];
include('connection.php');
$sql="select * from story ";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<div class="col-sm-3">
	<div class="col-sm-12" style="min-height:250px;border:1px solid #eb2e4a;margin-top:10px;">
	<img src="upload/<?php echo $row['CPic'];?>" width="100%" height="230px" style="margin-top:15px;margin-bottom:15px;"/>
	</div>
	<div class="col-sm-12" style="min-height:50px;background:#eb2e4a;margin-bottom:10px;color:white;text-align:center;font-size:25px;">
	<p><?php echo $row['CName'];?></p>
	<p><?php echo $row['MDec'];?></p>
	</div>
</div>
<?php
}
?>
</div>
<!--section1 End-->
</div></center>

<!--footer start-->
<?php include('adminfoot.php')?>
<!--footer End-->


</div>
</div>
</body>
</html>