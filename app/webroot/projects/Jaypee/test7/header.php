<?php include('connection.php'); ?>

<?php

$query_overview="select * from overview where project_name='".$_REQUEST['project_name']."'";



$res=mysqli_query($con,$query_overview);

$row=mysqli_fetch_assoc($res);
//print_r($row);



?>



<div class="header_work">

<div class="logoarea">

<div class="logoarea_main"><a href="#" title="Awadh Grand Tower"><img src="projectimages/<?=$row['file_name']; ?>" width="319" height="43" alt="agt" /></a></div>

<div class="logoarea_infra"><a href="#" title="Nortern Realty Infra Pvt. Ltd."><img src="projectimages/<?=$row['builder_logo']; ?>" width="274" height="74" alt="infra logo" /></a></div>



</div>



<div class="hd">

<div class="hd_marquee"><marquee direction="left" behavior="alternate" scrollAmount=5 style="width:600px;height:auto; "  onMouseover="this.scrollAmount=1" onMouseout="this.scrollAmount=4" src="update.htm">  </marquee>  </div> 



</div>

<div class="hd_work">

<!--<div class="buket" style="margin-top:26px;"><img src="images/buket-img.jpg" width="94" height="92" alt="buket" /></div>-->

<!--<div class="hotproject"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/hot-project-btn-hover.png',1)"><img src="images/hot-project-btn.png" name="Image5" width="181" height="60" border="0" id="Image5" /></a></div>-->

<div class="call"> <img src="images/phone-icon.png" width="41" height="50" alt="phone icon" align="center" /><span style="color:#006; font-weight:bold;">Call Now:</span> <?=$row['cont_number']; ?>&nbsp;&nbsp;<img src="images/email-icon.png" width="41" height="50" alt="phone icon" align="center" />&nbsp;&nbsp;<span style="color:#006; font-weight:bold;">Email:</span> <?=$row['cont_email']; ?></div>



</div>



</div>