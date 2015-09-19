<?php include('connection.php');?>
<?php
$user_id=$_GET['Id'];
if(mysqli_query($con,'delete from user_info where User_Id="'.$user_id.'"')or die(mysqli_error($con)))
{
	?>
<script type="text/javascript">
alert('Delete User?');
window.location.href="viewuser.php"
</script>
<?php
}
?>