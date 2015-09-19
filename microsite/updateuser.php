<?php include('connection.php');?>
<?php
if(isset($_POST['Update']))
{
$First_Name = $_POST['fname'];
$Last_Name = $_POST['lname'];
$User_Name = $_POST['uname'];
$Password = $_POST['pass'];
$CPassword = $_POST['cpass'];
$Email_Id = $_POST['email'];
$Id=$_POST['id'];
$Updatequery = mysqli_query($con,"Update user_info set First_Name='".$First_Name."',Last_Name='".$Last_Name."',User_Name='".$User_Name."', Password='".$Password."',Confirm_pass='".$CPassword."',Email='".$Email_Id."' where User_Id='".$Id."'")
or die(mysqli_error($con)); 
if($Updatequery)
{
header('location:viewuser.php');
}
else
{
die(mysqli_error($con));
}
}
?>
<?php
mysqli_close($con);
?>