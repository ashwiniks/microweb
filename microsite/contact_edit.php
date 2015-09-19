<?php include('header.php')?>	
<?php
$edcont=$_GET['proj_id'];
$result = mysqli_query($con,"SELECT * FROM overview where proj_id='".$edcont."'") or die(mysqli_error($con));
$rows=mysqli_fetch_array($result) or die(mysqli_error($con));
?>
	<hr class="noscreen" />
		<!-- Content (Right Column) -->
		<div id="content" class="box">
			<!-- Create a new project -->
			
			<h3 class="tit">Manage Microsite</h3>

<div class="tabs box">
				<ul>
					<li><a href="#tab01"><span>Update Contact</span></a></li>
					
				</ul>
			</div>
  <!-- /tabs -->

<!-- Tab01 -->
<div id="tab01">
			
				<fieldset>
				<legend>Contact</legend>
                
				<form method="post" action="contact_update.php" onSubmit="" enctype="multipart/form-data">
				<table class="nostyle">
                <tr><td><input type="hidden" name="proj_id" value="<?php echo $rows['proj_id']; ?>" /></td></tr>				
					<tr>
					<td class="va-top">Contact Details:</td>
					<td><textarea cols="75" rows="7" name="contact_details"><?php echo $rows['contact_details']; ?></textarea>
                    </td>
					</tr> 
                   <tr>
					<td class="va-top">Contact Number:</td>
					<td><input type="text" size="40"  name="contact" value="<?php echo $rows['cont_number']; ?>" class="input-text"/> </td>
					</tr>
                    <tr>
					<td class="va-top">Email:</td>
					<td><input type="text" size="40"  name="email" value="<?php echo $rows['cont_email']; ?>" class="input-text"/> </td>
					</tr>
                                   
					<tr>
						<td colspan="2" class="t-right"><input type="submit" name="update" class="input-submit" onclick="return confirm('Are you sure you want to update?')" value="Update" /></td>
					</tr>
				</table>
				</form>
			</fieldset>
			
			</div> 
<!-- /tab01 -->

		</div> <!-- /content mithilesh-->
	</div> <!-- /cols -->
	<hr class="noscreen" />
 <script type="text/javascript">
function popUpClosed() {
    window.location.reload();
}
</script>

<?php
mysqli_close($con);
?>

<?php include('footer.php')?>	
