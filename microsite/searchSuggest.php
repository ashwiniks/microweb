<?php include('connection.php')?>
<?php
if (isset($_GET['search']) && $_GET['search'] != '') {
 //Add slashes to any quotes to avoid SQL problems.
 $search = $_GET['search'];
 $suggest_query = mysqli_query($con,"SELECT distinct(project_name) as autosuggest FROM overview WHERE project_name like('" .$search . "%') ORDER BY proj_id");
 while($suggest = mysqli_fetch_array($suggest_query)) {
  echo $suggest['autosuggest'] . "\n";
 }
}?>
