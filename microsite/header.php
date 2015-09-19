<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="en" />
	<meta name="robots" content="noindex,nofollow" />
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="google_dynamic_map.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/reset.css" /> <!-- RESET -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" /> <!-- MAIN STYLE SHEET -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/2col.css" title="2col" /> <!-- DEFAULT: 2 COLUMNS -->
	<link rel="alternate stylesheet" media="screen,projection" type="text/css" href="css/1col.css" title="1col" /> <!-- ALTERNATE: 1 COLUMN -->
	<!--[if lte IE 6]><link rel="stylesheet" media="screen,projection" type="text/css" href="css/main-ie6.css" /><![endif]--> <!-- MSIE6 -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/style.css" /> <!-- GRAPHIC THEME -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/mystyle.css" /> <!-- WRITE YOUR CSS CODE HERE -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/switcher.js"></script>
	<script type="text/javascript" src="js/toggle.js"></script>
	<script type="text/javascript" src="js/ui.core.js"></script>
	<script type="text/javascript" src="js/ui.tabs.js"></script>
	<script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="js/suggest.js"></script>
	<!-- Place inside the <head> of your HTML -->

<script src="tinymce/tinymce.min.js"></script> 
<!--<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });

</script> -->
<script type="text/javascript">
  tinymce.init({
  selector: "textarea",
  theme: "modern",
  plugins: [
  "advlist autolink lists link image charmap print preview hr anchor pagebreak",
  "searchreplace wordcount visualblocks visualchars code fullscreen",
  "insertdatetime media nonbreaking save table contextmenu directionality",
  "emoticons template paste textcolor"
  ],
  toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  toolbar2: "print preview media | forecolor backcolor emoticons",
  image_advtab: true,
  templates: [
   {title: 'Test template 1', content: 'Test 1'},
   {title: 'Test template 2', content: 'Test 2'}
  ],
 });
 </script>

	<script type="text/javascript">
	$(document).ready(function()
	{
		$(".tabs > ul").tabs();
	});
	</script>
	
	<title>Admin Panel</title>
     <?php include_once('connection.php')?>
    <script type="text/javascript">
 
  var stile1 = "top=100, left=500, width=350, height=350 status=no, menubar=no, toolbar=no scrollbar=no";
     function Popup(apri1) {
        window.open(apri1, "", stile1);
     }
</script>
<!-- Start validation for Add Microsite -->

<script type="text/javascript">
function validate()
{
if(document.getElementById('mbn').value=='----Select----')
{
alert("Please Select Builder Name!");
document.getElementById('mbn').focus();
return false;
}


if(document.getElementById('mpn').value=='')
{
alert("Please Enter Project Name!");
document.getElementById('mpn').focus();
return false;
}
}
</script>
<!-- End validation for Add Microsite -->

<script type="text/javascript">
function toggleSelect(id)
{
    if (id =='Commercial')
    {
          document.getElementById('reg').style['display'] = 'none';
          document.getElementById('com').style['display'] = 'block';
    }

    if (id =='Residential')
    {
          document.getElementById('com').style['display'] = 'none';
          document.getElementById('reg').style['display'] = 'block';
    }
}
</script>

<script type="text/javascript">
function CheckColors(val){
 var element=document.getElementById('bulder_name');
 if(val=='Others')
   element.style.display='block';
   
 else
   
   element.style.display='none';
}

</script> 
<!-- Start validation for Longitude and Latitude -->

<script type="text/javascript">
function validatelocation()
{
if(document.getElementById('longitude').value=='')
{
	
		alert("Please Select Location, This field can not be blank!");
        document.getElementById('longitude').focus();
	
return false;
}
 

if(document.getElementById('latitude').value=='')
{
	
		alert("Please Select Location, This field can not be blank!");
        document.getElementById('latitude').focus();
	
return false;
}
}
</script>
<!-- End validation for Longitude and Latitude -->

