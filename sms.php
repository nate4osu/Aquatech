 <?php
    
    ?>
    <Response>
        <Sms>Message Recieved</Sms>
    </Response>
<?php
        $data = $_REQUEST['Body'];
        $phone = $_REQUEST['From'];
        list($uid, $temp, $ph, $ch) = explode(",", $data);
        echo $uid; 
        echo $temp; 
        echo $ph;
        echo $ch;

$sql="INSERT INTO pool_variable (pool_id, ph, ch, temp, phone)
VALUES
($uid, $ph, $ch, $temp, $phone)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";


mysql_close($con);
        
    ?>

    