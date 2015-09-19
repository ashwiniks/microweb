<?php session_start();?>
<?php include('connection.php');?>
<?php
//$sec_bname=mysqli_query($con,"select bname,project_name from overview") or die(mysqli_error($con));
$userdir=$_POST['proj_name'];
$bnm=$_POST['bulder_name'];
$ibnm=$_POST['ibulder_name'];
if($bnm!=="Others")
{
	$sbunm=$_POST['bulder_name'];
}
else
{
	$sbunm=$_POST['ibulder_name'];
}
//-----------change------------
$respb=mysqli_query($con,"select * from overview");
while($rbp=mysqli_fetch_array($respb))
{
 $checkbn=$rbp['bname'];
 $checkpn=$rbp['project_name'];
}
$filename="projects/".$sbunm;
$newfile="projects/".$sbunm;
if(file_exists($filename."/".$userdir))
{
	echo "Error: Project already exists, Do not create duplicate project name! ";
	exit;	
}
else if(file_exists($filename))
{
 //ignor builder name
}
else
{
	$mk=mkdir("projects/".$sbunm) or die(mysqli_error($con));
}

//...........end change....................
$src ='include';
$mk="projects/".$sbunm;
$dst=$mk."/";
 
if(copy($src.'/file.zip',$dst.'file.zip'))
{
 $zip = new ZipArchive;
 $zip->open($dst.'/file.zip');
 if($zip->extractTo($dst))
 {
	//$zip->deleteName($dst.'/file.zip'); 	
	$zip->close();
	//echo "'".$dst."file.zip'";
	unlink($dst.'file.zip');	
 }
 $old=$dst.'file';
 $new=$dst.$userdir;
 /*if($bnm)
 {
  $new=$dst.$bnm;
 }
 else
 {
	  $new=$dst.$ibnm;
 }*/
  //---------change -----
  if(file_exists($new))
  {
	  echo 'Error:Project name already exists, Do not create duplicate project Name!';
	  exit;
  }
  else
  {
    rename($old, $new);
  }
}
if(isset($_POST['submit']))
{
$bname=$_POST['bulder_name'];
	if($bname!=="Others")
	{
	$sbname=$_POST['bulder_name'];
	}
	else
	{
	$sbname=$_POST['ibulder_name'];
	}

//$temp=$_POST['sel_templete'];
$pc=$_POST['proj_category'];

//$cpsubc=$_POST['cpsub_category'];
	if($pc=="Residential")
	{
	$psubc=$_POST['rpsub_category'];
	}
	else if($pc=="Commercial")
	{
	$psubc=$_POST['cpsub_category'];	
	}
$pn=mysqli_real_escape_string($con,$_POST['proj_name']);
$timezone = "Asia/Calcutta";
	if(function_exists('date_default_timezone_set')){ 
	date_default_timezone_set($timezone);
	$lastup=date('d-m-Y H:i:s')."-last update by-" .$_SESSION['login_user'];
 	}
		
$query="Insert into overview(bname,project_category,subcategory,project_name,last_update) values ('".$sbname."','".$pc."','".$psubc."','".$pn."','".$lastup."')";
$procqury=mysqli_query($con,$query);
if($procqury)
	{
	echo
	 ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Microsite Succesfully Created!')
    window.location.href='add_microsite.php';
    </SCRIPT>"); 
	//die ('Error:'.mysqli_error($con));

	}
	else
	{
	echo mysqli_error($con);
		exit;
	}
}
mysqli_close($con);
?>
<script type="text/javascript">
window.onunload = function() {
    if (window.opener && !window.opener.closed) {
        window.opener.popUpClosed();
    }
}
</script>

