<?php include('header.php')?>
<?php
$micro_id=$_GET['proj_id'];
$result = mysqli_query($con,"SELECT * FROM overview where proj_id='".$micro_id."'") or die(mysqli_error($con));
$rows=mysqli_fetch_array($result) or die(mysqli_error($con));
$seltemplt=mysqli_query($con,"select bname,project_name from overview where proj_id='".$micro_id."'");
while($secrow=mysqli_fetch_array($seltemplt))
{
	$bna=$secrow['bname'];
	$pna=$secrow['project_name'];
?>

	<hr class="noscreen" />
		<!-- Content (Right Column) -->
		<div id="content" class="box">
			<!-- add details in seelcted project -->
			
            <fieldset>
            <legend>Selected Microsite</legend>
            <table class="nostyle">
            <tr><td>Microsite Id</td>
            <td><input type="text" name="proj_id" readonly="readonly" style="background:#FCC;" class="input-text" value="<?php echo $rows['proj_id']; ?>" /></td>
           <td>Microsite Name</td>
            <td><input type="text" readonly="readonly" name="micro_name" style="background-color:#FCC;" class="input-text" value="<?php echo $rows['project_name']; ?>" /></td>
           <td><a href="add_microsite.php">Change Microsite</a></td>
           
            </tr>
            </table>
            </fieldset>

<div class="tabs box">
				<ul>
					<li><a href="#tab08"><span>Location Map</span></a></li>
					<li><a href="#tab02"><span>Specifications</span></a></li>
                    <li><a href="#tab03"><span>Features</span></a></li>
					<li><a href="#tab04"><span>Price List</span></a></li>
                    <li><a href="#tab05"><span>Payment Plan</span></a></li>
                    <li><a href="#tab06"><span>Floor Plan</span></a></li>
                    <li><a href="#tab07"><span>Site Plan</span></a></li>
                    <li><a href="#tab01"><span>Overview</span></a></li>
                    <li><a href="#tab09"><span>Contact</span></a></li>
                    <li><a href="#tab010"><span>Brochure/Form</span></a></li>
                    <li><a href="#tab011"><span>SEO</span></a></li>
				</ul>
</div>
  <!-- /tabs -->

<!-- Tab01 overview-->
<div id="tab01">
			
				<fieldset>
				<legend>Overview</legend>
                
				<form method="post" action="create_overview.php" onSubmit="return validate()" enctype="multipart/form-data">
				<table class="nostyle">
                <tr><td><input type="hidden" name="proj_id" value="<?php echo $rows['proj_id']; ?>" /></td></tr>
	<tr>
	<td style="width:70px;">Logo Image</td>
    <td><img src="projects/<?php echo $bna;?>/<?php echo $pna; ?>/projectimages/<?php echo $rows['file_name']; ?>" alt="" width="50" height="50" />&nbsp;&nbsp;
              <a href="javascript:Popup('updatelogo_form.php?id=<?php echo $rows['proj_id'];?>')">Upload</a></td></tr>
				<tr>
				<td style="width:70px;">Banner Image</td>
				<td>
                <img src="projects/<?php echo $bna;?>/<?php echo $pna; ?>/projectimages/<?php echo $rows['banner_image']; ?>" alt="" width="50" height="50" />&nbsp;&nbsp;
                <a href="javascript:Popup('uploadbanner_form.php?id=<?php echo $rows['proj_id'];?>')">Upload</a></td></tr>
                <tr>
				<td style="width:70px;">Builder Image</td>
				<td>
                <img src="projects/<?php echo $bna;?>/<?php echo $pna; ?>/projectimages/<?php echo $rows['builder_logo']; ?>" alt="" width="50" height="50" />&nbsp;&nbsp;
                <a href="javascript:Popup('uploadbuilder_form.php?id=<?php echo $rows['proj_id'];?>')">Upload</a></td></tr>	
                                   
                    
                    <tr>
						<td class="va-top">Overview:Details</td>
						<td><textarea  cols="75" rows="7" name="overview_details"></textarea></td>
					</tr>
					
					<tr>
						<td class="va-top">Address:</td>
						<td>
                      
                       <input type="text" size="60" name="address" class="input-text" />
                        </td>
					</tr>
					<tr>
						<td class="va-top">City/Location:</td>
						<td><input type="text" size="40" name="city" class="input-text" /></td>
					</tr>
                    <tr>
						<td class="va-top">BHK Type:</td>
						<td><input type="text" size="40" name="bhktype" value="1,2,3 BHK"  class="input-text" /></td>
					</tr>
                    <tr>
						<td class="va-top">Area Range:</td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="arange"  class="input-text" />&nbsp;Sq.Ft.</td>
					</tr>
                    <tr>
						<td class="va-top">Starting Price:</td>
						<td>Rs.<input type="text" size="30" name="strprice" placeholder="e.g. 25 Lac" class="input-text" />&nbsp;Sq.Ft.</td>
					</tr>
                    
                    
	<tr>
	<td colspan="2" class="t-right"><input type="submit" name="submit" class="input-submit" value="Submit" /><input type="reset" class="input-submit" name="reset" /></td>
					</tr>
				</table>
				</form>
			</fieldset>

			
			</div> 
<!-- /tab01 -->

<!-- Tab02 Specifications-->
<div id="tab02">

				<fieldset>
				<legend>Specifications</legend>
                
				<form method="post" action="add_specification.php" onSubmit="" enctype="multipart/form-data">
				<table class="nostyle">
              <tr><td><input type="hidden" name="proj_id" value="<?php echo $rows['proj_id']; ?>" /></td></tr>
						<tr>
						<td class="va-top">Details:</td>
						<td><textarea cols="75" rows="7" name="specifications"></textarea></td>
					</tr>
						
					<tr>
						<td style="width:70px;">Specifications Image(Optional)</td>
						<td><a href="javascript:Popup('specificationupload_form.php?id=<?php echo $rows['proj_id'];?>')">Upload</a></td>
					</tr>
                                                        
			<tr>
			<td colspan="2" class="t-right"><input type="submit" name="submit" class="input-submit" value="Submit" /><input type="reset" class="input-submit" name="reset" /></td>
					</tr>
				</table>
				</form>
			</fieldset>


			</div> 
<!-- /tab02 -->

<!-- Tab03 Features -->
<div id="tab03">

				<fieldset>
				<legend>Features</legend>
                
				<form method="post" action="feature_add.php" onSubmit="return validate()" enctype="multipart/form-data">
				<table class="nostyle">
			    <tr>
                <td><input type="hidden" name="proj_id" value="<?php echo $rows['proj_id']; ?>" /></td>
                </tr>
	             <tr>
						<td class="va-top">Details:</td>
						<td><textarea cols="75" rows="20" name="feature_details"></textarea></td>
					</tr>						
					<tr>
						<td style="width:70px;">Feature Image:(Optional)</td>
						<td><a href="javascript:Popup('feature_imgupload_form.php?id=<?php echo $rows['proj_id'];?>')">Upload</a></td>
					</tr>
					<tr>
						<td colspan="2" class="t-right"><input type="submit" name="submit" class="input-submit" value="Submit" /><input type="reset" class="input-submit" name="reset" /></td>
					</tr>
				</table>
				</form>
			</fieldset>


			</div> 
  <!-- /tab03 -->
<div id="tab04">

				<fieldset>
				<legend>Price List</legend>
                <form method="post" action="price_add.php" onSubmit="return validate()" enctype="multipart/form-data">
				<table class="nostyle">
				<tr><td><input type="hidden" name="proj_id" value="<?php echo $rows['proj_id']; ?>" /></td></tr>
                <tr>		
						<td class="va-top">Details:</td>
						<td><textarea cols="75" rows="7" name="price_details"></textarea></td>
					</tr>
					<tr>
						<td style="width:70px;">Image /file</td>
						<td>
              <img src="projects/<?php echo $bna;?>/<?php echo $pna; ?>/projectimages/<?php echo $rows['Price_image']; ?>" alt="image not found" width="70" height="70" />&nbsp;&nbsp;
                 <a href="javascript:Popup('pricelist_upform.php?id=<?php echo $rows['proj_id'];?>')">Upload</a>
                        
                        </td>
					</tr>
                    					
					<tr>
						<td colspan="2" class="t-right"><input type="submit" name="submit" class="input-submit" value="Submit" />
                        </td>
					</tr>
				</table>
				</form>
				
			</fieldset>



			</div> 
            
 <!-- /tab04 price list -->
<div id="tab05">

				<fieldset>
				<legend>Payment Plan</legend>
                
				<form method="post" action="paymentplan_add.php" onSubmit="return validate()" enctype="multipart/form-data">
				<table class="nostyle">
				<tr><td><input type="hidden" name="proj_id" value="<?php echo $rows['proj_id']; ?>" /></td></tr>
                <tr>
						<td class="va-top">Details:</td>
						<td><textarea cols="75" rows="7" name="paymentplan_details"></textarea></td>
					</tr>
					<tr>
						<td style="width:120px;">Payment Plan Image/Pdf:(Optional)</td>
						<td>
                        <?php echo $rows['paymentplan_file']; ?>&nbsp;&nbsp;
                        <a href="javascript:Popup('paymentplan_upform.php?id=<?php echo $rows['proj_id'];?>')">Upload</a>
                        
                        </td>
					</tr>
                    					
					<tr>
						<td colspan="2" class="t-right"><input type="submit" name="submit" class="input-submit" value="Submit" /><input type="reset" class="input-submit" name="reset" /></td>
					</tr>
				</table>
				</form>
			</fieldset>



</div>
 <!-- /tab05 Payment Plan -->
 
<div id="tab06">

				<fieldset>
				<legend>Floor Plan</legend>
                
				<form method="post" action="" onSubmit="" enctype="multipart/form-data">
				<table class="nostyle">
                <tr><td style="width:100px;"></td><td><h3>Upload Max Six Image</h3></td></tr>
			    <tr><td><input type="hidden" name="proj_id" value="<?php echo $rows['proj_id']; ?>" /></td></tr>
               
				<tr>
						<td style="width:100px;">Floor Plan 1</td>
						<td>
                        <img src="projects/<?php echo $bna;?>/<?php echo $pna; ?>/projectimages/<?php echo $rows['floor1']; ?>" alt="image not found" width="70" height="70" />&nbsp;&nbsp;
                 <a href="javascript:Popup('floor1_upform.php?id=<?php echo $rows['proj_id'];?>')">Upload</a></td>
					</tr>
                <tr>
						<td style="width:100px;">Floor Plan 2</td>
						<td>
                        <img src="projects/<?php echo $bna;?>/<?php echo $pna; ?>/projectimages/<?php echo $rows['floor2']; ?>" alt="image not found" width="70" height="70" />&nbsp;&nbsp;
                <a href="javascript:Popup('floor2_upform.php?id=<?php echo $rows['proj_id'];?>')">Upload</a></td>
					</tr>
                    <tr>
						<td style="width:100px;">Floor Plan 3</td>
						<td>
                        <img src="projects/<?php echo $bna;?>/<?php echo $pna; ?>/projectimages/<?php echo $rows['floor3']; ?>" alt="image not found" width="70" height="70" />&nbsp;&nbsp;
                        <a href="javascript:Popup('floor3_upform.php?id=<?php echo $rows['proj_id'];?>')">Upload</a></td>
					</tr>
                    <tr>
						<td style="width:100px;">Floor Plan 4</td>
						<td>
                        <img src="projects/<?php echo $bna;?>/<?php echo $pna; ?>/projectimages/<?php echo $rows['floor4']; ?>" alt="image not found" width="70" height="70" />&nbsp;&nbsp;
      <a href="javascript:Popup('floor4_upform.php?id=<?php echo $rows['proj_id'];?>')">Upload</a></td>
					</tr>
                    			   
					<tr>
					<td colspan="2" class="t-right"><input type="submit" name="files" class="input-submit" onclick="alert('Floor Plan Submited!')" value="Submit" /></td>
					</tr>
				</table>
				</form>

			</fieldset>

</div> <!-- /tab06 floor plan -->
<div id="tab07">

				<fieldset>
				<legend>Site Plan</legend>
                
				<form method="post" action="siteplan_add.php" onSubmit="return validate()" enctype="multipart/form-data">
				<table class="nostyle">
				<tr><td><input type="hidden" name="proj_id" value="<?php echo $rows['proj_id']; ?>" /></td></tr>
                <tr>		
						<td class="va-top">Details:</td>
						<td><textarea cols="75" rows="7" name="site_details"></textarea></td>
					</tr>
					<tr>
						<td style="width:70px;">Site Plan Image</td>
						<td>
              <img src="projects/<?php echo $bna;?>/<?php echo $pna; ?>/projectimages/<?php echo $rows['siteplan_img']; ?>" alt="image not found" width="70" height="70" />&nbsp;&nbsp;
                 <a href="javascript:Popup('siteplan_upform.php?id=<?php echo $rows['proj_id'];?>')">Upload</a>
                        
                        </td>
					</tr>
                    					
					<tr>
						<td colspan="2" class="t-right"><input type="submit" name="submit" class="input-submit" value="Submit" />
                        </td>
					</tr>
				</table>
				</form>
			</fieldset>



			</div> 
  <!-- /tab07 /siteplan -->
<div id="tab08">

				<fieldset>
				<legend>Location Map</legend>
                
				<form name="myForm" method="post" action="locationmap_add.php" onSubmit="return validatelocation()" enctype="multipart/form-data">
		<table class="nostyle">
		<tr><td><input type="hidden" name="proj_id" value="<?php echo $rows['proj_id']; ?>" /></td></tr>	
                     
		<tr>
		<td style="width:70px;">Location Map</td>
		<td>
         <img src="projects/<?php echo $bna;?>/<?php echo $pna; ?>/projectimages/<?php echo $rows['locationmap_img']; ?>" alt="image not found" width="70" height="70" />&nbsp;&nbsp;
        <a href="javascript:Popup('locationmap_upform.php?id=<?php echo $rows['proj_id'];?>')">Upload</a>
        
        </td></tr>
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
		<td colspan="2" class="t-right"><input type="submit" name="submit" class="input-submit" value="Submit" /><input type="reset" class="input-submit" name="reset" /></td>
					</tr>
				</table>
				</form>
			</fieldset>



			</div>
 <!-- /tab08 location map -->

<div id="tab09">

				<fieldset>
				<legend>Contact</legend>
                
				<form method="post" action="contact_add.php" onSubmit="return validate()" enctype="multipart/form-data">
				<table class="nostyle">
                	<tr><td><input type="hidden" name="proj_id" value="<?php echo $rows['proj_id']; ?>" /></td></tr>
						<tr>
						<td class="va-top">Details:</td>
					<td><textarea cols="75" rows="7" name="contact_details"></textarea></td>
					</tr>
                    <tr>
						<td class="va-top">Contact Number:</td>
						<td>+91<input type="text" size="40" name="contact" placeholder="phone number" class="input-text" /> </td>
					</tr>
					 <tr>
						<td class="va-top">Email:</td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="40" name="email" placeholder="iemail id" class="input-text" /></td>
					</tr>                
					<tr>
						<td colspan="2" class="t-right"><input type="submit" name="submit" class="input-submit" value="Submit" /><input type="reset" class="input-submit" name="reset" /></td>
					</tr>
				</table>
				</form>
			</fieldset>

			</div>
<!-- /tab09 contact -->
<div id="tab010">

				<fieldset>
				<legend>Brochures/Form</legend>
                
				<form method="post" action="" onSubmit="" enctype="multipart/form-data">
				<table class="nostyle">
						
				<tr><td><input type="hidden" name="proj_id" value="<?php echo $rows['proj_id']; ?>" /></td></tr>
               
				<tr>
						<td style="width:100px;">Brochures</td>
	<td>
    <?php echo $rows['brochures_file']; ?>&nbsp;&nbsp;
    <a href="javascript:Popup('brochures_upform.php?id=<?php echo $rows['proj_id'];?>')">Upload Brochures</a>
    
    </td>
					</tr>
                <tr>
		<td style="width:100px;">Application Form</td>
<td> <?php echo $rows['app_file']; ?>&nbsp;&nbsp;
<a href="javascript:Popup('appform_upform.php?id=<?php echo $rows['proj_id'];?>')">Upload Application Form</a></td>
			</tr>
						
				<tr>
<td colspan="2" class="t-right"><input type="submit" name="submit" class="input-submit" onclick="alert('Brochures/Form Submited!')" value="Submit" /></td>
					</tr>
				</table>
				</form>
			</fieldset>

			</div>
            <?php } ?>
   <!-- /tab010 /Brochure -->
