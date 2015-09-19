<?php include('header.php')?>
		<hr class="noscreen" />
		<!-- Content (Right Column) -->
		<div id="content" class="box">
			<!-- Form -->
			
			<fieldset>
				<legend>Delete/ Update User Details</legend>
				<!-- Table (TABLE) -->
                <div style="width:600; height:300; overflow:scroll;">
			<table class="tit">
				<tr>
				    <th>ID</th>
				    <th>FIRST NAME</th>
				    <th>LAST NAME</th>
				    <th>USER NAME</th>
				    <th>PASSWORD</th>
					<th>LEVEL</th>
					<th>E-MAIL</th>		
					<th>EDIT</th>
                    <th>DELEATE</th>	
				</tr>
				<?php 
				$result = mysqli_query($con,"SELECT * FROM user_info where User_Name='".$_SESSION['login_user']."' ");
				$result2 = mysqli_query($con,"SELECT * FROM user_info");
				while($row = mysqli_fetch_array($result))
				{				
				if($row['Level']=="User")
				{
				 ?>
				<tr class="bg">
				    <td align="center"><?php echo $row['User_Id']; ?></td>
					<td><?php echo $row['First_Name']; ?> </td>
					<td><?php echo $row['Last_Name']; ?> </td>
					<td><?php echo $row['User_Name']; ?> </td>
					<td>
					<?php
					$password=$row['Password'];
                $encrypt_password=md5($password);
					 echo $encrypt_password; ?>
                    
                    </td>
					<td><?php echo $row['Level']; ?> </td>
					<td><?php echo $row['Email']; ?> </td>
					<td>
                    
                   
                   
                    </td>
					<td>
                    
                    </td>
				</tr>
                <?php
				}
                if($row['Level']==("Administrator"))
				{
					while($row2 = mysqli_fetch_array($result2))
				{	
				?>
                <tr class="bg">
				    <td align="center"><?php echo $row2['User_Id']; ?></td>
					<td><?php echo $row2['First_Name']; ?> </td>
					<td><?php echo $row2['Last_Name']; ?> </td>
					<td><?php echo $row2['User_Name']; ?> </td>
					<td>
					<?php
					$password=$row2['Password'];
                $encrypt_password=md5($password);
					 echo $encrypt_password; ?>
                    
                    </td>
					<td><?php echo $row2['Level']; ?> </td>
					<td><?php echo $row2['Email']; ?> </td>
					<td>
                    
                    <a href="edituser.php?Id=<?php echo $row2['User_Id'];?>"><button>EDIT</button></a>
                   
                    </td>
					<td>
                    
                    <a href="deleat_user.php?Id=<?php echo $row2['User_Id'];?>"><button onclick="return confirm('Are you sure you want to delete?')">DELEAT</button></a>
                    
                    </td>
				</tr>	
                <?php
				}
				 } 
				
				} ?>				
               
			</table>
            </div>
			</fieldset>	</div> <!-- /content -->
	</div> <!-- /cols -->
	<hr class="noscreen" />
	<?php mysqli_close($con);?>
	<!-- Footer -->
	<?php include('footer.php')?>
