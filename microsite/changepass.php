<?php include('header.php')?>
<hr class="noscreen" />
		<!-- Content (Right Column) -->
		<div id="content" class="box">
			<!-- Form -->
			<h3 class="tit">CHANGE PASSWORD</h3>
			<fieldset>
				<legend>Password</legend>
				<form method="post" action="" onSubmit="return validatechangepass()">
				<table class="nostyle">
					<tr>
						<td>Old Passward:</td>
						<td><input type="password" name="old" id="oldpass"  class="input-text"/></td>
					</tr>
					<tr>
						<td class="va-top">New Passward:</td>
						<td><input type="password"  name="new" id="newpass" class="input-text"></td>
					</tr>
					<tr>
						<td class="va-top">Confirm New Passward:</td>
						<td><input type="password" name="confirm" id="conpass" class="input-text"></td>
					</tr>
					<tr>
						<td colspan="2" class="t-right"><input type="submit" value="Change" name="change" class="input-submit" /><input type="reset" class="input-submit" name="reset" /></td>
					</tr>
				</table>
  <?php
if(isset($_POST['change']))
{
$old=$_POST['old'];
$res=mysqli_query($con,"select Password from user_info where Password='".$old."'")or die(mysqli_error($con));
$rows=mysqli_num_rows($res)or die(mysqli_error($con));
if($rows)
{
$Rquery="Update user_info set Password='".$_POST['new']."' where User_Name='".$_SESSION['login_user']."'";
$result=mysqli_query($con,$Rquery) or die(mysqli_error($con));
echo "PASSWORD CHANGE SUCCESSFULLY.";
}
else
{
echo "WRONG OLD PASSWORD";
}
}
mysqli_close($con);
?>

				</form>
</fieldset>
		</div> <!-- /content -->
	</div> <!-- /cols -->
	<hr class="noscreen" />
	<!-- Footer -->
  <script type="text/javascript">
   function validatechangepass()
{
if(document.getElementById('oldpass').value=='')
{
	
		alert("Please Enter Old Password!");
        document.getElementById('oldpass').focus();
	
return false;
}
if(document.getElementById('newpass').value=='')
{	
		alert("Please Enter New Password!");
        document.getElementById('newpass').focus();	
return false;
}
if(document.getElementById('conpass').value=='')
{	
		alert("Please Confirm New Password!");
        document.getElementById('conpass').focus();	
return false;
}
if (newpass.value !== conpass.value) { 
   alert("Your password and confirmation password do not match.");
  document.getElementById('newpass').focus();
  return false;
}
}
</script>
	<?php include('footer.php'); ?>