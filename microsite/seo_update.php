<?php session_start();?>
<?php include('connection.php');?>
<?php
if(isset($_POST['update']))
{
$Proj_Id=$_POST['proj_id'];
$s_pg= $_POST['selectpage_seo'];
$til= mysqli_real_escape_string($con,$_POST['title']);
$m_d=mysqli_real_escape_string($con,$_POST['meta_desc']);
$m_k=mysqli_real_escape_string($con,$_POST['meta_keys']);
$timezone = "Asia/Calcutta";
if(function_exists('date_default_timezone_set')){ date_default_timezone_set($timezone);
$lastup=date('d-m-Y H:i:s')."-last update by-" .$_SESSION['login_user']; }

$Updatequery = mysqli_query($con,"Update seo set title='".$til."',meta_desc='".$m_d."',meta_keys='".$m_k."',last_update='".$lastup."' where proj_id='".$Proj_Id."' && selectpage_seo='".$s_pg."' ")
or die(mysqli_error($con)) ;
 if(!$Updatequery)
{
die ('Error:'.mysql_error($con));
}
else
{
header('location:details.php?proj_id='."$Proj_Id".'');
/*echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='details.php';
    </SCRIPT>");*/
}
}
mysqli_close($con);
?>