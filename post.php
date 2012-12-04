<?php
$con = mysql_connect("db443574793.db.1and1.com","dbo443574793","password12");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("db443574793", $con);

$data = $_POST[Body]; //plain
list($uid, $temp, $ph, $ch) = explode(",", $data);
echo $uid; 
echo $temp; 
echo $ph;
echo $ch;

<?xml version="1.0" encoding="UTF-8"?>
<Response>
    
</Response>

$sql="INSERT INTO pool_variable (pool_id, ph, ch, temp)
VALUES
($uid, $ph, $ch, $temp)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";


mysql_close($con);
?>