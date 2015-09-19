<?php session_start();?>
<?php include('connection.php')?>
<?php
$timezone = "Asia/Calcutta";
if(function_exists('date_default_timezone_set')){ date_default_timezone_set($timezone);}
$lastup=date('d-m-Y H:i:s')."-last update by-" .$_SESSION['login_user'];

$seltemplt=mysqli_query($con,"select bname,project_name from overview where proj_id='$_POST[id]'");
while($secrow=mysqli_fetch_array($seltemplt))
{
	$bna=$secrow['bname'];
	$pna=$secrow['project_name'];
    $target1="projects/".$bna."/".$pna."/projectimages/".$_FILES['file']['name'];
}
$location=$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],$target1);
if(mysqli_query($con,"update overview set floor3='".$location."',last_update='".$lastup."' where proj_id='$_POST[id]'") or die( mysqli_error($con)))
{
echo "Upload done!";
}
else
{
	echo "Error: Upload not done!";
}

mysqli_close($con);
?> 
<script type="text/javascript">setTimeout("window.close();",2000);</script>
<script type="text/javascript">
window.onunload = function() {
    if (window.opener && !window.opener.closed) {
        window.opener.popUpClosed();
    }
}
</script>