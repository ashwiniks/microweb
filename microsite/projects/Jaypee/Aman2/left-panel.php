 <?php

//echo "asasasaas".$_REQUEST['*Fname'];

error_reporting(0);

session_start();

if(isset($_POST["*Fcaptcha"])&&$_POST["*Fcaptcha"]!=""&&$_SESSION["code"]==$_POST["*Fcaptcha"])

{



   //echo $_REQUEST['*Fname'];

    // mail for customer.....

    //$from_email = "support@udai.com";

    //$mail_subject = "Thank you for writing to The American Holiday for your requirements.";



 

    // Read mail template.

   // $template_mail = "mail_template/contact.htm";

   // $handle_mail = fopen($template_mail, "r");

   // $template_mail_content = fread($handle_mail, filesize($template_mail));

   // fclose($handle_mail);

    

    //$message = $template_mail_content;



  //  $message = str_replace("/&/Name/&/", $_POST['*Fname'], $message);



 //   $Email = $_REQUEST['*Femail'];

   // $headers = "";

  //  $headers = 'MIME-Version: 1.0' . "\r\n";

  //  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  //  $headers .= "From: <" . $from_email . ">\n";

  //  $headers .= "X-Sender: <" . $from_email . ">\n";

  //  $headers .= "X-Mailer: PHP\n";

 //   $headers .= "Return-Path: <" . $from_email . ">\n";

  //  $mail_user = mail($Email, $mail_subject, $message, $headers);



// mail for admin.....

    $from_emai = $_REQUEST['*Femail'];

    

    $mail_subject = "someone has queried from" .$_REQUEST['project_name'];





    // Read mail template.

    $template_mail = "mail_template/contactadmin.htm";

    $handle_mail = fopen($template_mail, "r");

    $template_mail_content = fread($handle_mail, filesize($template_mail));

    fclose($handle_mail);



    $message = $template_mail_content;

    

    $message = str_replace("/&/Name/&/", $_POST['*Fname'], $message);

    $message = str_replace("/&/Email/&/", $_POST['*Femail'], $message);

    $message = str_replace("/&/Residence/&/", $_POST['*Fcity'], $message);

    $message = str_replace("/&/Tel/&/", $_POST['*Fphone'], $message);

	$message = str_replace("/&/IP/&/", $_POST['ip_address'], $message);

    $message = str_replace("/&/Message/&/", $_POST['query'], $message);





    $Emailadmin = 'info@udaipropmart.com';

    $headers = "";

    $headers = 'MIME-Version: 1.0' . "\r\n";

    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $headers .= "From: <" . $from_emai . ">\n";

    $headers .= "X-Sender: <" . $from_emai . ">\n";

    $headers .= "X-Mailer: PHP\n";

    $headers .= "Return-Path: <" . $from_emai . ">\n";

    $mail = mail($Emailadmin, $mail_subject, $message, $headers);

	if($mail)

	{

	//header("Location:http://www.theamericanholiday.com/campaign/international/china/thanks.php");

	$msg="your query has been submited";

	}



}



else

{

	$_SESSION['msg']="wrong captcha code";

	//header("Location:http://www.theamericanholiday.com/campaign/international/china/".$_REQUEST['page']);

	

}

?>



<div class="form-agt">



<div class="feedbackBox">



        <form action="" method="post" name="" id=""  onsubmit="return CheckRequiredFields();">



         



          <fieldset>

          <label style="font-size:12px; color:#F00;"><?=$msg;?></label>

          <label>Name *</label>



          <input type="text" name="*Fname" class="txtBox" id="*Fname" onblur="checkField(this);"/>



          <label>Email *</label>



          <input type="text" name="*Femail" class="txtBox" id="*Femail"  onblur="checkField(this);"/>



           <label>Contact no *</label>



          <input type="text" name="*Fphone" class="txtBox" id="*Fphone"  onblur="checkField(this);"/>



          <label>City *</label>



          <input type="text" name="*Fcity" class="txtBox" id="*Fcity" onblur="checkField(this);"/>



         <?php if($_SESSION['msg']!=''){   ?>

          <label style="width:180px;"><? echo $_SESSION['msg'];

		  session_destroy();

		   ?></label><? } else  { ?>

              

          <label style="width:180px;">Please enter code  <span style="color:#F00;">*</span></label> <? } ?>

          <input type="text" name="*Fcaptcha" class="txtBox" id="*Fcaptcha" onblur="checkField(this);" style="width:142px; margin-top:6px; margin-left:12px;"/><img src="captcha.php" style="margin-top:6px;"  />

          </fieldset>



          <label>Your Comment Enter:</label>



          <textarea name="query" class="txtArea"></textarea>



          <input type="Submit" name="Submit" class="submitButton" value="Submit"/>



          </fieldset>



        </form>



</div>







</div>







<div class="download"><a href="projectimages/<?=$row['brochures_file']; ?>" target="_blank" type="application/octet-stream">Download E-Brochure</a></div>







<div class="download" style="margin-top:5px;"">



<a href="projectimages/<?=$row['app_file']; ?>" target="_blank" type="application/octet-stream">Download <span style="font-size:16px;">Application Form</span></a>



</div>







<div class="yoga">



<div class="yoga_img">



<a href="locationmap.php?project_name=<?=$_REQUEST['project_name'];?> " ><img src="images/yoga-img.jpg" width="232" height="241" alt="yoga girl" /></a>



