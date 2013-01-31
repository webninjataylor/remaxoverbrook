<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Overbrook</title>
<meta name="Author" content="Taylor Johnson, T&T Graphics" />
<meta name="keywords" content="Overbrook, Harrisonburg, VA, Virginia, Real Estate, Realty, Buildings, Lots, Lot, Subdivisions, Subdivision" />
<!--SMOOTH PAGE TRANSITIONS-->
<meta http-equiv="Page-Enter" content="revealtrans(duration=0,transition=1)" />
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_timelinePlay(tmLnName, myID) { //v1.2
  //Copyright 1998, 1999, 2000, 2001, 2002, 2003, 2004 Macromedia, Inc. All rights reserved.
  var i,j,tmLn,props,keyFrm,sprite,numKeyFr,firstKeyFr,propNum,theObj,firstTime=false;
  if (document.MM_Time == null) MM_initTimelines(); //if *very* 1st time
  tmLn = document.MM_Time[tmLnName];
  if (myID == null) { myID = ++tmLn.ID; firstTime=true;}//if new call, incr ID
  if (myID == tmLn.ID) { //if Im newest
    setTimeout('MM_timelinePlay("'+tmLnName+'",'+myID+')',tmLn.delay);
    fNew = ++tmLn.curFrame;
    for (i=0; i<tmLn.length; i++) {
      sprite = tmLn[i];
      if (sprite.charAt(0) == 's') {
        if (sprite.obj) {
          numKeyFr = sprite.keyFrames.length; firstKeyFr = sprite.keyFrames[0];
          if (fNew >= firstKeyFr && fNew <= sprite.keyFrames[numKeyFr-1]) {//in range
            keyFrm=1;
            for (j=0; j<sprite.values.length; j++) {
              props = sprite.values[j]; 
              if (numKeyFr != props.length) {
                if (props.prop2 == null) sprite.obj[props.prop] = props[fNew-firstKeyFr];
                else        sprite.obj[props.prop2][props.prop] = props[fNew-firstKeyFr];
              } else {
                while (keyFrm<numKeyFr && fNew>=sprite.keyFrames[keyFrm]) keyFrm++;
                if (firstTime || fNew==sprite.keyFrames[keyFrm-1]) {
                  if (props.prop2 == null) sprite.obj[props.prop] = props[keyFrm-1];
                  else        sprite.obj[props.prop2][props.prop] = props[keyFrm-1];
        } } } } }
      } else if (sprite.charAt(0)=='b' && fNew == sprite.frame) eval(sprite.value);
      if (fNew > tmLn.lastFrame) tmLn.ID = 0;
  } }
}

