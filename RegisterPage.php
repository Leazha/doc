<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
<style type="text/css">
body {
	background-image: url(Backgrounds/Vector29.jpg);
}
#apDiv1 {
	position:absolute;
	left:256px;
	top:287px;
	width:671px;
	height:431px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:450px;
	top:109px;
	width:331px;
	height:46px;
	z-index:2;
}
#apDiv1 #form1 div table tr td {
	font-family: Arial;
	color: #333;
	font-weight: bold;
	font-size: 18;
}
#apDiv1 #form1 div table {
	color: #F0F;
}
#apDiv3 {
	position:absolute;
	left:116px;
	top:106px;
	width:230px;
	height:121px;
	z-index:2;
}
#apDiv4 {
	position:absolute;
	left:352px;
	top:105px;
	width:229px;
	height:124px;
	z-index:3;
}
#apDiv5 {
	position:absolute;
	left:590px;
	top:103px;
	width:221px;
	height:126px;
	z-index:4;
}
#apDiv6 {
	position:absolute;
	left:838px;
	top:102px;
	width:216px;
	height:125px;
	z-index:5;
}
</style>
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

<body onload="MM_preloadImages('Buttons/HOME2.png','Buttons/ABT2.png','Buttons/GALL2.png','Buttons/CONTACT2.png')">
<div id="apDiv3"><a href="HomePage.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','Buttons/HOME2.png',1)"><img src="Buttons/HOME1.png" name="Image1" width="229" height="122" border="0" id="Image1" /></a></div>
<div id="apDiv4"><a href="AboutPage.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','Buttons/ABT2.png',1)"><img src="Buttons/ABT1.png" name="Image2" width="228" height="125" border="0" id="Image2" /></a></div>
<div id="apDiv5"><a href="GallaryPage.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','Buttons/GALL2.png',1)"><img src="Buttons/GAL1.png" name="Image3" width="240" height="127" border="0" id="Image3" /></a></div>
<div id="apDiv6"><a href="ContactPage.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','Buttons/CONTACT2.png',1)"><img src="Buttons/CONTACT1.png" name="Image4" width="218" height="129" border="0" id="Image4" /></a></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="apDiv1">
  <form id="form1" name="form1" method="post" action="RegisterPage.php">
    <div align="left">
      <table width="668" height="340" border="0">
        <tr>
          <td width="372">First Name/Names:</td>
          <td width="286"><label for="firstName"></label>
          <input type="text" name="firstName" id="firstName" width="250"/></td>
        </tr>
        <tr>
          <td>Last Name:</td>
          <td><label for="lastName"></label>
          <input type="text" name="lastName" id="lastName" width="250"/></td>
        </tr>
        <tr>
          <td height="31">Physical Address:</td>
          <td><label for="physcAddre"></label>
          <input type="text" name="physcAddre" id="physcAddre" width="250"/></td>
        </tr>
        <tr>
          <td>Preffered Username:</td>
          <td><label for="username"></label>
          <input type="text" name="username" id="username" width="250"/></td>
        </tr>
        <tr>
          <td>Contact Number:</td>
          <td><label for="contactNum"></label>
          <input type="text" name="contactNum" id="contactNum" width="250"/></td>
        </tr>
        <tr>
          <td>Password(Should be 6 characers long):</td>
          <td><input type="text" name="password" id="password" width="250"/></td>
        </tr>
        <tr>
          <td>Retype Password:</td>
          <td><input type="text" name="passwrd2" id="passwrd2" width="250"/></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
            <input type="submit" name="btnSubmitt" id="btnSubmitt" value="Register" />
          </div></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
<p>&nbsp;</p>
    </div>
  </form>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>

<?php
	error_reporting(E_ALL ^ E_NOTICE);
	
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$cotactNum = $_POST['contactNum'];
	$address = $_POST['physcAddre'];
	$username=$_POST['username'];
	$passwd=$_POST['password'];
	$passwd2=$_POST['password2'];
	
	if(!$firstName || !$lastName || !$cotactNum || !$address || !$username || !$passwd || !$passwd2)
	{
		echo "Pleas make sure all the fields are filled in!!";
	}
	else if($passwd != $passwd2)
	{
		echo '<p align="center" >'."Passwords do not match.!!".'</br>'."Please go back and retype password!!".'              </p>';
		exit;
	}
	
	$conn = mysql_connect('localhost','expresso','management');
	
		$query = "INSERT INTO `expresso_shoes_db`.`user_tb` (`user_id`, `user_fname`, `user_lname`, `username`, `phys_address`, `contact_num`, `password`) VALUES (NULL, '".$firstName."', '".$lastName."', '".$username."', '".$address."', '".$cotactNum."', '".$passwd."')";
	
	
	
	
	
?>