<?php
$con=mysqli_connect("localhost","root","1qaz@wsx","raspberryDB");
if(mysqli_connect_errno()){
 echo "Failed to connect to MySQL:". mysqli_connect_error();
}
$result=mysqli_query($con,"SELECT * FROM temp WHERE userid=2 ORDER BY datetime DESC");

echo "<table border='1'>
<tr>
<th>Date Time</th>
<th>Temperature</th>
<th>usr ID</>
</tr>";

while($row = mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>" . $row['datetime']."</td>";
 echo "<td>" . $row['temp']."</td>";
 echo "<td>" . $row['userid']."</td>";
 echo "</tr>";
}


echo "</table>";
mysqli_close($con);

?>

