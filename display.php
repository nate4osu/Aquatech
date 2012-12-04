<?php
$username="dbo443574793";
$password="password12";
$database="db443574793";
$user="3";
$phPastData=array();


mysql_connect("db443574793.db.1and1.com",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM pool_variable ORDER BY  `key` DESC ";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();
$phone=mysql_result($result,$i,"phone");

echo "<b><center>Database Output</center></b>";
echo "<b><center>User ID:$user</center></b>";
echo "<b><center>Phone of Sensor:$phone</center></b><br><br>";


$i=0;
while ($i < $num) {

$pool=mysql_result($result,$i,"pool_id");
$ph=mysql_result($result,$i,"ph");
$ch=mysql_result($result,$i,"ch");
$temp=mysql_result($result,$i,"temp");
$timestamp=mysql_result($result,$i,"timestamp");
$time=date("g:i a F j, Y ", strtotime($timestamp) - 3600);

$phPastData[] = $num + $ph;

if ($pool==$user) {

echo "<center><br>pH: $ph <br>cH: $ch ppm<br>Temp: $temp F<br>$time<hr><br></center>";
//echo date("g:i a F j, Y ", strtotime($timestamp));

}


$i++;

}
echo $phPastData[1];
//echo $phPastData[2];
//echo $phPastData[3];
//echo $phPastData[4];

?>
