<?php
$con=mysqli_connect("localhost","root","1qaz@wsx","raspberryDB");
if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL:".mysqli_connect_error();
}
$now1=date('Ymdhis');
$date=$_GET['date'];

mysqli_query($con,"INSERT INTO rfid (datetime,date)
        VALUES (now(),$date)");
mysqli_close($con);
 echo "powenk.com get it"."date time".$now1.",date=".$date;
?>

