<?php include('connection.php')?>
<?php 
if(isset($_POST['submit']))
{
	
$Rquery="Insert into user_info (First_Name,Last_Name,User_Name,Password,Confirm_pass,Level,Email) values ('$_POST[fname]','$_POST[lname]','$_POST[uname]','$_POST[pass]','$_POST[cpass]','$_POST[sel_level]','$_POST[email]')";

$result=mysqli_query($con,$Rquery) or die(mysqli_error($con));
if($result)
{
header("Location:viewuser.php");
}
else
{
echo "Error:User Not Created!";
}
}
mysqli_close($con);
?>