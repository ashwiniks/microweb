<?php include('header.php')?>	
<?php
$edlom=$_GET['proj_id'];
$result = mysqli_query($con,"SELECT * FROM overview where proj_id='".$edlom."'") or die(mysqli_error($con));
$rows=mysqli_fetch_array($result) or die(mysqli_error($con));
?>
	<hr class="noscreen" />
		<!-- Content (Right Column) -->
		<div id="content" class="box">
			<!-- Create a new project -->
<div class="tabs box">
				<ul>
					<li><a href="#tab01"><span>Update Location Map</span></a></li>
					
				</ul>
			</div>
  <!-- /tabs -->

<!-- Tab01 -->
<div id="tab01">
			
				<fieldset>
				<legend>Location Map</legend>
                
				<form method="post" action="locationmap_update.php" onSubmit="" enctype="multipart/form-data">
				<table class="nostyle">
                <tr><td><input type="hidden" name="proj_id" value="<?php echo $rows['proj_id']; ?>" /></td></tr>				
				<tr>
				<td class="va-top" style="width:100px;">Location Map</td>
				<td><img src="projects/<?php echo $rows['bname'];?>/<?php echo $rows['project_name'];?>/projectimages/<?php echo $rows['locationmap_img']; ?>" alt="image not found" width="200" height="100" />&nbsp;&nbsp;
                <a href="javascript:Popup('locationmap_upform.php?id=<?php echo $rows['proj_id'];?>')">Change Image</a></td></tr> 
                <tr>
                <td colspan="3"><div id="map_canvas" style="width:600px; height:400px; border:solid black 1px;"></div></td>
                </tr>
                <tr>
						<td>Longitude:</td>
						<td><input type="text" size="40" id="longitude" name="longitude" readonly="readonly" class="input-text"/></td>
                        <td colspan="2" class="t-right">&nbsp;</td>
				</tr>
                 <tr>
						<td>Latitude:</td>
						<td><input type="text" size="40" id="latitude" name="latitude" readonly="readonly" class="input-text"/></td>
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
