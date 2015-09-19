<?php include('header.php')?>	
<?php 
$Id=$_GET['Id'];
$result = mysqli_query($con,"SELECT * FROM user_info where User_Id='".$Id."'")or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
?>
		<hr class="noscreen" />
		<!-- Content (Right Column) -->
		<div id="content" class="box">
			<!-- Form -->
			<h3 class="tit">ADD USER DETAILS</h3>
			<fieldset>
				<legend>New User</legend>
				<form method="post" action="updateuser.php" onSubmit="return validateuser()" enctype="multipart/form-data">
				<table class="nostyle">
				    <tr>
						<td><input type="hidden" name="id" value="<?php echo $row['User_Id'];?>" /></td>
					</tr>
					<tr>
						<td>First Name:</td>
						<td><input type="text" size="40" name="fname" id="fname" class="input-text" value="<?php echo $row['First_Name'];?>"/></td>
					</tr>
					<tr>
						<td class="va-top">Last Name:</td>
						<td><input type="text" size="40" name="lname" id="lname" class="input-text" value="<?php echo $row['Last_Name'];?>"/></td>
					</tr>
					<tr>
						<td class="va-top">User Name:</td>
						<td><input readonly="readonly" type="text" size="40" name="uname" id="uname" class="input-text" value="<?php echo $row['User_Name'];?>"/></td>
					</tr>
					<tr>
						<td style="width:70px;">Password:</td>
						<td><input type="text" size="40" name="pass" id="pass" class="input-text" value="<?php echo $row['Password'];?>"/></td>
					</tr>
					
					<tr>
						<td style="width:70px;">E-mail:</td>
						<td><input type="text" size="40" name="email" id="email" class="input-text" value="<?php echo $row['Email'];?>"/></td>
					</tr>
					<tr>
						<td colspan="2" class="t-right"><input type="submit" name="Update" class="input-submit" value="Update" /></td>
					</tr>
				</table>
				<?php
				mysqli_close($con);?>
				</form>
			</fieldset>
		</div> <!-- /content -->
	</div> <!-- /cols -->
	<hr class="noscreen" />
	<!-- Footer -->
	<?php include('footer.php'); ?>