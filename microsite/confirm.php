<?php session_start();?>
<?php include('connection.php');?>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta content='initial-scale=1.0, user-scalable=no' name='viewport'>
    <title>Admin</title>
    <link href="css/application.css" media="screen" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id='login_wrapper'>
      <div class='well' align="center">
        <h1>Admin login</h1>
      </div>
      <form action="" method="post">
        <div class='table-container' align="center">
          <table class='table table-form'>
<?php
if($_SESSION['login_user'])
 { 
 echo "You have Login in as:  ".$_SESSION['login_user'];
 ?>
 
 <br />

<?php }
else 
{
echo "You are Logout";
 ?>
<a href="index.php">Login</a>
 <?php } ?>
          </table>
        </div>
        <div class='actions'>
        
		<div align="right" style="margin-right:10px"><a href="add_microsite.php">Continue</a></div>
        <br />
       
	    </div>
         <div class='actions'>
        
		 <div align="right" style="margin-right:10px"> <a href="index.php">Logout</a></div>
        <br />
       
	    </div>
      </form>
    </div>
  </body>
</html>