</div>



<div class="yoga_text">



<h1>Location Map</h1>



<h2>View on Map</h2> 



</div>







</div>



<script language="Javascript">





function CheckRequiredFields(){



var Jfname=Array();



var Jftype=Array();



var Jfcaption=Array();



var Jfvalidation=Array();



var Nfname=Array();



var Nftype=Array();



var Nfcaption=Array();



var Nfvalidation=Array();Jfname[0]='name';Jftype[0]='TextBox';Jfcaption[0]='Name';Jfvalidation[0]='NONE';Jfname[1]='email';Jftype[1]='TextBox';Jfcaption[1]='Email';Jfvalidation[1]='Email';Jfname[2]='phone';Jftype[2]='TextBox';Jfcaption[2]='Phone';Jfvalidation[2]='Numeric';Jfname[3]='city';Jftype[3]='TextBox';Jfcaption[3]='City';Jfvalidation[3]='NONE';Jfname[4]='captcha';Jftype[4]='TextBox';Jfcaption[4]='Captcha';Jfvalidation[4]='NONE';Nfname[0]='ip_address';Nftype[0]='Hidden';Nfcaption[0]='IP Address';Nfvalidation[0]='NONE';Nfname[1]='query';Nftype[1]='TextBox';Nfcaption[1]='Query';Nfvalidation[1]='NONE';for(var v=0;v<Jftype.length;v++){



  if(Jftype[v]=="TextBox" || Jftype[v]=="DropDown" || Jftype[v]=="DatePicker"){



	if(trim(document.getElementById("*F"+Jfname[v]).value)==""){



		alert(Jfcaption[v]+" is required!!");

		document.getElementById("*F"+Jfname[v]).value="";

		document.getElementById("*F"+Jfname[v]).focus();



		return false;

	}



if(Jftype[v]=="DatePicker" && trim(document.getElementById("*F"+Jfname[v]).value)!=""){



var objFromDate =document.getElementById("*F"+Jfname[v]).value;



objFromDate=objFromDate.replace(/-/g,"/");



array=objFromDate.split("/");



objFromDate=array[1]+"/"+array[0]+"/"+array[2];



var Date1 = new Date(objFromDate);



var Date2 = new Date();



var date_months=(Date2.getMonth())+1;



var date_date=Date2.getDate();



var date_year=Date2.getFullYear();



var prodate=date_months+"/"+date_date+"/"+date_year;



Date2 = new Date(prodate);



if (Date1 < Date2 )

 {



alert(Jfcaption[v]+" should be greater than Current date");



document.getElementById("*F"+Jfname[v]).focus();



return false;



 }



}



var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;





if (Jfvalidation[v]=="Numeric"  && isNaN(trim(document.getElementById("*F"+Jfname[v]).value))== true ) {



alert(Jfcaption[v] + "  Must be a  number");



document.getElementById("*F"+Jfname[v]).focus();



return false;

}





  if(Jfvalidation[v]=="Email" &&  reg.test(trim(document.getElementById("*F"+Jfname[v]).value)) == false )  {



	alert("Invalid  " +Jfcaption[v]);



	document.getElementById("*F"+Jfname[v]).focus();



	return false;



  }





  }

  else  if(Jftype[v]=="CheckBox"){



  a=document.forms[0].elements["*F"+Jfname[v]];



  var found=false;



  for(var t=0;t<a.length;t++)

  {

      if(a[t].checked==true)

	    {

	     found="true";

	    break;

		}

 }

if(found==false){



		alert(Jfcaption[v]+" Are required!!");



		document.getElementById("*F"+Jfname[v]).focus();



		return false;



}



}



}

<!-- #################################### -->



for(var v=0;v<Nftype.length;v++){

if(Nftype[v]=="DatePicker" && trim(document.getElementById(Nfname[v]).value)!=""){



var objFromDate =document.getElementById(Nfname[v]).value;



objFromDate=objFromDate.replace(/-/g,"/");



array=objFromDate.split("/");



objFromDate=array[1]+"/"+array[0]+"/"+array[2];



var Date1 = new Date(objFromDate);



var Date2 = new Date();



var date_months=(Date2.getMonth())+1;



var date_date=Date2.getDate();



var date_year=Date2.getFullYear();



var prodate=date_months+"/"+date_date+"/"+date_year;



Date2 = new Date(prodate);



if (Date1 < Date2 )

 {



alert(Nfcaption[v]+" should be greater than Current date");



document.getElementById(Nfname[v]).focus();



return false;



 }



}



var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;





if (Nfvalidation[v]=="Numeric" && trim(document.getElementById(Nfname[v]).value)!="" && isNaN(document.getElementById(Nfname[v]).value)== true ) {



alert(Nfcaption[v] + "  Must be a  number");



document.getElementById(Nfname[v]).focus();



return false;

}





if(Nfvalidation[v]=="Email" && trim(document.getElementById(Nfname[v]).value)!="" &&  reg.test(document.getElementById(Nfname[v]).value) == false )  {



	alert("Invalid  " +Nfcaption[v]);



	document.getElementById(Nfname[v]).focus();



	return false;



  }

}



<!-- ####################################### -->



document.getElementById("form_submit").disabled = true;



}

function trim(E)

 {

 return(E||"").replace(/^\s+|\s+$/g,"");

 }

</script>