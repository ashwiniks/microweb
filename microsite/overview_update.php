<?php error_reporting(0); ?>

<?php session_start();?>

<?php include('connection.php');?>

<?php

if(isset($_POST['update']))

{

$Proj_Id=$_POST['proj_id'];

$b_name= $_POST['sel_bname'];

$Proj_category= $_POST['proj_category'];

$Psub_category= $_POST['psub_category'];

$Proj_name= $_POST['proj_name'];

$Detail= mysqli_real_escape_string($con,$_POST['overview_details']);

$Address=mysqli_real_escape_string($con,$_POST['address']);

$Area_r=mysqli_real_escape_string($con,$_POST['area_rg']);

$Str_p=mysqli_real_escape_string($con,$_POST['str_p']);



$timezone = "Asia/Calcutta";

if(function_exists('date_default_timezone_set'))

{ 

date_default_timezone_set($timezone);

$lastup=date('d-m-Y H:i:s')."-last update by-" .$_SESSION['login_user'];

}

$City= $_POST['city'];

$bhktype=mysqli_real_escape_string($con,$_POST['bhktype']);

$Updatequery = mysqli_query($con,"Update overview set bname='".$b_name."', project_category='".$Proj_category."',subcategory='".$Psub_category."',project_name='".$Proj_name."',overview='".$Detail."',address='".$Address."',city='".$City."',bhktype='".$bhktype."',area_rg='".$Area_r."',str_p='".$Str_p."',last_update='".$lastup."' where proj_id='".$Proj_Id."'") or die(mysqli_error($con)) ;

if(!$Updatequery)

{

die ('Error:'.mysql_error($con));

}

else

{ ?>

<SCRIPT LANGUAGE='JavaScript'>

    window.alert('Succesfully Updated')

    window.location.href='details.php?proj_id=<?php echo $Proj_Id; ?>';

    </SCRIPT>

<? }

}

mysqli_close($con);

?>