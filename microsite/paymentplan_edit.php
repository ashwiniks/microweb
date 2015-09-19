<?php include('header.php')?>	
<?php
$edppl=$_GET['proj_id'];
$result = mysqli_query($con,"SELECT * FROM overview where proj_id='".$edppl."'") or die(mysqli_error($con));
$rows=mysqli_fetch_array($result) or die(mysqli_error($con));
?>
	<hr class="noscreen" />
		<!-- Content (Right Column) -->
		<div id="content" class="box">
			<!-- Create a new project -->
			
			<h3 class="tit">Manage Microsite</h3>

<div class="tabs box">
				<ul>
					<li><a href="#tab01"><span>Update Payment Plan</span></a></li>
					
				</ul>
			</div>
  <!-- /tabs -->

<!-- Tab01 -->
<div id="tab01">
			
				<fieldset>
				<legend>Payment Plan</legend>
                
				<form method="post" action="paymentplan_update.php" onSubmit="" enctype="multipart/form-data">
				<table class="nostyle">
                <tr><td><input type="hidden" name="proj_id" value="<?php echo $rows['proj_id']; ?>" /></td></tr>				
					
                   <tr>
						<td style="width:70px;">Payment Plan File/Image:</td>
						<td><?php echo $rows['paymentplan_file']; ?>&nbsp;&nbsp;<a href="javascript:Popup('paymentplan_upform.php?id=<?php echo $rows['proj_id'];?>')">Change/Upload</a></td>
					</tr>
                    <tr>
						<td class="va-top">Payment Plan Details:</td>
						<td><textarea cols="75" rows="7" name="payplan_details"><?php echo $rows['paymentplan_details']; ?></textarea></td>
					</tr>                
					<tr>
						<td colspan="2" class="t-right"><input type="submit" name="update" class="input-submit" onclick="return confirm('Are you sure you want to update?')" value="Update" /></td>
					</tr>
				</table>
				</form>
			</fieldset>
			
			</div> 
<!-- /tab01 -->

		</div> <!-- /content -->
	</div> <!-- /cols -->
	<hr class="noscreen" />

<?php
mysqli_close($con);
?>
<script type="text/javascript">
function popUpClosed() {
    window.location.reload();
}
</script>
<?php include('footer.php')?>	
