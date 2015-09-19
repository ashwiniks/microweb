<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Upload logo image</title>
<?php include('connection.php')?>
</head>
<body bgcolor="#9999FF">
<div style="margin-top:100px; background-color:#FFFFFF; height:200px;">
<form action="update_logo.php" method="post" enctype="multipart/form-data">
<?php 
$Proj_Id=$_GET['Id'];
?>
<h1 align="center">Upload Image</h1>
<table>
<tr><th>Proj_Id :</th><td><input type="text" readonly="" name="proj_id" value="<?php echo $Proj_Id; ?>" /><br /></td></tr>
<tr><th>Project Logo Image:</th><td><input type="file" name="file" id="file"/></td></tr>
<tr><td></td><td><input type="submit" name="update" class="input-submit" value="Submit" /></td></tr>
</table>
</form>
</div>
</body>
</html>