<?php include('header.php')?>	
<div id="content" class="box">
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
$mname=$_POST['txtsearch'];
$srest=mysqli_query($con,"Select * from overview where proj_id='".$mname."' || project_name like '".$mname."%'") or die(mysqli_error($con)); 
while($srow=mysqli_fetch_array($srest))
{ ?>
	  <tr>                
                <td width="100" style="width:100px;"><?php echo $srow['proj_id']; ?></td>
                <td width="150" style="width:150px;"><?php echo $srow['bname']; ?></td>
                 <td width="150" style="width:150px;"><?php echo $srow['project_name']; ?></td>
                
                <td width="100" style="width:180px;">
        <?php 
		if(($srow['overview'] and $srow['file_name'] and $srow['builder_logo'] and $srow['banner_image'] and $srow['address'] and $srow['city'] and $srow['feature_details'] and $srow['speci_details'] and $srow['paymentplan_details'] and $srow['floor1'] and $srow['bhktype'] and $srow['area_rg'] and $srow['str_p'] and $srow['cont_number'] and $srow['cont_email']) =="")
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
				if(($srow['overview'] and $srow['file_name'] and $srow['builder_logo'] and $srow['banner_image'] and $srow['address'] and $srow['city'] and $srow['feature_details'] and $srow['speci_details'] and $srow['paymentplan_details'] and $srow['floor1'] and $srow['bhktype'] and $srow['area_rg'] and $srow['str_p'] and $srow['cont_number'] and $srow['cont_email']) =="")
				{ ?>
                <a href="home.php?proj_id=<?php echo $srow['proj_id']; ?>">Add Details</a>
                <?php }
				else
				{
				 ?>
                 <a href="selected_site.php?proj_id=<?php echo $srow['proj_id']; ?>">View Details</a>
                 <?php } ?>
          </td>
          <td><a href="home.php?proj_id=<?php echo $srow['proj_id']; ?>">Add More</a></td>
         <td><a href="viewsite.php?proj_id=<?php echo $srow['proj_id']; ?>">View Offline</a></td> 
		    <td><a href="viewsite.php?proj_id=<?php echo $srow['proj_id']; ?>">Active</a></td>     
                </tr>
                 <?php }  ?> 
				</table>
                </div>
                
<?php include('footer.php')?>	
