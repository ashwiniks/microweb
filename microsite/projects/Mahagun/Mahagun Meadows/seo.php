<?php
session_start();
include_once('connection.php');
$query_seo="SELECT * FROM seo where project_name='".$_REQUEST['project_name']."'";
//echo $query_seo;
$res_seo=mysqli_query($con,$query_seo);
$row_seo=mysqli_fetch_assoc($res_seo);
$title=$row_seo['title'];

$description=$row_seo['meta_desc'];
$keyword =$row_seo['meta_keys'];


?>