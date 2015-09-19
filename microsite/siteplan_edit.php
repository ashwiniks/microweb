<?php include('header.php')?>	
<?php
$edsip=$_GET['proj_id'];
$result = mysqli_query($con,"SELECT * FROM overview where proj_id='".$edsip."'") or die(mysqli_error($con));
$rows=mysqli_fetch_array($result) or die(mysqli_error($con));
?>
	<hr class="noscreen" />
		<!-- Content (Right Column) -->
		<div id="content" class="box">
			<!-- Create a new project -->
			
			<h3 class="tit">Manage Microsite</h3>

<div class="tabs box">
				<ul>
					<li><a href="#tab01"><span>Update Site Plan</span></a></li>
					
				</ul>
			</div>
  <!-- /tabs -->

<!-- Tab01 -->
<div id="tab01">
			
				<fieldset>
				<legend>Site Plan</legend>
                
				<form method="post" action="siteplan_update.php" onSubmit="" enctype="multipart/form-data">
				<table class="nostyle">
                <tr><td><input type="hidden" name="proj_id" value="<?php echo $rows['proj_id']; ?>" /></td></tr>				
					
                    <tr>
						<td class="va-top" style="width:150px;">Site Plan Image:</td>
						<td>
             <img src="projects/<?php echo $rows['bname'];?>/<?php echo $rows['project_name'];?>/projectimages/<?php echo $rows['siteplan_img']; ?>" alt="image not found" width="200" height="100" />&nbsp;&nbsp;<a href="javascript:Popup('siteplan_upform.php?id=<?php echo $rows['proj_id'];?>')">Change Image</a></td>
					</tr>
                    <tr>
						<td class="va-top" style="width:150px;">Site Plan Details:</td>
						<td><textarea cols="75" rows="7" name="site_details"><?php echo $rows['siteplan_details']; ?></textarea>
                        </td>
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
