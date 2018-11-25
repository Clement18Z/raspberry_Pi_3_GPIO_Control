<?php
$con=mysqli_connect("localhost","root","1qaz@wsx","raspberryDB");
if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL:".mysqli_connect_error();
}

$now1=date('Ymdhis');
$id=$_GET['id'];
$temp=$_GET['temp'];

mysqli_query($con,"INSERT INTO temp (datetime,temp,userid) VALUES (now(),$temp,$id)");
mysqli_close($con);
 echo "powenk.com get it"."date time".$now1.",temp=".$temp." id=".$id;
?>
