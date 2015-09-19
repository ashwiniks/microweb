<?php include('header.php')?>	

		<hr class="noscreen" />
		<!-- Content (Right Column) -->
		<div id="content" class="box">
			<!-- Form -->
			<h3 class="tit">Create Microsite</h3>
			<fieldset>
				<legend>Microsite</legend>
				<form method="post" action="create_msite.php" onSubmit="return validate()" enctype="multipart/form-data">
				
 <fieldset>
 <legend>Project Category</legend>
 
 <input type='radio' name='proj_category' value='Residential' onclick="toggleSelect('Residential');" checked="checked" />
 <label for='reg'>Residential</label>

<input type='radio' name='proj_category' value='Commercial' onclick="toggleSelect('Commercial');" />
<label for='com'>Commercial</label>
<br />
<select name="rpsub_category" style="width:255px" id='reg' class="input-text">
<option value="0">----Select----</option>				
<option value="Residential Plot">Residential Plot</option>
<option value="Residential House">Residential House</option>
<option value="Multistorey Apartment">Multistorey Apartment</option>
<option value="Builder Floor Apartment">Builder Floor Apartment</option>
<option value="Apartment">Apartment</option>
<option value="Villa">Villa</option>
<option value="Holiday Home">Holiday Home</option>
<option value="Agricultural Land">Agricultural Land</option>
<option value="Farm House">Farm House</option>
</select>

<select name="cpsub_category" style="width:255px; display:none;" id='com' class="input-text">
<option value="1">----Select----</option>		
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
     
 </fieldset>
      <table class="nostyle">                  
<?php 
$sectquery=mysqli_query($con,"select distinct bname from overview") or die(mysqli_error($con));
?>             
<tr>
<td width="100" style="width:120px;">Builder Name:</td>
<td width="467"><select name="bulder_name" style="width:150px" id="mbn" onchange='CheckColors(this.value);' class="input-text">
			    <option value="----Select----">----Select----</option>
       <?php
				while($rowbn=mysqli_fetch_array($sectquery))
				{
				$bname=$rowbn['bname'];
				
				if($bname!=="")
				{?>
                <option value="<?php echo $bname ;?>"><?php echo $bname;?></option>
			<?php
				}
				}
				?>
                <option value="Others">Others</option>
               
				</select>
                <input type="text" name="ibulder_name" id="bulder_name" class="input-text" style='display:none;'/>
                                                                               
	</td>
	</tr>
	<tr>
						<td>Project Name:</td>
						<td><input type="text" size="26" name="proj_name" id="mpn" class="input-text"/></td>
	</tr>
			
	<tr>
			<td colspan="3" class="t-center"><input type="submit" name="submit" class="input-submit" value="Create" />
            </td>
	</tr>	

	</table>
				</form>
			</fieldset>
            <h3 class="tit">Microsite List</h3>
 <fieldset>

 <form method="post" id="suggestSearch" action="smsite.php" onSubmit="">
 
 <table class="tit">
        <tr>
           <td width="180" style="width:180px;">
           <!--<input type="text"  name="search" class="input-text" placeholder="Enter Microsite Id/Name" /> -->
           <input type="text" id="dbTxt" name="txtsearch" alt="Search Criteria" class="input-text" placeholder="Enter Project Name" onKeyUp="searchSuggest();" autocomplete="off"/>
           <div id="layer1"></div>
           </td>
          <td> <input type="submit" name="submit" value="Search" /></td>
       </tr>
 </table>
 
 </fieldset>
<fieldset>
<div style="overflow:scroll; width:400; height:200;">
 <?php 
	 $query="Select * from overview order by proj_id asc";
     $result=mysqli_query($con,$query) or die('Error, Data not Found : '.mysqli_error($con)); 
?>

				<legend>Add Details in Microsite</legend>
			
				<table class="tit">
                <tr>              
                <th width="100" style="width:100px;">Microsite Id</th>
                <th width="180" style="width:180px;">Builder Name</th>
                <th width="180" style="width:180px;">Mircosite Name</th>
                 <th width="100" style="width:100px;">Status</th>
                 <th width="100" style="width:100px;">Add Details</th>
                 <th width="100" style="width:100px;">Add More</th>
				 <th width="100" style="width:100px;">View Offline</th>
				 <th width="100" style="width:100px;">Manage Site</th>
                </tr>
 <?php
 while($rows=mysqli_fetch_array($result))
{
$query2="Select * from seo where proj_id='".$rows['proj_id']."'";
$result2=mysqli_query($con,$query) or die('Error, Data not Found : ' . mysqli_error($con)); 

?>
                <tr>                
                <td width="100" style="width:100px;"><?php echo $rows['proj_id']; ?></td>
                <td width="150" style="width:150px;"><?php echo $rows['bname']; ?></td>
                 <td width="150" style="width:150px;"><?php echo $rows['project_name']; ?></td>
                
                <td width="100" style="width:180px;">
        <?php 
		if(($rows['overview'] and $rows['file_name'] and $rows['builder_logo'] and $rows['banner_image'] and $rows['address'] and $rows['city'] and $rows['feature_details'] and $rows['speci_details'] and $rows['paymentplan_details'] and $rows['floor1'] and $rows['bhktype'] and $rows['area_rg'] and $rows['str_p'] and $rows['cont_number'] and $rows['cont_email']) =="")
				{
					echo "Some Details Empty";
				}
                
				else
				{
				echo "Details Added";
				}
                ?>
                </td>
                <td width="100" style="width:100px;">
                <?php
				if(($rows['overview'] and $rows['file_name'] and $rows['builder_logo'] and $rows['banner_image'] and $rows['address'] and $rows['city'] and $rows['feature_details'] and $rows['speci_details'] and $rows['paymentplan_details'] and $rows['floor1'] and $rows['bhktype'] and $rows['area_rg'] and $rows['str_p'] and $rows['cont_number'] and $rows['cont_email']) =="")
				{ ?>
                <a href="home.php?proj_id=<?php echo $rows['proj_id']; ?>">Add Details</a>
                <?php }
				else
				{
				 ?>
                 <a href="selected_site.php?proj_id=<?php echo $rows['proj_id']; ?>">View Details</a>
                 <?php } ?>
          </td>
          <td><a href="home.php?proj_id=<?php echo $rows['proj_id']; ?>">Add More</a></td>
           <td><a href="projects/<?php echo $rows['bname']; ?>/<?php echo $rows['project_name']; ?>" target="_blank">View Offline</a></td> 
		    <td>
			<?php 
			if($rows['project_status']>0)
			{
			?>
			<a href="project_status?proj_id=<?php echo $rows['proj_id']; ?>"  onclick="return confirm('Are you sure you want to inactive project?')">Active</a>
			<?php 
			}
			else
			{
			?>
		   <a href="project_status?proj_id=<?php echo $rows['proj_id']; ?>"  onclick="return confirm('Are you sure you want to activate project?')">Inactive</a>
			<?php
			} 
			?>
			</a></td>    
                </tr>
                 <?php }  ?> 
				</table>
				</form>
               </div>
			</fieldset>
		</div> <!-- /content mithilesh -->
	</div> <!-- /cols -->
	<hr class="noscreen" />
	
<script type="text/javascript">
function popUpClosed() {
    window.location.reload();
}
</script>
<?php include('footer.php')?>	
