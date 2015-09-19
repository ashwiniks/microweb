<?php session_start();?>
<?php include('connection.php');?>
<?php
if(isset($_POST['update']))
{
$Proj_Id=$_POST['proj_id'];
$timezone = "Asia/Calcutta";
if(function_exists('date_default_timezone_set')){
	 date_default_timezone_set($timezone);
$lastup=date('d-m-Y H:i:s')."-last update by-" .$_SESSION['login_user'];
}
$langi= mysqli_real_escape_string($con,$_POST['longitude']);
$lati= mysqli_real_escape_string($con,$_POST['latitude']);
$Updatequery = mysqli_query($con,"Update overview set longitude='".$langi."',latitude='".$lati."',last_update='".$lastup."' where proj_id='".$Proj_Id."'")
or die(mysqli_error($con)) ;
if(!$Updatequery)
{
die ('Error:'.mysqli_error($con));
}
else
{
header('location:details.php?proj_id='."$Proj_Id".'');
/*echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated!')
    window.location.href='details.php';
    </SCRIPT>");*/
}
}
mysqli_close($con);
?>