<div id="tab011">

				<fieldset>
				<legend>SEO</legend>
                
				<form method="post" action="seo_add.php" onSubmit="return validate()" enctype="multipart/form-data" >
				<table class="nostyle">
                <tr><td><input type="hidden" name="proj_id" value="<?php echo $rows['proj_id']; ?>" /></td></tr>
                
                <tr><td><input type="hidden" name="prname" value="<?php echo $rows['project_name']; ?>" /></td></tr>
                <tr>
						<td width="88" style="width:70px;">Select Page</td>
						<td width="467"><select name="select_page" style="width:150px" class="input-text">
					                    <option>------Select------</option>					
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
						<td width="120px">Title</td>
						<td><input type="text" size="90" name="title" class="input-text"/></td>
					</tr>
					<tr>
						<td width="120px">Meta "Description"</td>
						<td>
                         <input type="text" size="90" name="meta_desc" class="input-text"/>
                        </td>
					</tr>                   
                    <tr>
						<td  width="120px" class="va-top">Meta "Keywords"</td>
						<td>
                         <input type="text" size="90" name="meta_keys" class="input-text"/>
                        </td>
					</tr>
                    					
					<tr>
						<td colspan="2" class="t-right"><input type="submit" name="submit" class="input-submit" value="Submit" /><input type="reset" class="input-submit" name="reset" /></td>
					</tr>
				</table>
				</form>
			</fieldset>

			</div>
  <!-- /tab011 /seo-->
			
</div> <!-- /content -->
	</div> <!-- /cols -->
	<hr class="noscreen" />
	<script type="text/javascript">
function popUpClosed() {
    window.location.reload();
}
</script>
<?php include('footer.php')?>	
