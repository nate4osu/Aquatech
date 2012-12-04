<?php
    // if the sender is known, then greet them by name
    // otherwise, consider them just another monkey
    $name = $_REQUEST['From'];
    $body = $_REQUEST['Body'];
    $data = $_POST['Body']; //plain
    list($uid, $temp, $ph, $ch) = explode(",", $data);
 
    // make an associative array of senders we know, indexed by phone number
    $con = mysql_connect("db443574793.db.1and1.com","dbo443574793","password12");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("db443574793", $con);


        $body = $_POST['Body'];
        $responder = $_POST['From'];
            //storing message and sender in database                                                        
            mysql_query("INSERT INTO pool_variable (pool_id, ph, ch, temp, phone) 
                        VALUES ($uid, $ph, $ch, $temp,'$responder')");
            mysql_close();
 
 
    // now greet the sender
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Sms>Phone:<?php echo $name ?> ph:<?php echo $ph ?> ch:<?php echo $ch ?> temp:<?php echo $temp ?> phone:<?php echo $responder ?></Sms>
</Response>