function MM_initTimelines() { //v4.0
    //MM_initTimelines() Copyright 1997 Macromedia, Inc. All rights reserved.
    var ns = navigator.appName == "Netscape";
    var ns4 = (ns && parseInt(navigator.appVersion) == 4);
    var ns5 = (ns && parseInt(navigator.appVersion) > 4);
    var macIE5 = (navigator.platform ? (navigator.platform == "MacPPC") : false) && (navigator.appName == "Microsoft Internet Explorer") && (parseInt(navigator.appVersion) >= 4);
    document.MM_Time = new Array(1);
    document.MM_Time[0] = new Array(4);
    document.MM_Time["Timeline1"] = document.MM_Time[0];
    document.MM_Time[0].MM_Name = "Timeline1";
    document.MM_Time[0].fps = 15;
    document.MM_Time[0][0] = new String("sprite");
    document.MM_Time[0][0].slot = 1;
    if (ns4)
        document.MM_Time[0][0].obj = document["balloon"];
    else if (ns5)
        document.MM_Time[0][0].obj = document.getElementById("balloon");
    else
        document.MM_Time[0][0].obj = document.all ? document.all["balloon"] : null;
    document.MM_Time[0][0].keyFrames = new Array(1, 45);
    document.MM_Time[0][0].values = new Array(3);
    if (ns5 || macIE5)
        document.MM_Time[0][0].values[0] = new Array("-120px", "-106px", "-93px", "-79px", "-66px", "-52px", "-39px", "-25px", "-12px", "2px", "15px", "29px", "43px", "56px", "70px", "83px", "97px", "110px", "124px", "137px", "151px", "164px", "178px", "192px", "205px", "219px", "232px", "246px", "259px", "273px", "286px", "300px", "313px", "327px", "341px", "354px", "368px", "381px", "395px", "408px", "422px", "435px", "449px", "462px", "476px");
    else
        document.MM_Time[0][0].values[0] = new Array(-120,-106,-93,-79,-66,-52,-39,-25,-12,2,15,29,43,56,70,83,97,110,124,137,151,164,178,192,205,219,232,246,259,273,286,300,313,327,341,354,368,381,395,408,422,435,449,462,476);
    document.MM_Time[0][0].values[0].prop = "left";
    if (ns5 || macIE5)
        document.MM_Time[0][0].values[1] = new Array("170px", "167px", "163px", "160px", "156px", "153px", "150px", "146px", "143px", "139px", "136px", "133px", "129px", "126px", "122px", "119px", "115px", "112px", "109px", "105px", "102px", "98px", "95px", "92px", "88px", "85px", "81px", "78px", "75px", "71px", "68px", "64px", "61px", "57px", "54px", "51px", "47px", "44px", "40px", "37px", "34px", "30px", "27px", "23px", "20px");
    else
        document.MM_Time[0][0].values[1] = new Array(170,167,163,160,156,153,150,146,143,139,136,133,129,126,122,119,115,112,109,105,102,98,95,92,88,85,81,78,75,71,68,64,61,57,54,51,47,44,40,37,34,30,27,23,20);
    document.MM_Time[0][0].values[1].prop = "top";
    if (!ns4) {
        document.MM_Time[0][0].values[0].prop2 = "style";
        document.MM_Time[0][0].values[1].prop2 = "style";
    }
    if (ns5 || macIE5)
        document.MM_Time[0][0].values[2] = new Array("116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px", "116px");
    else
        document.MM_Time[0][0].values[2] = new Array(116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116,116);
    document.MM_Time[0][0].values[2].prop = "width";
    if (!ns4)
        document.MM_Time[0][0].values[2].prop2 = "style";
    document.MM_Time[0][1] = new String("sprite");
    document.MM_Time[0][1].slot = 2;
    if (ns4)
        document.MM_Time[0][1].obj = document["logo"];
    else if (ns5)
        document.MM_Time[0][1].obj = document.getElementById("logo");
    else
        document.MM_Time[0][1].obj = document.all ? document.all["logo"] : null;
    document.MM_Time[0][1].keyFrames = new Array(1, 15);
    document.MM_Time[0][1].values = new Array(1);
    document.MM_Time[0][1].values[0] = new Array("hidden","visible");
    document.MM_Time[0][1].values[0].prop = "visibility";
    if (!ns4)
        document.MM_Time[0][1].values[0].prop2 = "style";
    document.MM_Time[0][2] = new String("sprite");
    document.MM_Time[0][2].slot = 3;
    if (ns4)
        document.MM_Time[0][2].obj = document["content"];
    else if (ns5)
        document.MM_Time[0][2].obj = document.getElementById("content");
    else
        document.MM_Time[0][2].obj = document.all ? document.all["content"] : null;
    document.MM_Time[0][2].keyFrames = new Array(1, 50);
    document.MM_Time[0][2].values = new Array(1);
    document.MM_Time[0][2].values[0] = new Array("hidden","visible");
    document.MM_Time[0][2].values[0].prop = "visibility";
    if (!ns4)
        document.MM_Time[0][2].values[0].prop2 = "style";
    document.MM_Time[0][3] = new String("sprite");
    document.MM_Time[0][3].slot = 4;
    if (ns4)
        document.MM_Time[0][3].obj = document["logoFinal"];
    else if (ns5)
        document.MM_Time[0][3].obj = document.getElementById("logoFinal");
    else
        document.MM_Time[0][3].obj = document.all ? document.all["logoFinal"] : null;
    document.MM_Time[0][3].keyFrames = new Array(1, 45);
    document.MM_Time[0][3].values = new Array(1);
    document.MM_Time[0][3].values[0] = new Array("hidden","visible");
    document.MM_Time[0][3].values[0].prop = "visibility";
    if (!ns4)
        document.MM_Time[0][3].values[0].prop2 = "style";
    document.MM_Time[0].lastFrame = 50;
    for (i=0; i<document.MM_Time.length; i++) {
        document.MM_Time[i].ID = null;
        document.MM_Time[i].curFrame = 0;
        document.MM_Time[i].delay = 1000/document.MM_Time[i].fps;
    }
}
//-->
</script>
<style type="text/css">
<!--
a {
	color: #45487E;
}
-->
</style>
</head>
<body style="background:url(images/background.jpg) no-repeat fixed bottom;" onload="MM_timelinePlay('Timeline1')">
<!--START CONTENT-->
<div id="logo" style="position:absolute; top:20; z-index:101; left:20px; width: 431px; height: 150px; visibility:hidden;"><img src="images/logoOverbrook.gif" width="431" height="150" align="left" /></div>
<div id="logoFinal" style="position:absolute; top:20; z-index:101; left:20px; width: 431px; height: 150px; visibility:hidden;"><img src="images/logoOverbrook.jpg" width="431" height="150" align="left" /></div>
<div id="balloon" style="position:absolute; top:170px; z-index:103; left:-120px; height: 150px; width: 116;"><img src="images/logoRemax.gif" width="116" height="150" align="left" /></div>
<div id="content" style="border:12px double #45487E; background-color:#FFFFFF; padding:10px; color:#555555; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height:1.5; width:591px; position:absolute; top:180px; z-index:102; left:23px; visibility: hidden;">
  <table width="100%"  border="0" cellspacing="0" cellpadding="0" style="color:#555555; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height:1.5;">
    <tr align="center">
      <td width="50%"><strong>3 miles east of Harrisonburg, VA<br />
      <a href="#" onclick="document.getElementById('map').style.visibility='visible'; document.getElementById('content').style.visibility='hidden'; return false;"><img src="images/va.gif" width="196" height="101" border="0" align="absmiddle" /></a> <br />
      <a href="#" onclick="document.getElementById('map').style.visibility='visible'; document.getElementById('content').style.visibility='hidden'; return false;">View Map</a>&#160;&#160;&#160;|&#160;&#160;&#160;<a href="#" onclick="document.getElementById('plat').style.visibility='visible'; document.getElementById('content').style.visibility='hidden'; return false;">View Plat</a>
