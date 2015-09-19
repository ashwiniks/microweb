<?php include ('header.php') ?>
<?php
if(isset($_POST['submit']))
{
$Proj_Id=$_POST['proj_id'];
$Detail= mysqli_real_escape_string($con,$_POST['overview_details']);
$Address=mysqli_real_escape_string($con,$_POST['address']);
$City= $_POST['city'];
$bhktype=mysqli_real_escape_string($con,$_POST['bhktype']);
$timezone = "Asia/Calcutta";
if(function_exists('date_default_timezone_set')){ date_default_timezone_set($timezone);
$lastup=date('d-m-Y H:i:s')."-last update by-" .$_SESSION['login_user'];
}
$Arear=mysqli_real_escape_string($con,$_POST['arange']);
$Startp=mysqli_real_escape_string($con,$_POST['strprice']);
$Updatequery = mysqli_query($con,"Update overview set overview='".$Detail."',address='".$Address."',city='".$City."',bhktype='".$bhktype."',area_rg='".$Arear."',str_p='".$Startp."',last_update='".$lastup."' where proj_id='".$Proj_Id."'")
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
<p align="center" class="msg done"><input type="submit" name="" class="input-submit" onclick="history.go(-1);" value="Click to Go back to add other details" /></p>
</br>
<p align="center" class="msg info"><a href="details.php?proj_id=<?php echo $Proj_Id; ?>">Details Added Successfully! View Details</a></p>
<p align="center"><input type="hidden" name="proj_id" value="<?php echo $Proj_Id; ?>" /></p>

</div>
<?php
}
}
mysqli_close($con);
?>
<?php include('footer.php')?>	
