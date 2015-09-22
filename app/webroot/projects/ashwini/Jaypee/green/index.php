<?php
//include('seo.php');
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?=$title;?></title>
<meta  name="description" content="<?=$description; ?>"  />
<meta name="keywords" content="<?=$keyword ?>"  />

<link href="css/agt.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">

function MM_swapImgRestore() { //v3.0

  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;

}

function MM_preloadImages() { //v3.0

  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();

    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)

    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}

}



function MM_findObj(n, d) { //v4.01

  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {

    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}

  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];

  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);

  if(!x && d.getElementById) x=d.getElementById(n); return x;

}



function MM_swapImage() { //v3.0

  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)

   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}

}

</script>

</head>



<body onload="MM_preloadImages('images/hot-project-btn-hover.png')">



<div id="wrapper">

<div class="wrapper_work">

<div id="header">

<?php include('header.php'); ?>

</div>



<div id="bodyarea">

<div class="bodyarea_work">





<div class="bodyarea_work_left">

<?php include('left-panel.php'); ?>

</div>





<div class=" bodyarea_work_right">

<div class="navi">

<?php include('menu.php'); ?>



</div>





<div class="sliderarea">

<div class="sliderarea_slidimg">

<img src="projectimages/<?=$row['banner_image']; ?>" width="713px" height="256px" />

</div></div>

<div class="popular">

<div class="popular_text">Overview</div>

<div class="popular_cont">

<!--<div class="popular_cont_img"><img src="projectimages/<?=$row['file_name']; ?>" width="237" height="122" alt="project image" /></div>-->

<div class="popular_cont_subhead"><?=$row['project_name']; ?></div>

<div class="popular_cont_txt" style="width:100%">

<?=$row['overview']; ?>



</div>





</div>



</div>





<!--

<div class="playbox">



</div>-->



<!--<div class=" playbox_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>



<div class="website_infra"><a href="#">www.domain.com</a></div>-->



</div>





</div>

</div>



</div>

<script type="text/javascript" >

document.getElementById("nav1").className="active";

</script>

<div id="footer-out">

<?php include('footer.php'); ?>

</div>





</body>

</html>

