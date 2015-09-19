<?php include('header.php')?>	
		<hr class="noscreen" />
		<!-- Content (Right Column) -->
		<div id="content" class="box">
			<!-- Form -->
			<h3 class="tit">ADD USER DETAILS</h3>
			<fieldset>
				<legend>User</legend>
				
				<?php 
				$result = mysqli_query($con,"SELECT * FROM user_info where User_Name='".$_SESSION['login_user']."'");
				
				while($row = mysqli_fetch_array($result))
				{
				if(($_SESSION['login_user']=$row['User_Name']) && ($row['Level']=="Administrator") ) 
				 {?>
				
				
				<table class="nostyle">
                <form name="myform" action="user_detail.php" onSubmit="return validateuser();" method="post">
					<tr>
						<td width="120">First Name:</td>
						<td><input type="text" name="fname" id="fname" class="input-text" /></td>
					</tr>
					<tr>
						<td width="120" class="va-top">Last Name:</td>
						<td><input type="text" name="lname" id="lname"  class="input-text"/></td>
					</tr>
					<tr>
						<td width="120" class="va-top">User Name:</td>
						<td><input type="text" name="uname" id="uname"  class="input-text" /></td>
					</tr>
					<tr>
						<td style="width:120px;">Password:</td>
						<td><input type="password" name="pass"  id="pass" class="input-text"/></td>
					</tr>
                    <tr>
						<td style="width:120px;">Confirm Password:</td>
						<td><input type="password" name="cpass" id="cpass" class="input-text"/></td>
					</tr>
                    <tr>
						<td width="100" style="width:100px;">Select Level:</td>
						<td width="200"><select name="sel_level" style="width:170px" id="level"  class="input-text">
					                    <option value="----Select----">----Select----</option>					
					                    <option value="Administrator">Administrator</option>
				                        <option value="User">User</option>
					                    
				                        </select>
						</td>
					</tr>
					
					<tr>
						<td style="width:120px;">E-mail:</td>
						<td><input type="text"  name="email" id="email" class="input-text"/></td>
					</tr>
					<tr>
						<td colspan="2" class="t-right"><input type="submit"  name="submit" class="input-submit" value="Submit" /> <input type="reset" class="input-submit" name="reset" /></td>
					</tr>
				</form>
                </table>
				<?php } 
				else
				{
					echo "<h1>".$row['User_Name']."</h1>"."<h2> You are not Authorized to Add User!</h2>";
				}
				
				} ?>
			</fieldset>
		</div> <!-- /content -->
	</div> <!-- /cols -->
	<hr class="noscreen" />
	<!-- Footer -->
	<?php include('footer.php')?>
