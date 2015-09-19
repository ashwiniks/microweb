
<?php include_once('connection.php')?>
<?php

$id=$_REQUEST['project_id'];
$query_approve="update property_detail set Status='approved' where Prop_Id='".$id."'";
//echo $query_approve;
if(mysqli_query($con,$query_approve))
{ ?>
<script type='text/javascript'>
alert(" Resale property approved");
window.location.href="resaleproject_list.php";
</script>

<? } ?>