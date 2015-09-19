<?php include('header.php')?>
<?php
$edseo=$_GET['proj_id'];
//$edsp=$_GET['seltpage'];

$result = mysqli_query($con,"SELECT * FROM seo where proj_id='".$edseo."'") or die(mysqli_error($con));
$rows=mysqli_fetch_array($result) or die(mysqli_error($con));
?>
	<hr class="noscreen" />
		<!-- Content (Right Column) -->
		<div id="content" class="box">
			<!-- Create a new project -->
			
			<h3 class="tit">Manage Microsite</h3>

<div class="tabs box">
				<ul>
					<li><a href="#tab01"><span>Update Seo Details</span></a></li>
					
				</ul>
			</div>
  <!-- /tabs -->

<!-- Tab01 -->
<div id="tab01">
			
				<fieldset>
				<legend>SEO</legend>
                
				<form method="post" action="seo_update.php" onSubmit="" enctype="multipart/form-data">
				<table class="nostyle">
                <tr><td><input type="hidden" name="proj_id" value="<?php echo $rows['proj_id']; ?>" /></td></tr>				
					<tr>
                    
						<td width="120" style="width:120px;">Select Page:</td>
						<td width="367"><select name="selectpage_seo" style="width:150px"  class="input-text" >
					                    <option value="<?php echo $rows['selectpage_seo']; ?>"><?php echo $rows['selectpage_seo']; ?></option>					
					                    <option value="Overview">Overview</option>
				                        <option value="Specifications">Specifications</option>
					                    <option value="Features">Features</option>
                                         <option value="Price List">Price List</option>
                                          <option value="Payment Plan">Payment Plan</option>
                                           <option value="Floor Plan">Floor Plan</option>
                                            <option value="Site Plan">Site Plan</option>
                                             <option value="Location Map">Location Map</option>
                                              <option value="Contact">Contact</option>
                                       
				                        </select>
						</td>
					</tr>
                   <tr>
				<td width="120" style="width:120px;">Title</td>
				<td><input type="text" size="90" name="title" value="<?php echo $rows['title']; ?>" class="input-text"/></td>
				</tr>
                 <tr>
						<td width="120" style="width:120px;">Meta "Description"</td>
						<td>
                      <input type="text" size="90" name="meta_desc" value="<?php echo $rows['meta_desc']; ?>" class="input-text"/>
                        </td>
					</tr>                   
                    <tr>
						<td width="120" style="width:120px;" class="va-top">Meta "Keywords"</td>
						<td>
                  <input type="text" size="90" name="meta_keys" value="<?php echo $rows['meta_keys']; ?>" class="input-text"/>
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
