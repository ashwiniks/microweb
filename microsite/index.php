<?php session_start();?>
<?php ob_start(); ?>
<html lang='en'>
  <head>
  <?php include('connection.php')?>
    <meta charset='utf-8'>
    <meta content='initial-scale=1.0, user-scalable=no' name='viewport'>
    <title>Admin</title>
    <link href="css/application.css" media="screen" rel="stylesheet" type="text/css" />
<!--	<script src="js/login_validate.js" type="text/javascript"></script>
--> 
<script type="text/javascript">
function validation()
{
if(document.getElementById('t1').value=='')
{
alert("Please Enter the Username");
document.getElementById('t1').focus();

return false;
}

if(document.getElementById('t2').value=='')
{
alert("Please Enter Password");
document.getElementById('t2').focus();
return false;
}

}
</script>
</head>
  <body>
    <div id='login_wrapper'>
      <div class='well'>
        <h1>Admin login</h1>
      </div>
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" onSubmit="return validation();">
        <div class='table-container'>
          <table class='table table-form'>
            <tbody>
              <tr>
                <td>
                  <label>Username </label>
                </td>
                <td>
                  <input name='uname' placeholder='Username' id="t1" type='text'>
                </td>
              </tr>
              <tr>
                <td>
                  <label>Password</label>
                </td>
                <td>
                  <input placeholder='Password' type='password' id="t2" name="pass">
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class='actions'>
          <div class='button-well'>
          <button class='button button-primary'><input type="hidden" name="submit">Login</button>
          </div>
        </div>
		<?php
if(isset($_POST['submit']))
{$username=mysqli_real_escape_string($con,$_POST['uname']);$password=mysqli_real_escape_string($con,$_POST['pass']);
$Rquery="select * from user_info where User_Name='".$username."'and Password='".md5($password)."'";
$result=mysqli_query($con,$Rquery) or die(mysqli_error($con));
$rows=mysqli_num_rows($result) or die(mysqli_error($con));
if($rows)
{
$_SESSION['login_user']=$_POST['uname'];
//header("Location:confirm.php");
?>
<script type='text/javascript' >
window.location.href="confirm.php";
</script>
<?php
}
else
{
echo "Invalid Username and Password";
}
}
?>
      </form>
    </div>
  </body>
</html>