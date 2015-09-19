<?php include('connection.php');?>
<?php
//$Proj_Id=$_GET['id'];
if(mysqli_query($con,"delete from overview where proj_id='$_POST[id]'") or die(mysqli_error($con)))
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Microsite Succesfully Deleted!')
    </SCRIPT>");
}
else
{
	echo "Error: not deleted!";
}

?>
<script type="text/javascript">
window.onunload = function() {
    if (window.opener && !window.opener.closed) {
        window.opener.popUpClosed();
    }
};
</script>
<script type="text/javascript">setTimeout("window.close();");</script>
