<?php  $_SESSION['project_name']=$_REQUEST['project_name']; ?>
<ul>

<li><a href="index.php?project_name=<?= $_SESSION['project_name'];?>" title="Home" id="nav1">Home</a></li>

<li><a href="specification.php?project_name=<?= $_SESSION['project_name'];?>" title="Specifications" id="nav2">Specifications</a></li>

<li><a href="features.php?project_name=<?= $_SESSION['project_name'];?>" title="Features" id="nav3">Features</a></li>

<li><a href="price-list.php?project_name=<?= $_SESSION['project_name'];?>" title="Price List" id="nav4">Price List</a></li>

<li><a href="payment-plan.php?project_name=<?= $_SESSION['project_name'];?>" title="Payment Plan" id="nav5">Payment Plan</a></li>

<li><a href="siteplan.php?project_name=<?= $_SESSION['project_name'];?>" title="Site Plan" id="nav6">Site Plan</a></li>

<li><a href="floor-plan.php?project_name=<?= $_SESSION['project_name'];?>" title="Floor Plan" id="nav7">Floor Plan</a></li>

<li><a href="contact.php?project_name=<?= $_SESSION['project_name'];?>" title="Contact us" id="nav8">Contact Us</a></li>

</ul>