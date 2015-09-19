// JavaScript Document
function validate()
{
	var a=document.forms["myform"]["fname"].value;
	var b=document.forms["myform"]["lname"].value;
	var c=document.forms["myform"]["uname"].value;
	var w=document.forms["myform"]["password"].value;
	var x=document.forms["myform"]["phno"].value;
	var y=document.forms["myform"]["email"].value;
	if(a==""||a==null)
	{
		alert("Please Write the First Name");
		document.myform.fname.focus();
		return false;
	}
	if(b==""||b==null)
	{
		alert("Please Write the Last Name");
		document.myform.lname.focus();
		return false;
	}
	if(c==""||c==null)
	{
		alert("Please Write the User Name");
		document.myform.uname.focus();
		return false;
	}
	if(w==""||w==null)
	{
		alert("Please Write the Password");
		document.myform.password.focus();
		return false;
	}
	if(x==""||x==null)
	{
		alert("Please Write the Mobile No");
		document.myform.phno.focus();
		return false;
	}
	if(y==""||y==null)
	{
		alert("Please Write the Email Id");
		document.myform.email.focus();
		return false;
	}
}
function validatelogin()
{
	var x=document.login.uname.value;
	var y=document.login.pass.value;
	if(x==""||x==null)
	{
		alert("fill the user name/email id Please!");
		document.login.uname.focus();
		return false;
	}
	if(y==""||y==null)
	{
		alert("Enter the password");
		document.login.pass.focus();
		return false;
	}
}