<?php
include('config.php');
?>
<?php
include_once('googlemap.php');
?>
<?php
@extract($_GET);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Project Map</title>
</head>

<body>
<div id="map" style="width:350px; height:350px;" ></div>
<?php
//echo 'PROPERTY ID : ' .$propid;
$result = mysql_query("SELECT * FROM overview where proj_id='$_POST[id]'");
while($row = mysql_fetch_array($result))
  {
  $f1=$row['proj_id'];
  $f2=$row['project_name'];
 // $f3=$row['imgname'];
 // $f4=$row['cont_per'];
  $f5=$row['longitude'];
  $f6=$row['latitude'];
  }
  ?>
<div id="map" style="width:400px; height:400px;" >
<?php
//echo 'longi tude  ' .$f5;
//echo 'Latitude   ' .$f6;
$map=new GOOGLE_API_3();
if ($f6=='') //($_GET['text']=='')
{
$map->center_lat='28.516969';
}
else
{
$map->center_lat=$f6;//$_GET['text'];//'28.67312'; // set latitude for center location
}
if ($f5=='')//($_GET['text2']=='')
{
$map->center_lag='77.404175';
}
else
{
$map->center_lng=$f5;//$_GET['text2'];//'77.28951'; // set langitude for center location
}
$map->zoom=12;

//marker information

// marker 1
if ($f6=='')//if($_GET['text']=='')
     {
$lat='28.516969'; // latitude
	 }
else
{
$lat=$f6;//$_GET['text'];//'28.67312'; // latitude
}
if ($f5=='')//if($_GET['text2']=='')
{
$lng='77.404175';
}
else
{
$lng=$f5;//$_GET['text2'];//'77.28951'; // longitude
}
$isclickable='true';
$title="Project map view";
$info= $f2; //"<b>Thanks <blink>User</blink>, enjoy lation of Sahadra metrostation.</b>";
$map->addMarker($lat,$lng,$isclickable,$title,$info);


// marker 2
if($f6=='')//($_GET['text']=='')
     {
$lat='28.454204'; // latitude
	 }
else
{
$lat=$f6 + .05;//$_GET['text'];//'28.67312'; // latitude
}
if($f5=='')//($_GET['text2']=='')
{
$lng='77.041626';
}
else
{
$lng=$f5 - .05;//$_GET['text2'];//'77.28951'; // longitude
}
$isclickable='true';
$title="Project on map";
$info=$f2;
$icon='airplane-sport.png';
$map->addMarker($lat,$lng,$isclickable,$title,$info,$icon);

echo $map->showmap();
?>
</div>
</body>
</html>
