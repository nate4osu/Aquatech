<?php
require_once("../conf.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>phpChart - Basic Chart with Custom Grid Properties</title>
</head>
<body>
	
<?php
$pc = new C_PhpChartX(array(array(11, 9, 5, 12, 14)),'basic_chart');
$pc->set_animate(true);
$pc->set_title(array('text'=>'Basic Chart with Custom Grid Properties'));

$pc->set_series_default(array(
	'renderer'=>'plugin::BarRenderer',
	'rendererOptions'=>array('sliceMargin'=>2,'innerDiameter'=>110,'startAngle'=>-90,'highlightMouseDown'=>true),
	'shadow'=>true
	));

$pc->add_plugins(array('highlighter'));

//set phpChart grid properties
$pc->set_grid(array(
	'background'=>'lightyellow', 
	'borderWidth'=>0, 
	'borderColor'=>'#000000', 
	'shadow'=>true, 
	'shadowWidth'=>10, 
	'shadowOffset'=>3, 
	'shadowDepth'=>3, 
	'shadowColor'=>'rgba(230, 230, 230, 0.07)'
	));

$pc->draw();
?>

</body>
</html>
