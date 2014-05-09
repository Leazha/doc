<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<style type="text/css">
body {
	background-image: url(Backgrounds/Vector29.jpg);
}
#apDiv1 {
	position:absolute;
	left:269px;
	top:202px;
	width:431px;
	height:168px;
	z-index:1;
	text-align: center;
}
#apDiv2 {
	position:absolute;
	left:77px;
	top:42px;
	width:220px;
	height:110px;
	z-index:2;
}
#apDiv3 {
	position:absolute;
	left:309px;
	top:41px;
	width:218px;
	height:114px;
	z-index:3;
}
#apDiv4 {
	position:absolute;
	left:538px;
	top:41px;
	width:219px;
	height:110px;
	z-index:4;
}
#apDiv5 {
	position:absolute;
	left:764px;
	top:40px;
	width:217px;
	height:111px;
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

<body onload="MM_preloadImages('Buttons/ABT2.png','Buttons/GALL2.png','Buttons/CONTACT2.png')">

<div id="apDiv1">
  <form id="form1" name="form1" method="post" action="">
    <div align="center">
      <p>&nbsp;</p>
      <div align="left"></div>
      <table width="330" height="121" border="1">
        <tr>
          <td width="91">Username:</td>
          <td width="177"><label for="txtUsername"></label>
          <input type="text" name="txtUsername" id="txtUsername" /></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="text" name="txtPassword" id="txtPassword" /></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
            <input type="submit" name="button" id="button" value="Login" />
          </div></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </div>
  </form>
</div>
<div id="apDiv2"><a href="HomePage.php"><img src="Buttons/HOME1.png" name="Image1" width="220" height="113" border="0" id="Image1" /></a></div>
<div id="apDiv3"><a href="AboutPage.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','Buttons/ABT2.png',1)"><img src="Buttons/ABT1.png" name="Image2" width="220" height="113" border="0" id="Image2" /></a></div>
<div id="apDiv4"><a href="GallaryPage.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','Buttons/GALL2.png',1)"><img src="Buttons/GAL1.png" name="Image3" width="220" height="113" border="0" id="Image3" /></a></div>
<div id="apDiv5"><a href="ContactPage.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','Buttons/CONTACT2.png',1)"><img src="Buttons/CONTACT1.png" name="Image4" width="220" height="113" border="0" id="Image4" /></a></div>

</body>
</html>

<?php
	$txtUsername=$_POST['username'];
	$txtPassword=$_POST['password'];

	if(!$txtPassword || !$txtUsername)
	{
		echo 'Go back and fill all the required fields';
		exit;
	}
	
	$conn = mysql_connect('localhost', 'itn30at', 'mpumelelo');
   if(!$conn)
   {
      echo "Connection failed";
	  exit;
   }
   
 	$db=mysql_select_db('expresso');
   if(!$db)
   {
      echo 'Database selection failed';
	  exit;
   }
   if($txtUserName==$username || $txtPassword==$password )
   {
	   echo "Successfully loged in!!";
   }
   else
   {
	   echo "Incorrect password or username";
   }
?>