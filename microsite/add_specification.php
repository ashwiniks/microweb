<?php include ('header.php') ?>

<?php
if(isset($_POST['submit']))
{
$Proj_Id=$_POST['proj_id'];

$timezone = "Asia/Calcutta";
if(function_exists('date_default_timezone_set')){ date_default_timezone_set($timezone);
$lastup=date('d-m-Y H:i:s')."-last update by-" .$_SESSION['login_user'];
}
$Detail= mysqli_real_escape_string($con,$_POST['specifications']);

$Updatequery = mysqli_query($con,"Update overview set speci_details='".$Detail."' ,last_update='".$lastup."' where proj_id='".$Proj_Id."'")
or die(mysqli_error($con)) ;
 if(!$Updatequery)
{
die ('Error:'.mysql_error($con));
}
else
{
//header('location:details.php');
?>
<div id="content" class="box">
<p align="center" class="msg done"><button class="input-submit" onclick="history.go(-1);">Click to Go back to add other details</button></p>
</br>
<p align="center" class="msg info"><a href="details.php?proj_id=<?php echo $Proj_Id;?>">Details Added Successfully! View Details</a></p>
</div>
<?php
}
}
mysqli_close($con);
?>
<?php include('footer.php')?>	