</strong></td>
    </tr>
  </table>
  <h1>TEST</h1>
  <p><strong>Beautiful residential subdivision with great views and <a href="assets/covenants.pdf" target="_blank">protective covenants</a></strong>&mdash;Overbrook differs from other planned communities, not only because of its beautiful views of the Massanutten and Blue Ridge mountains, but also its lush open green spaces that everyone can enjoy.  <strong>39% of Overbrook's Phase 1 is dedicated open space</strong> for you to play in, go for a walk, or just spend time with Mother Nature:</p>
  <ul>
    <li>Numerous common areas for walking and recreation</li>
    <li>Close to schools, shopping, and <strong>NEW</strong> hospital
      <ul>
        <li><a href="http://www.rockingham.k12.va.us/CRES/cres.html">Cub Run Elementary</a> (1 mile) - <strong>NEW</strong></li>
        <li><a href="http://www.rockingham.k12.va.us/MMS/index.html">Montevideo Middle School</a> (1 mile)</li>
        <li><a href="http://www.rockingham.k12.va.us/SHS/SHS.html">Spotswood High School</a> (2 miles)</li>
      </ul>
    </li>
    <li>Public roads maintained by V-DOT</li>
	<li>Public water and sewer</li>
    <li>Home owners association fees (not formed as of this date)</li>
    <li>Lot prices starting at $59,900</li>
    <li><a href="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=McGaheysville,+Virginia&amp;sll=37.0625,-95.677068&amp;sspn=44.339735,79.013672&amp;ie=UTF8&amp;ll=38.392263,-78.758583&amp;spn=0.172217,0.308647&amp;z=12&amp;iwloc=A">Only 9 miles from downtown Harrisonburg and Elkton</a></li>
    <li>Choose your own builder or use one of our's</li>
  </ul>
  <p><strong>Contact</strong><br />
    Larry Martin<br />
    RE/MAX Performance Realty<br />
    Toll Free: 1-800-643-2389<br />
    Cell: 1-540-820-8212
    <br />
    <a href="contact.php">Email Us</a></p>
    <p><strong>Plats</strong><br />
    Phase 2: <a href="images/overbrookPlats_phase2a.gif">Overview</a><br />
    Phase 2: <a href="images/overbrookPlats_phase2b.gif">Lots 10-14</a><br />
    Phase 2: <a href="images/overbrookPlats_phase2c.gif">Lots 15-21</a><br />
    Phase 2: <a href="images/overbrookPlats_phase2d.gif">Lots 22-24</a><br />
    Phase 3: <a href="images/overbrookPlats_phase3a.gif">Lots 25-30</a><br />
    Phase 4: <a href="images/overbrookPlats_phase4a.gif">Overview</a><br />
    Phase 4: <a href="images/overbrookPlats_phase4b.gif">Lots 31, 32, 49, 50, 57, &amp; 58</a><br />
    </p>
  <div style="text-align:center;"><a href="#" onclick="document.getElementById('sign').style.visibility='visible'; document.getElementById('content').style.visibility='hidden'; return false;"><img src="images/signTN.jpg" alt="Mountains" width="177" height="89" border="0" style="border:1px solid #45487E;" /></a><br /><a href="#" onclick="document.getElementById('mountain1').style.visibility='visible'; document.getElementById('content').style.visibility='hidden'; return false;"><img src="images/mountain1TN.jpg" alt="Mountains" width="177" height="89" border="0" style="border:1px solid #45487E;" /></a><a href="#" onclick="document.getElementById('mountain2').style.visibility='visible'; document.getElementById('content').style.visibility='hidden'; return false;"><img src="images/mountain2TN.jpg" alt="Mountains" width="177" height="89" border="0" style="margin-left:5px; border:1px solid #45487E;" /></a><a href="#" onclick="document.getElementById('mountain3').style.visibility='visible'; document.getElementById('content').style.visibility='hidden'; return false;"><img src="images/mountain3TN.jpg" alt="Mountains" width="177" height="89" border="0" style="margin-left:5px; border:1px solid #45487E;" /></a><br />
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
