<?php include('header.php')?>	
<?php 
$mname=$_POST['mname'];
$result=mysqli_query($con,"Select * from overview where proj_id='".$mname."' || project_name like '".$mname."%'") or die(mysqli_error($con));
 
 if(mysqli_num_rows($result)>0) {
 ?>	
  <hr class="noscreen" />
		<!-- Content (Right Column) -->
		<div id="content" class="box">
			<!-- Create a new project -->
			
			
<div class="tabs box">
				<ul>
					<li><a href="#tab01"><span>Search Result</span></a></li>
					
				</ul>
</div>
  <!-- /tabs -->

<!-- Tab01 -->
<div id="tab01">
		<fieldset>
				<legend>Microsite</legend>
				<!-- Table (TABLE) -->
				<div style="overflow:scroll; width:1000px; height:400px;">
			<table class="tit">
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
                    <th>Specification Details</th>
					<th>Specification Image</th>
                    <th>Features Details</th>
                    <th>Features Image</th>
                    <th>Price List Details</th>	
                    <th>Price List Image/File</th>
                    <th>Payment Plan Details</th>	
                    <th>Payment Plan Image/File</th>	
                    <th>FLoor-1</th>	
                    <th>FLoor-2</th>	
                    <th>FLoor-3</th>
                    <th>FLoor-4</th>                   
                   <th>Site Plan Details</th>
					<th>Site Plan Image</th>
                    <th>Location Map Image</th>
                    <th>Location Map-Longitude</th>
                    <th>Location Map-Latitude</th>
                    <th>Contact Details</th>
                    <th>Contact Number</th>
                    <th>Contact Email</th>
                     <th>Brochures File</th>
                     <th>Application Form</th>                     
                      <th>Page:SEO</th>
                       <th>Title</th>
                        <th>Meta "Description"</th>
                        <th>Meta "Keywords"</th>                                                     
                    <th>Edit</th>
                   	<th>Delete</th>
                    </tr>

<?php				
 while($row = mysqli_fetch_array($result))
  { 
  $bname=$row['bname']; 
  $pcategory=$row['project_category'];
  $psub_category=$row['subcategory'];
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
  $feature_details=$row['feature_details'];
  $feature_img=$row['feature_image']; 
  $plist_details=$row['Price_details'];
  $plist_img=$row['Price_image']; 
  $paymentplan_details=$row['paymentplan_details'];
  $paymentplan_file=$row['paymentplan_file'];
  $floor1=$row['floor1'];
  $floor2=$row['floor2'];
  $floor3=$row['floor3'];
  $floor4=$row['floor4'];
  $site_dets=$row['siteplan_details'];
  $site_img=$row['siteplan_img'];
  $loc_img=$row['locationmap_img'];
  $langi=$row['longitude'];
  $lati=$row['latitude'];
  $cont=$row['contact_details'];
  $cont_num=$row['cont_number'];
  $con_email=$row['cont_email'];
  $brfile=$row['brochures_file'];
  $apfile=$row['app_file'];
  ?>	
  <?php
  $result2 = mysqli_query($con,"SELECT * FROM seo where proj_id='".$row['proj_id']."' && selectpage_seo='Overview' ") or die(mysqli_error($con));
?>			
				<tr>
                <td><?php echo $row['proj_id']; ?></td>
                
                <td><?php echo $bname; ?></td>
                <td><?php echo $pcategory; ?></td>
                <td><?php echo $psub_category; ?></td>
                <td><?php echo $projname; ?></td>
                <td>
				<?php
				if($overv)
				{
				 echo $overv;
				}
				else {
					echo "N/A";
				}
				  ?>
                
                </td>
                <td>
				<?php
				if($adds)
				{
				 echo $adds;
				 }
				else {
					echo "N/A";
				}
				  ?>
                 
                 </td>
                <td>
				<?php
				if($city)
				{
				 echo $city;
				 }
				else {
					echo "N/A";
				}
				 
				  ?>
                </td>
                <td>
				<?php
				if($bhktype)
				{
				 echo $bhktype; 
				  }
				else {
					echo "N/A";
				}
				 
				 ?></td>
                <td>
				<?php
				if($area_rg)
				{
				 echo $area_rg;
				 }
				else {
					echo "N/A";
				}
				 
				 ?>
                </td>
                <td>
				<?php
				if($str_p)
				{
				 echo $str_p; 
				  }
				else {
					echo "N/A";
				}
				 ?>
                
                </td>
                <td>
                <img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php
				if($logo)
				{
				 echo $logo;
				  }
				else {
					echo "N/A";
				}
				 ?>
				  ?>" alt="N/A" width="70" height="70" />
                </td>
                
                <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php
				if($bimg)
				{
				 echo $bimg; 
				 }
				else {
					echo "N/A";
				}
				 ?>" alt="banner image" width="70" height="70"  />
                </td>
                <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php 
				if($blogo)
				{
				echo $blogo; 
				}
				else {
					echo "N/A";
				}
				?>" alt="N/A" width="70" height="70"  />
               
                </td>
                <td><?php
				if($speci_details)
				{
				 echo $speci_details; 
				 }
				else {
					echo "N/A";
				}
				 ?></td>
                <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php
				if($speci_img)
				{
				 echo $speci_img; 
				 }
				else {
					echo "N/A";
				}
				 ?>" alt="N/A" width="70" height="70"  />
                </td>
                <td><?php
				if($feature_details)
				{
				 echo $feature_details;
				 }
				else {
					echo "N/A";
				}
				  ?></td>
                <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php
				 if($feature_img)
				{
				 echo $feature_img;
				 }
				else {
					echo "N/A";
				}
				  ?>" alt="N/A" width="70" height="70"  />
                </td>
                <td><?php
			    if($plist_details)
				{
			    echo $plist_details;
				}
				else {
					echo "N/A";
				}  
				?>
                 <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php
				 if($plist_img)
				{
				 echo $plist_img;
				 }
				else {
					echo "N/A";
				}
				  ?>" alt="N/A" width="70" height="70"  />
                </td>
                              
               <td><?php
			    if($paymentplan_details)
				{
			    echo $paymentplan_details;
				}
				else {
					echo "N/A";
				}  
				?>
				
				 </td>
                <td><?php
				if($paymentplan_file)
				{
				 echo  $paymentplan_file;
				  }
				else {
					echo "N/A";
				}  
				  ?>
                </td>
                <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php
				if($floor1)
				{ 
				echo $floor1;
				 }
				else {
					echo "N/A";
				}  
				 ?>" alt="N/A" width="70" height="70"  />
                </td>
                <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php
				if($floor2)
				{ 
				echo  $floor2;
				}
				else {
					echo "N/A";
				}  
				 ?>" alt="N/A" width="70" height="70"  />
                </td>
                <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php
				if($floor3)
				{  
				echo  $floor3;
				}
				else {
					echo "N/A";
				} 
				 ?>" alt="N/A" width="70" height="70"  />
                </td>
                <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php
				if($floor4)
				{
				 echo  $floor4; 
				 }
				else {
					echo "N/A";
				} 
				 ?>" alt="N/A" width="70" height="70"  />
                </td>
                
                
                <td>
				<?php 
				if($site_dets)
				{
				echo $site_dets;
				}
				else {
					echo "N/A";
				} 
				 ?>
                </td>
                <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php 
				if($site_img)
				{
				echo $site_img;
				}
				else {
					echo "N/A";
				} 
				?>" alt="N/A" width="70" height="70"  />
                </td>
               <td><img src="projects/<?php echo $bname;?>/<?php echo $projname;?>/projectimages/<?php
			   if($loc_img)
				{
			    echo $loc_img; 
				}
				else {
					echo "N/A";
				} 
				?>" alt="N/A" width="70" height="70"  />
                </td>
               
                <td>
				<?php
				if($langi)
				{
				 echo $langi;
				}
				else {
					echo "N/A";
				} 
				 ?>
                </td> 
                <td>
				<?php
				if($lati)
				{
				 echo $lati;
				 }
				else {
					echo "N/A";
				} 
				  ?>
                </td> 
                <td><?php
				if($cont)
				{
				 echo $cont;
				 }
				else {
					echo "N/A";
				} 
				  ?></td>
                 <td><?php
				 if($cont_num)
				{
				  echo $cont_num;
				  }
				else {
					echo "N/A";
				} 
				   ?></td>
                  <td><?php
				   if($con_email)
				{
				  echo $con_email;
				  }
				else {
					echo "N/A";
				}  
				  ?></td>
                 <td><?php
				 if($brfile)
				{
				  echo $brfile; 
				  }
				else {
					echo "N/A";
				}  
				  ?></td>
                 <td><?php 
				 if($brfile)
				{
				 echo $apfile; 
				 }
				else {
					echo "N/A";
				}  
				 ?></td>
          
   <?php				
 while($row2 = mysqli_fetch_array($result2))
  {
  $sp_seo=$row2['selectpage_seo'];
  $title=$row2['title'];
  $meta_d=$row2['meta_desc'];
  $meta_k=$row2['meta_keys'];
 
	    ?>             
                  <td><?php
				   if($sp_seo)
				{
				   echo $sp_seo;
				    }
				else {
					echo "N/A";
				}  
				    ?></td>
                   <td><?php
				    if($title)
				{
				    echo $title;
					 }
				else {
					echo "N/A";
				}  
					 ?></td>
                 <td><?php
				  if($meta_d)
				{
				  echo $meta_d; 
				  }
				else {
					echo "N/A";
				}  
				  ?></td>
                 <td><?php
				  if($meta_k)
				{
				  echo $meta_k;
				  }
				else {
					echo "N/A";
				}  
				   ?></td>
                  
                   
        <?php }?>           
                <td><a href="details.php?proj_id=<?php echo $row['proj_id']; ?>"><button>Edit Site</button></a></td>
                 <td>
                 
                 <a href="javascript:Popup('delete_micrositeform.php?id=<?php echo $row['proj_id']; ?>')"><button>Delete Site </button></a>
                
                 </td>
                
                
                </tr>
                 <?php }
 }
 else {
	 ?>
				<tr>
                
     <td colspan="5">
     <h3 align="center">
     <?php
 echo "No Microsite found.";
 }
	
	?></h3>
    </td>
    </tr>
                </table>
							
			</div>
			</fieldset>	
					
			</div> 
  
<!-- /tab01 -->
<!-- Tab02 -->

<!-- /tab02 -->    		
</div> <!-- /content -->
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
