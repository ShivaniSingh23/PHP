<?php
$name=$_POST['name'];
echo $name;
$mdate=$_POST['mdate'];
echo $mdate;
$desc=$_POST['desc'];
echo $desc;
$filename=$_FILES['file']['name'];
echo $filename;
$size=$_FILES['file']['size'];
echo $size;
$tmp=$_FILES['file']['tmp_name'];
echo $tmp;
$type=$_FILES['file']['type'];
echo $type;
$location='upload/';
move_uploaded_file($tmp,$location.$filename);
include('connection.php');
echo $insert="insert into story(CName,MDate,MDec,CPic,SDate)
values('$name','$mdate','$desc','$filename',curdate())";
mysql_query($insert);
header('location:adminstory.php');
?>