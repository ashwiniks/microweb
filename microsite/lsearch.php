<?php include('connection.php')?>	
<?php
//connect to mysql database

//check if the data was sent here
if(isset($_POST['keyword'])) {
//store the value in a variable
$mname = mysql_real_escape_string($_POST['keyword']);

echo "<h4>Result for: $product</h4>";
//perform sql query
$query = mysql_query("SELECT * FROM overview where project_name like '".$mname."%'");
if($query) {
//if the query succeed

if(mysql_num_rows($query) > 0) {
   echo "<ol>";
  while($row = mysql_fetch_assoc($query)) { ?>
  <li><a href="/view-products.php?id=<?php echo $row['proj_id'] ?>"><?php echo $row['project_name']; ?></a> &nbsp;&nbsp;&nbsp; (<s>N</s>
  <?php echo $row['project_name']; ?>)</li>
  <?php
}
echo "</ol>";
}  else {
echo  "No suggestion found!";
}
} else {
 die(mysqli_error($con));
}
}

?>