<?php include('header.php')?>	
<?php
$micro_id=$_GET['proj_id'];
$result = mysqli_query($con,"SELECT * FROM overview where proj_id='".$micro_id."'") or die(mysqli_error($con));
//$rows=mysqli_fetch_array($result) or die(mysqli_error($con));
 while($row = mysqli_fetch_array($result))
  { 
  $proj_id=$row['proj_id'];
  $bname=$row['bname']; 
  $pcategory=$row['project_category'];
  $psubcategory=$row['subcategory'];
  $projname=$row['project_name'];
  $overv=$row['overview'];
  $adds=$row['address'];
  $city=$row['city'];
  $bhktype=$row['bhktype'];
  $area_rg=$row['area_rg'];
  $str_p=$row['str_p'];
  $logo=$row['file_name'];
  $bimg=$row['banner_image'];
  $blogo=$row['builder_logo'];
  $speci_details=$row['speci_details'];
  $speci_img=$row['speci_image'];
  $feat_details=$row['feature_details'];
  $feat_img=$row['feature_image'];
  $price_details=$row['Price_details'];
  $price_img=$row['Price_image'];
  $area_rg=$row['area_rg'];
  $str_price=$row['str_p'];
  $pplan_details=$row['paymentplan_details'];
  $pplan_file=$row['paymentplan_file'];
  $floor1=$row['floor1'];
  $floor2=$row['floor2'];
  $floor3=$row['floor3'];
  $floor4=$row['floor4'];
  $sitep_details=$row['siteplan_details'];
  $sitep_img=$row['siteplan_img'];
  $lom_img=$row['locationmap_img'];
  $longi=$row['longitude'];
  $lati=$row['latitude'];
  $cont_detils=$row['contact_details'];
  $cont_num=$row['cont_number'];
  $cont_email=$row['cont_email'];
  $bro_file=$row['brochures_file'];
  $app_file=$row['app_file'];
?>

	<hr class="noscreen" />
		<!-- Content (Right Column) -->
		<div id="content" class="box">
			<!-- Create a new project -->
			
	<fieldset>
    <legend>Selected Microsite:Details</legend>
            <table class="nostyle">
            <tr><td>Microsite Id</td>
            <td><input type="text" name="proj_id" readonly="readonly" style="background:#FCC;" class="input-text" value="<?php echo $row['proj_id']; ?>" /></td>
           <td>Microsite Name</td>
            <td><input type="text" readonly="readonly" name="micro_name" style="background-color:#FCC;" class="input-text" value="<?php echo $row['project_name']; ?>" /></td>           
            </tr>
            </table>
            </fieldset>

<div class="tabs box">
				<ul>
					<li><a href="#tab01"><span>Overview</span></a></li>
					<li><a href="#tab02"><span>Specifications</span></a></li>
                    <li><a href="#tab03"><span>Features</span></a></li>
					<li><a href="#tab04"><span>Price List</span></a></li>
                    <li><a href="#tab05"><span>Payment Plan</span></a></li>
                    <li><a href="#tab06"><span>Floor Plan</span></a></li>
                     <li><a href="#tab07"><span>Site Plan</span></a></li>
                    <li><a href="#tab08"><span>Location Map</span></a></li>
                     <li><a href="#tab09"><span>Contact</span></a></li>
                     <li><a href="#tab010"><span>Brochure/Form</span></a></li>
                     <li><a href="#tab011"><span>SEO</span></a></li>
				</ul>
</div>
  <!-- /tabs -->
 
<!-- Tab01-Overview -->
<div id="tab01">
		<fieldset>
				<legend>Update Overview</legend>
				<!-- Table (TABLE) -->
				<div style="overflow:scroll; width:1050px; height:350px;">
			<table>
				<tr>
                   <th>Microsite Id</th>
                    <th>Builder Name</th>
				   <th>Category</th>
                     <th>Sub Category</th>
				    <th>Project Name</th>
				    <th>Overview Details</th>
					<th>Address</th>
					<th>City</th>
                    <th>BHK Type</th>
                    <th>Area Range</th>
                    <th>Starting Price</th>
					<th>Logo Image</th>
					<th>Banner Image</th>
					<th>Builder Image</th>	
					<th>Edit</th>
                   	
				</tr>				
				<tr>
                <td><?php echo $proj_id; ?></td>
                 <td><?php echo $bname; ?></td>
                <td><?php echo $pcategory; ?></td>
                 <td><?php echo $psubcategory; ?></td>
                <td><?php echo $projname; ?></td>
                <td><?php echo $overv; ?></td>
                <td><?php echo $adds; ?></td>
                <td><?php echo $city; ?></td>
                <td><?php echo $bhktype; ?></td>
                 <td><?php echo $area_rg; ?></td>
                  <td><?php echo $str_price; ?></td>
                <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php
				if($logo)
				{
					echo $logo;
				}
				else
				{
					echo "N/A";
				}
				  
				 ?>" alt="N/A" width="70" height="70"  />
                </td>
    <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php 
	             if($bimg)
				{
					echo $bimg;
				}
				else
				{
					echo "N/A";
				}
	
	?>" alt="N/A" width="70" height="70"  />
                </td>
                <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php
				 if($blogo)
				{
					echo $blogo;
				}
				else
				{
					echo "N/A";
				}
				
				 ?>" alt="N/A" width="70" height="70"  />
               
                </td>
                <td>
<a href="edit_overview.php?proj_id=<?php echo $proj_id; ?>"><button>Edit Data</button></a></td>                
                
                </tr>
				
                </table>
							
			</div>
			</fieldset>					
	
</div> 
  
<!-- /tab01 -->

<!-- Tab02-Specification -->
<div id="tab02">
<fieldset>
				<legend>View Specification</legend>
				<!-- Table (TABLE) -->
				<div style="overflow:scroll; width:1050px; height:400px;">
			<table>
				<tr>
                   
				    <th>Specification Details</th>
					<th>Specification Image</th>
					<th>Edit</th>		
				</tr>				
				<tr>
                
           <td><?php echo $speci_details; ?></td>
                
           <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php
		   if($speci_img)
				{
					echo $speci_img;
				}
				else
				{
					echo "N/A";
				}
			
			?>" alt="N/A" width="70" height="70" />
           </td>
               
           <td>
<a href="specification_edit.php?proj_id=<?php echo $row['proj_id']; ?>"><button>Edit Data</button></a></td>
                
           </tr>
				
           </table>
				
			
         </div>
			</fieldset>	
							
</div>
            
  <!-- /tab02 -->

<!-- Tab03-Features -->
<div id="tab03">
<fieldset>
				<legend>View Features</legend>
				<!-- Table (TABLE) -->
				<div style="overflow:scroll; width:1050px; height:400px;">
			<table>
				<tr>
                   
				    <th>Features Details</th>
					<th>Features Image</th>
					<th>Edit</th>		
				</tr>				
				<tr>
                
                <td><?php echo $feat_details; ?></td>
                
                <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php
				 if($feat_img)
				{
					echo $feat_img;
				}
				else
				{
					echo "N/A";
				}
				 ?>" alt="N/A" width="70" height="70"  />
                </td>
               
                <td>
<a href="feature_edit.php?proj_id=<?php echo $row['proj_id']; ?>"><button>Edit Data</button></a></td>
                
                
                </tr>
				
                </table>
			</div>
			</fieldset>					
</div> 
  <!-- /tab03 -->
<div id="tab04">
<?php 
$vpl=mysqli_query($con,"select * from overview where proj_id='".$proj_id."'") or die(mysqli_connect($con));

?>
<fieldset>
				<legend>View Price List</legend>
				<!-- Table (TABLE) -->
				<div style="overflow:scroll; width:900px; height:400px;">
			<table>
            <?php  if(mysqli_num_rows($vpl)>0) { ?>
				<tr> 
                <th>Price_details</th>
                <th>Price image</th>                 				
				<th>Edit</th>		
				</tr>	
               		
			<?php
				
			while($plrow=mysqli_fetch_array($vpl))
			{ 
			$priceimg=$plrow['Price_image'];
			?>			
                <tr>                
                <td><?php echo $plrow['Price_details']; ?></td>
				<td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php
				 if($priceimg)
				{
					echo $priceimg;
				}
				else
				{
					echo "N/A";
				}
				 ?>" alt="N/A" width="70" height="70"  />
                </td>
                               
                <td><a href="price_edit.php?proj_id=<?php echo $row['proj_id']; ?>"><button>Edit Data</button></a></td>
                </tr>
	<?php }
 }
 else {
	 ?>
         <h3 align="center">
     <?php echo "Record Not Found!  " ?>

<a href="home.php?proj_id=<?php echo $row['proj_id']; ?>"><button>Add Data</button></a>
 <?php }
	
	?></h3>         
          
                </table>
				
			
			</div>
			</fieldset>					

</div> 
<!-- /tab04 price list -->
<div id="tab05">
<fieldset>
				<legend>View Payment Plan</legend>
				<!-- Table (TABLE) -->
				<div style="overflow:scroll; width:1050px; height:400px;">
			<table>
				<tr>
                   
				    <th>Payment Plan Details</th>
					<th>Image/File</th>
					<th>Edit</th>		
				</tr>				
				<tr>
                
                <td><?php echo $pplan_details; ?></td>
                
                <td><?php echo $pplan_file; ?>
                </td>
               
                <td><a href="paymentplan_edit.php?proj_id=<?php echo $row['proj_id']; ?>"><button>Edit Data</button></a></td>
                
                
                </tr>
				
                </table>
				
			
			</div>
			</fieldset>					

</div>
 <!-- /tab05 -->
<div id="tab06">
<fieldset>
				<legend>View floor Plan</legend>
				<!-- Table (TABLE) -->
				<div style="overflow:scroll; width:1050; height:400px;">
			<table class="tit">
				<tr>
                   
				    <th>Floor Plan-1</th>
					<th>Floor Plan-2</th>
                    <th>Floor Plan-3</th>
                    <th>Floor Plan-4</th>
                    
						
				</tr>				
				<tr>
                
                <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php echo $floor1; ?>" alt="image not found" width="70" height="70" /><br />
             <a href="javascript:Popup('floor1_upform.php?id=<?php echo $row['proj_id'];?>')">Upload/Change</a>
                </td>
                
                <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php echo $floor2; ?>" alt="image not found" width="70" height="70" /><br />
           <a href="javascript:Popup('floor2_upform.php?id=<?php echo $row['proj_id'];?>')"> Upload/Change</a>
                </td>
                <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php echo $floor3; ?>" alt="image not found" width="70" height="70" /><br />
            <a href="javascript:Popup('floor3_upform.php?id=<?php echo $row['proj_id'];?>')">Upload/Change</a>
                </td>
                <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php echo $floor4; ?>" alt="image not found" width="70" height="70" /><br />
                
<a href="javascript:Popup('floor4_upform.php?id=<?php echo $row['proj_id'];?>')">Upload/Change</a>
                </td>
                </tr>				
                </table>
<script type="text/javascript">
function popUpClosed() {
    window.location.reload();
}
</script>
			
			</div>
			</fieldset>		
				

			</div>
 <!-- /tab06 floor plan-->
<div id="tab07">
<fieldset>
				<legend>View Site Plan</legend>
				<!-- Table (TABLE) -->
				<div style="overflow:scroll; width:1050px; height:400px;">
			<table>
				<tr>
                   
				    <th>Site Plan Details</th>
					<th>Site Plan Image</th>
					<th>Edit</th>		
				</tr>				
				<tr>
                
                <td><?php echo $sitep_details; ?></td>
                
                <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php echo  $sitep_img; ?>" alt="Image not found" width="70" height="70"  />
                </td>
               
                <td><a href="siteplan_edit.php?proj_id=<?php echo $row['proj_id']; ?>"><button>Edit Data</button></a></td>
                
                
                </tr>
				
                </table>
				
			
			</div>
			</fieldset>					

</div>
   <!-- /tab07 /site plan -->
<div id="tab08">
<fieldset>
				<legend>View Location Map</legend>
				<!-- Table (TABLE) -->
				<div style="overflow:scroll; width:1050px; height:400px;">
			<table class="tit">
				<tr>
                   
				    <th>Location Map</th>
					<th>Longitude</th>
                    <th>Latitude</th>
					<th>Edit</th>		
				</tr>				
				<tr>               
               
        <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php echo  $lom_img; ?>" alt="Image not found" width="70" height="70"  />
        </td>
                <td><?php echo $longi; ?></td>
                <td><?php echo $lati; ?></td>
                
                <td>
<a href="locationmap_edit.php?proj_id=<?php echo $row['proj_id']; ?>"><button>Edit Data</button></a></td>
                               
                </tr>
				
                </table>				
			
			</div>
			</fieldset>					
</div>
 <!-- /tab08 location map -->

<div id="tab09">
<fieldset>
				<legend>Contact</legend>
				<!-- Table (TABLE) -->
				<div style="overflow:scroll; width:1050px; height:400px;">
			<table>
				<tr>
                   
				    <th>Contact Details</th>
					<th>Contact Number</th>
                    <th>Contact Email</th>
					<th>Edit</th>		
				</tr>				
				<tr>
                
                <td><?php echo $cont_detils; ?></td>
                <td><?php echo $cont_num; ?></td>
                <td><?php echo $cont_email; ?></td>
                
               
                <td>
<a href="contact_edit.php?proj_id=<?php echo $row['proj_id']; ?>"><button>Edit Data</button></a></td>
                
                
                </tr>
				
                </table>
				
			
			</div>
			</fieldset>		
				
</div> 
 <!-- /tab09 contact -->
<div id="tab010">
<fieldset>
				<legend>View Brochures/Application Form</legend>
				<!-- Table (TABLE) -->
				<div style="overflow:scroll; width:1050px; height:300px;">
			<table>
				<tr>
                   
				    <th>Brochures File</th>
					<th>Application Form</th>
                    
				</tr>				
				<tr>
                
           <td><?php
		   if($bro_file)
		   {
			   echo $bro_file;
		   }
		   else
		   {
			 echo "N/A";
		   }			
			 ?><br />
              
<a href="javascript:Popup('brochures_upform.php?id=<?php echo $row['proj_id'];?>')">Upload/Change</a>
              </td>
                
             <td><?php
			 if($app_file)
			 {
				 echo $app_file;
			 }
			 else
			 {
				 echo "N/A";
			 }
			   ?><br />
             
<a href="javascript:Popup('appform_upform.php?id=<?php echo $row['proj_id'];?>')">Upload/Change</a>
              </td>
               </tr>
				
                </table>
				
			
			</div>
			</fieldset>		
				
				

</div>
 <!-- /tab010 brochure form -->
<div id="tab011">
<?php 
$vseo=mysqli_query($con,"select * from seo where proj_id='".$proj_id."'") or die(mysqli_connect($con));
if(mysqli_num_rows($vseo)>0) {
?>
<fieldset>
				<legend> View SEO</legend>
				<!-- Table (TABLE) -->
				<div style="overflow:scroll; width:1000px; height:350px;">
			<table>
           
				<tr>
                <th>Microsite Id</th>
                <th>Microsite Name</th>
                    <th>Page</th>
                   <th>Title</th>
				    <th>Meta "description"</th>
					<th>Meta "keywords"</th>                
                  
					<th>Edit</th>		
				</tr>	
                 <?php
			while($seorow=mysqli_fetch_array($vseo))
			{ 
			?>			
				<tr>
                <td><?php echo $seorow['proj_id']; ?> </td>
                 <td><?php echo $seorow['project_name']; ?> </td>
                <td><?php echo $seorow['selectpage_seo']; ?> </td>
                <td><?php echo $seorow['title']; ?> </td>
                 <td><?php echo $seorow['meta_desc']; ?></td>
                <td><?php echo $seorow['meta_keys']; ?></td>
               
             
                <td>
<a href="seo_edit.php?proj_id=<?php echo $row['proj_id']; ?>"><button>Edit Data</button></a></td>
                
                
                </tr>
				 
                  <?php }
 }
 else {
	 ?>
         <h3 align="center">
     <?php echo "Record Not Found!  " ?>

<a href="home.php?proj_id=<?php echo $row['proj_id']; ?>"><button>Add Data</button></a>
 <?php }
	
	?></h3>         
                </table>
				
			
			</div>
			</fieldset>		
</div>
 <!-- /tab011 seo -->
			
		</div> <!-- /content -->
	</div><!-- /cols -->
	<hr class="noscreen" />
   <?php } ?>
	<?php
mysqli_close($con);
?>

<?php include('footer.php')?>	