<!--Start validation for User -->
<script type="text/javascript">
function validateuser()
{
if(document.getElementById('fname').value=='')
{
	
		alert("Please Enter First Name!");
        document.getElementById('fname').focus();
	
return false;
}
if(document.getElementById('lname').value=='')
{	
		alert("Please Enter Last Name!");
        document.getElementById('lname').focus();	
return false;
}
if(document.getElementById('uname').value=='')
{	
		alert("Please Enter User Name!");
        document.getElementById('uname').focus();	
return false;
}
if(document.getElementById('pass').value=='')
{	
		alert("Please Enter Password!");
        document.getElementById('pass').focus();	
return false;
}
if(document.getElementById('cpass').value=='')
{	
		alert("Please Confirm Password!");
        document.getElementById('cpass').focus();	
return false;
}
if (pass.value !== cpass.value) { 
   alert("Your password and confirmation password do not match.");
  document.getElementById('cpass').focus();
  return false;
}
  
if(document.getElementById('level').value=='----Select----')
{	
		alert("Please Select Level!");
        document.getElementById('level').focus();	
return false;
}
if(document.getElementById('email').value=='')
{	
		alert("Please Enter Email!");
        document.getElementById('email').focus();	
return false;
}
var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
   document.getElementById('email').focus();
    return false;
	}
}
</script>
<script>
function showResult(str)
{
if (str.length==0)
  { 
  document.getElementById("livesearch").innerHTML="";
  document.getElementById("livesearch").style.border="0px";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
xmlhttp.open("GET","livesearch.php?q="+str,true);
xmlhttp.send();
}
</script>
<!--End validation for User -->
<script type="text/javascript">
idleMax = 20;// Logout after 10 minutes of IDLE
idleTime = 0;
$(document).ready(function () {
    var idleInterval = setInterval("timerIncrement()", 60000); 
    $(this).mousemove(function (e) {idleTime = 0;});
    $(this).keypress(function (e) {idleTime = 0;});
})
function timerIncrement() {
    idleTime = idleTime + 1;
    if (idleTime > idleMax) { 
	    session_destroy();
        window.location="index.php";
    }
}
</script>'
</head>

<body onLoad="initialize();">

<div id="main">
	<!-- Tray -->
	<div id="tray" class="box">

		<p class="f-left box">

			<!-- Switcher -->
			<span class="f-left" id="switcher">
				<a href="#" rel="1col" class="styleswitch ico-col1" title="Display one column"><img src="design/switcher-1col.gif" alt="1 Column" /></a>
				<a href="#" rel="2col" class="styleswitch ico-col2" title="Display two columns"><img src="design/switcher-2col.gif" alt="2 Columns" /></a>
			</span>

			<strong>Admin Panel</strong>

		</p>

		<p class="f-right">User: <strong><a href="#">
<?php
if($_SESSION['login_user'])
 { 
 echo $_SESSION['login_user'];
 }
 ?>
 
 </a></strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 <strong><a href="logout.php" id="logout">Logout</a></strong></p>

	</div> <!--  /tray -->

	<hr class="noscreen" />

	<!-- Menu -->
	<div id="menu" class="box">

		<ul class="box f-right">
			<li><a href="http://www.softgains.com"><span><strong>Visit Site &raquo;</strong></span></a></li>
		</ul>

		<ul class="box">
		<li id="menu-active"><a href="add_microsite.php"><span>Home</span></a></li> <!-- Active -->		
            <li><a href="project_list.php"><span>Microsite List</span></a></li>
            <li><a href="adduser.php"><span>Users</span></a></li>
             
		</ul>

	</div> <!-- /header -->
<hr class="noscreen" />
	<!-- Columns -->
	<div id="cols" class="box">
	<!-- Aside (Left Column) -->
		<div id="aside" class="box">
			<div class="padding box">
				<!-- Logo (Max. width = 200px) -->
				<p id="logo"><a href="#"><img src="tmp/logo-softgains.png" alt="Our logo"  /></a></p>
				<!-- Search -->
				<form action="search.php" method="post" id="search">
					<fieldset>
						<legend>Search Microsite</legend>
                        <p>Enter Microsite Name or Id</p>
						<p><input type="text" size="17" name="mname" class="input-text" />&nbsp;<input type="submit" onkeyup="showResult(this.value)" value="OK" class="input-submit-02" />
                        <div id="livesearch"></div>
                        <br />
						
						<!-- Advanced search -->
						 <!-- /search-options -->
					</fieldset>
				</form>
				<!-- Create a new project -->
				
			</div> <!-- /padding -->
			<ul class="box">
				<li id="submenu-active"><a href="#">Project</a></li>
				<ul>
				        <li><a href="add_microsite.php">Add Project</a></li>
						<li><a href="project_list.php">View Project</a></li>
				    </ul>
                    
                    <li id="submenu-active"><a href="#">Resale Project</a></li>
				<ul>
				        <!--<li><a href="add_microsite.php">Add Project</a></li>-->
						<li><a href="resaleproject_list.php">View Resale Project</a></li>
				    </ul>
				<li><a href="#">Users</a></li>
				    <ul>
				        <li><a href="adduser.php">Add User</a></li>
				        <li><a href="viewuser.php">View User</a></li>
				    </ul>
				
				<li><a href="#">Admin</a></li>
				    <ul>
				        <li><a href="changepass.php">Change Password</a></li>
				        <li><a href="logout.php">Logout</a></li>
				    </ul>
			</ul>
		</div> <!-- /aside -->
      