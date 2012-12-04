 <?php
    $con = mysql_connect("db443574793.db.1and1.com","dbo443574793","password12");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("db443574793", $con);

        $body = $_POST['Body'];
        $responder = $_POST['From'];
            //storing message and sender in database                                                        
            mysql_query("INSERT INTO sms_received (responder, body) 
                        VALUES ('$responder', '$body')");
            mysql_close();
    
    ?>

    <?php
        header("content-type: text/xml");
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
    ?>
    <Response>
        <Sms>Hows it going, Dr. Evil</Sms>
    </Response>

