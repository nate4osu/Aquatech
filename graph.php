<?php
include("phplot/phpgraphlib.php");
$graph=new PHPGraphLib(550,350); 
$con = mysql_connect("db443574793.db.1and1.com","dbo443574793","password12");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("db443574793", $con);
  
$dataArray=array();
  
//get data from database
$sql="SELECT pool_variable, COUNT(*) AS 'count' FROM sales GROUP BY salesgroup";
$result = mysql_query($sql) or die('Query failed: ' . mysql_error());
if ($result) {
  while ($row = mysql_fetch_assoc($result)) {
      $salesgroup=$row["salesgroup"];
      $count=$row["count"];
      //add to data areray
      $dataArray[$salesgroup]=$count;
  }
}
  
//configure graph
$graph->addData($dataArray);
$graph->setTitle("Sales by Group");
$graph->setGradient("lime", "green");
$graph->setBarOutlineColor("black");
$graph->createGraph();
?>