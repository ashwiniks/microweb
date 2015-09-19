<html>
<head>
<?php include ('connection.php') ?>
<script type="text/javascript">setTimeout("window.close();", 15000);</script>
</head>
<body>
<title>Delete Microsite</title>
<br />
<style type="text/css">
.form { width:320px; float:left; border:2px solid #ededf7; margin:10px 0px 0px 10px; padding:0px 0px 10px 0px; }

.form_heading { width:300px; float:left; font:15px Arial, Helvetica, sans-serif; color:#666666; 
padding:5px 0px 5px 20px; background:url(images/tab-bg.jpg) 5px repeat-x;  }

.form_field_countuner { width:310px; float:left; background:#f7f7f9; margin:10px 0px 0px 5px; display:inline; 
padding-bottom:5px   }

.thanks_box { width:300px; float:left; font:12px Arial, Helvetica, sans-serif; color:#000; margin-left:5px; line-height:normal; }
.thanks_box span{color:#cc0000;font-size:11px;}

.form_name { width:290px; float:left; font:12px Arial, Helvetica, sans-serif; color:#000; padding:8px 0px 0px 5px; } 
.form_field { width:290px; float:left; font:12px Arial, Helvetica, sans-serif; color:#000; padding:2px 0px 0px 5px; } 
.field_fix { width:190px; float:left; font:12px Arial, Helvetica, sans-serif; color:#000; }
.search_three { padding:4px 10px; float:left; font:12px Arial, Helvetica, sans-serif; display:block; 
text-decoration:none; color:#fff; background:url(images/) repeat-x top left #e94e51;  text-align:center; margin:10px; }
.error {color:#FF0000;}
</style>
<div class="form">

<div class="form_heading">Delete Microsite!</div>
<h3 style="color:#F30;">This Form Auto Close after 15 Seconds</h2>
<div class="form_field_countuner">

<form name="delete" id="contact" action="delete_microsite.php" method="post">
<?php 
$Proj_Id=$_GET['id'];
?>
<table>
<?php 
$result = mysqli_query($con,"SELECT * FROM overview where proj_id='".$Proj_Id."'");
 while($row = mysqli_fetch_array($result))
 {
?>
<tr><th>Microsite Id</th><th>Microsite Name</th></tr>

<tr>

<td><input type="text" size="10" readonly name="id" value="<?php echo $row['proj_id']; ?>"/>
</td>
<td><input type="text" size="10" readonly name="idpn" value="<?php echo $row['project_name']; ?>"/>
</td>
</tr>

</table>

<?php } ?>
<div class="form_name">Be Sure to Delete Microsite</div>

<div class="form_field">

<input type="submit" name="submit" value="Delete" onClick="return confirm('Are you sure you want to Delete this Microsite?')" class="search_three">
</form>
</div>

</div>
<!--<a href="javascript: closepopup(mithilesh)">Close </a> -->
<?php
mysqli_close($con);
?>
</body>
</html>