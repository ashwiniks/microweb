<?php include('header.php')?>
<?php
$perpage =15;
if(isset($_GET["page"])){
	$page = intval($_GET["page"]);
}
else {
$page = 1;
}
$calc = $perpage * $page;
$start = $calc - $perpage;
?>
		<hr class="noscreen" />
		<!-- Content (Right Column) -->
		<div id="content" class="box">
			<!-- Form -->
			
			<fieldset>
				<legend>Activate Resale project Here</legend>
				<!-- Table (TABLE) -->
                <div style="width:600; height:300; overflow:scroll;">
                <table>
                <tr>
        <th width="150">Project Name</th>
        <th width="150">Unit Type</th>
        <th width="150">Size</th>
        <th width="150">Floor/Block</th>
        <th width="149">Location/Sector</th>
        <th width="90">Property Posted On</th>
        <th width="100">Query Us</th>
    </tr>
			 <?php 
$seltall= mysqli_query($con,"select * from property_detail") or die(mysqli_error($con));
if(! $seltall )
                                         {
                                           die('Could not get data: ' . mysqli_error($con));
                                         }
if(mysqli_num_rows($seltall) >0)
				{  $i = 0;
?> 
     <?php while($hpdg=mysqli_fetch_array($seltall))
					             {  ?>

    <tr align="center">
        <td><?php echo $hpdg['Property_Name'] ; ?></td>
        <td><?php echo $hpdg['Unit_Type'] ; ?></td>
        <td><?php echo $hpdg['Size'] ; ?></td>
        <td><?php echo $hpdg['Floor'] ; ?></td>
        <td><?php echo $hpdg['Location'] ; ?></td>
        <td><?php echo $hpdg['Date'] ; ?></td>
        <td><a href="approve.php?project_id=<?php echo $hpdg['Prop_Id'] ; ?>" class="button">Approve</a></td>
    </tr>
    <?php } ?>
    	
 <?php } 
	else
	{?>
    	<tr>
        	<th colspan="7" class="rounded-foot-left"><em>No Property Found</em></th>
        </tr>
  <?php } ?>
</table>
            </div>
			</fieldset>	</div> <!-- /content -->
	</div> <!-- /cols -->
	<hr class="noscreen" />
     <div class="pagination">
          <?php 
									      if(isset($page))
                                          {
                                          $result = mysqli_query($con,"select count(*) As Total from property_detail where Status='approved'"); 
                                          $rows = mysqli_num_rows($result);
                                          if($rows)
                                          {
                                          $rs = mysqli_fetch_assoc($result);
                                          $total = $rs["Total"];
                                          }
                                          $totalPages = ceil($total / $perpage);
                                          if($page <=1 ){
                                          echo "<span style='font-weight: bold;'><< Prev </span>";
                                          }
                                          else
                                          {
                                          $j = $page - 1;
                                          echo "<span ><a  href='resale.php?page=$j'><< Prev</a></span>";
                                          }
                                          for($i=1; $i <= $totalPages; $i++)
                                          { 
                                          if($i<>$page)
                                          {
                                          echo "<span ><a href='resale.php?page=$i'>$i</a></span>";
                                          }
                                          else
										  {
											  echo "<span class='current'>$i</span>";
											  }
											  }
											  if($page == $totalPages )
											  {
												  echo "<span style='font-weight: bold;'>Next >></span>";
											  }
											  else
												 {
													  $j = $page + 1;
													  echo "<span ><a href='resale.php?page=$j'>Next ></a></span>";
												  }
													  }
													  ?>
        </div> 
	<?php mysqli_close($con);?>
	<!-- Footer -->
	<?php include('footer.php')?>
