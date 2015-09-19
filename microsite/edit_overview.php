<?php include('header.php')?>	
<?php
$edoverv=$_GET['proj_id'];
$result = mysqli_query($con,"SELECT * FROM overview where proj_id='".$edoverv."'") or die(mysqli_error($con));
$rows=mysqli_fetch_array($result) or die(mysqli_error($con));
?>

<?php /*?><?php $Proj_Id=$_GET['proj_id']; ?>
<?php */?> 
 	<hr class="noscreen" />
		<!-- Content (Right Column) -->
		<div id="content" class="box">
			<!-- Create a new project -->
			
			<h3 class="tit">Manage Microsite</h3>

<div class="tabs box">
				<ul>
					<li><a href="#tab01"><span>Edit Overview</span></a></li>
					
				</ul>
			</div>
  <!-- /tabs -->

<!-- Tab01 -->
<div id="tab01">
			
				<fieldset>
				<legend>Overview</legend>
                
				<form method="post" action="overview_update.php" onSubmit="" enctype="multipart/form-data">
				<table class="nostyle">
                <tr><td><input type="hidden" name="proj_id" value="<?php echo $rows['proj_id']; ?>" /></td></tr>
					
                    <tr>
                    
						<td width="100" style="width:70px;">Builder Name:</td>
						<td>
                  <input type="text" size="40"  name="sel_bname" value="<?php echo $rows['bname']; ?>" style="background:#FCC;" readonly="readonly" class="input-text"/>Not Change
						</td>
					</tr>
                    <tr>
						<td width="100" style="width:70px;">Project Category:</td>
						<td width="600"><select name="proj_category" style="width:150px" class="input-text">
					                    <option value="<?php echo $rows['project_category']; ?>"><?php echo $rows['project_category']; ?></option>					
					                    <option value="Residential">Residential</option>
				                        <option value="Commercial">Commercial</option>
					                    
				                        </select>
						</td>
					</tr>
                    <tr>
                    
			<td width="110">Project Sub Category:</td>
			<td width="600"><select name="psub_category" style="width:150px"  class="input-text">
			<option value="<?php echo $rows['subcategory']; ?>"><?php echo $rows['subcategory']; ?></option>					
			<option value="Residential Plot">Residential Plot</option>
			<option value="Residential House">Residential House</option>
			<option value="Multistorey Apartment">Multistorey Apartment</option>
			<option value="Builder Floor Apartment">Builder Floor Apartment</option>
			<option value="Apartment">Apartment</option>
			<option value="Villa">Villa</option>
			<option value="Holiday Home">Holiday Home</option>
			<option value="Agricultural Land">Agricultural Land</option>
			<option value="Farm House">Farm House</option>
            <option value="Office in IT Park/SEZ">Office in IT Park/SEZ</option>
			<option value="Commercial Land">Commercial Land</option>
			<option value="Commercial Office Space">Commercial Office Space</option>
			<option value="Commercial Shop">Commercial Shop</option>
			<option value="Commercial Showroom">Commercial Showroom</option>
			<option value="Kiosk">Kiosk</option>
			<option value="Hotel">Hotel</option>
			<option value="Hotel Sites">Hotel Sites</option>
			<option value="Guest House">Guest House</option>
			<option value="Business Centre">Business Centre</option>
			<option value="Warehouse/Godown">Warehouse/Godown</option>
			<option value="Industrial Land">Industrial Land</option>
			<option value="Industrial Building">Industrial Building</option>
			<option value="Industrial Shed">Industrial Shed</option>
			<option value="Agricultural Land">Agricultural Land</option>
			<option value="Farm House">Farm House</option>
          
				                        </select>
						</td>
					</tr>
					<tr>
						<td width="100">Project Name:</td>
						<td><input type="text" size="40"  name="proj_name" value="<?php echo $rows['project_name']; ?>" style="background:#FCC;" readonly="readonly" class="input-text"/>Not Change</td>
					</tr>
					<tr>
						<td class="va-top">Overview:</td>
						<td><textarea cols="75" rows="7" name="overview_details"><?php echo $rows['overview']; ?></textarea></td>
					</tr>
					
					<tr>
						<td class="va-top">Address:</td>
						<td>
                      
                        <input type="text" size="40" name="address" value="<?php echo $rows['address']; ?>" class="input-text" />
                        </td>
					</tr>
					<tr>
					<td class="va-top">City/Location:</td>
					<td><input type="text" size="40" name="city" value="<?php echo $rows['city']; ?>" class="input-text" /></td>
					</tr>
                    <tr>
				<td class="va-top">BHK Type:</td>
				<td><input type="text" size="40" name="bhktype" value="<?php echo $rows['bhktype']; ?>" class="input-text" /></td>
				</tr>
                    <tr>
					<td class="va-top">Area Range:</td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="40" name="area_rg" value="<?php echo $rows['area_rg']; ?>" class="input-text" />&nbsp;Sq.Ft.</td>
					</tr>
                    <tr>
					<td class="va-top">Starting Price:</td>
					<td>Rs.<input type="text" size="40" name="str_p" value="<?php echo $rows['str_p']; ?>" class="input-text" />&nbsp;Sq.Ft.</td>
					</tr>
                     <tr>
						<td style="width:70px;">Project Logo</td>
						<td><img src="projects/<?php echo $rows['bname'];?>/<?php echo $rows['project_name'];?>/projectimages/<?php echo $rows['file_name']; ?>" alt="" width="50" height="50" />
             <a href="javascript:Popup('updatelogo_form.php?id=<?php echo $rows['proj_id'];?>')">Change Logo</a></td>
					</tr>
			<tr>
						<td style="width:70px;">Banner Image</td>
<td><img src="projects/<?php echo $rows['bname'];?>/<?php echo $rows['project_name'];?>/projectimages/<?php echo $rows['banner_image']; ?>" alt="" width="50" height="50" />
                <a href="javascript:Popup('uploadbanner_form.php?id=<?php echo $rows['proj_id'];?>')">Change Logo</a></td>
					</tr>		
                    
                    <tr>
						<td style="width:70px;">Builder Logo</td>
						<td><img src="projects/<?php echo $rows['bname'];?>/<?php echo $rows['project_name'];?>/projectimages/<?php echo $rows['builder_logo']; ?>" alt="" width="50" height="50" />
     <a href="javascript:Popup('uploadbuilder_form.php?id=<?php echo $rows['proj_id'];?>')">Change Logo</a></td>
					</tr>
                    
                    
                    
					<tr>
						<td colspan="2" class="t-right"><input type="submit" name="update" class="input-submit" onclick="return confirm('Are you sure you want to update?')" value="Update" /></td>
					</tr>
				</table>
				</form>
			</fieldset>
			
			</div> 
<!-- /tab01 -->

		</div> <!-- /content mithilesh  -->
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
