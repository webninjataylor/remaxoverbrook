<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
$to      = 'remaxperformance@comcast.net';
$subject = "Overbrook: " . $_POST['subject'];
$message = $_POST['body'];
$headers  = 'From: ' . $_POST['emailAddress'] . "\r\n" . 
			'Cc: ' . $_POST['emailAddress'];
mail($to, $subject, $message, $headers);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Overbrook</title>
<meta name="Author" content="Taylor Johnson, T&T Graphics" />
<meta name="keywords" content="Overbrook, Harrisonburg, VA, Virginia, Real Estate, Realty, Buildings, Lots, Lot, Subdivisions, Subdivision" />
<!--SMOOTH PAGE TRANSITIONS-->
<meta http-equiv="Page-Enter" content="revealtrans(duration=0,transition=1)" />
<style type="text/css">
<!--
a {
	color: #45487E;
}
-->
</style>
</head>
<body style="background:url(images/background.jpg) no-repeat fixed bottom;">
<!--START CONTENT-->
<div id="logoFinal" style="position:absolute; top:20; z-index:101; left:20px; width: 431px; height: 150px;"><img src="images/logoOverbrook.jpg" width="431" height="150" align="left" /></div>
<div id="balloon" style="position:absolute; top:20px; z-index:103; left:476px; height: 150px; width: 116px;"><img src="images/logoRemax.gif" width="116" height="150" align="left" /></div>
<div id="content" style="border:12px double #45487E; background-color:#FFFFFF; padding:10px; color:#555555; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height:1.5; width:591px; position:absolute; top:180px; z-index:102; left:23px;">
      Thank you for your email.<br />
  A copy has been sent to you as a courtesy for your records.<br />
  We will respond to your request in a timely manner.
  <br />
  <a href="index.php"><strong>Return to main page.</strong></a>  
  <div style="text-align:center;"><br />
  <div style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; text-align: center; color:#555555;">&#0169;Copyright 2006 Overbrook. All rights reserved.<br />
  <a href="http://www.tt-graphics.com">Design by T&amp;T Graphics</a></div></div>
</div>
<div id="mountain1" style="border:12px double #45487E; background-color:#FFFFFF; color:#555555; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; position:absolute; top:180px; z-index:105; left:23px; visibility: hidden;"><a href="#" onclick="document.getElementById('mountain1').style.visibility='hidden'; document.getElementById('content').style.visibility='visible'; return false;"><img src="images/mountain1.jpg" width="567" height="271" border="0" /></a>
<p style="padding:10px; margin-top:-5px; margin-bottom:-5px; font-weight:bold; text-align:center;"><a href="#" onclick="document.getElementById('mountain1').style.visibility='hidden'; document.getElementById('content').style.visibility='visible'; return false;">Close</a>&#160;&#160;&#160;|&#160;&#160;&#160;<a href="javascript:window.print();">Print</a></p></div>
<div id="mountain2" style="border:12px double #45487E; background-color:#FFFFFF; color:#555555; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; position:absolute; top:180px; z-index:105; left:23px; visibility: hidden;"><a href="#" onclick="document.getElementById('mountain2').style.visibility='hidden'; document.getElementById('content').style.visibility='visible'; return false;"><img src="images/mountain2.jpg" width="567" height="381" border="0" /></a>
<p style="padding:10px; margin-top:-5px; margin-bottom:-5px; font-weight:bold; text-align:center;"><a href="#" onclick="document.getElementById('mountain2').style.visibility='hidden'; document.getElementById('content').style.visibility='visible'; return false;">Close</a>&#160;&#160;&#160;|&#160;&#160;&#160;<a href="javascript:window.print();">Print</a></p></div>
<div id="mountain3" style="border:12px double #45487E; background-color:#FFFFFF; color:#555555; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; position:absolute; top:180px; z-index:105; left:23px; visibility: hidden;"><a href="#" onclick="document.getElementById('mountain3').style.visibility='hidden'; document.getElementById('content').style.visibility='visible'; return false;"><img src="images/mountain3.jpg" width="567" height="270" border="0" /></a>
<p style="padding:10px; margin-top:-5px; margin-bottom:-5px; font-weight:bold; text-align:center;"><a href="#" onclick="document.getElementById('mountain3').style.visibility='hidden'; document.getElementById('content').style.visibility='visible'; return false;">Close</a>&#160;&#160;&#160;|&#160;&#160;&#160;<a href="javascript:window.print();">Print</a></p></div>
<div id="map" style="border:12px double #45487E; background-color:#FFFFFF; color:#555555; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; position:absolute; top:180px; z-index:105; left:23px; visibility: hidden;"><a href="#" onclick="document.getElementById('map').style.visibility='hidden'; document.getElementById('content').style.visibility='visible'; return false;"><img src="images/map.gif" width="567" height="458" border="0" style="border-bottom:1px solid #000000;" /></a>
<p style="padding:10px; margin-top:-5px; margin-bottom:-5px; font-weight:bold; text-align:center;"><a href="#" onclick="document.getElementById('map').style.visibility='hidden'; document.getElementById('content').style.visibility='visible'; return false;">Close</a>&#160;&#160;&#160;|&#160;&#160;&#160;<a href="javascript:window.print();">Print</a></p></div>
<div id="plat" style="border:12px double #45487E; background-color:#FFFFFF; color:#555555; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; position:absolute; top:20px; z-index:105; left:23px; visibility: hidden;"><a href="#" onclick="document.getElementById('plat').style.visibility='hidden'; document.getElementById('content').style.visibility='visible'; return false;"><img src="images/plat.gif" width="557" height="739" border="0" style="border-bottom:1px solid #000000;" /></a>
<p style="padding:10px; margin-top:-5px; margin-bottom:-5px; font-weight:bold; text-align:center;"><a href="#" onclick="document.getElementById('plat').style.visibility='hidden'; document.getElementById('content').style.visibility='visible'; return false;">Close</a>&#160;&#160;&#160;|&#160;&#160;&#160;<a href="#" onclick="window.print(); return false;">Print</a></p></div>
<!--END CONTENT-->
</body>
</html>
