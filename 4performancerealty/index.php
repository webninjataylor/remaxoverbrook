<?php require_once('/home/users/web/b2275/d5.remaxove/etc/conn_4pr.php'); ?>
<?php 
	/*name, phone, email, info, photo*/
	$query_rs_team = "SELECT * FROM team ORDER BY name ASC";
	$rs_team = mysql_query($query_rs_team, $dbConn) or die(mysql_error());
	$row_rs_team = mysql_fetch_assoc($rs_team);
?>
<?php include("assets/meta.shtml"); ?>
<title>Performance Realty</title>
<style>
.website_top_banner_header {
	display:none;
}
.box {
	border:1px solid #0f3658;
	-moz-border-radius:5px;
	-khtml-border-radius:5px;
	padding:3px;
}
</style>
<?php include("assets/header.shtml"); ?>
  <!-- TOP MENU -->
  <div id="menuTop">
    <?php include("assets/menu.shtml"); ?>
  </div>
  <div id="content">
    <div id="mainContent3">
      <div class="container">
        <!-- DO NOT EDIT ABOVE HERE -->
        <!-- START CONTENT -->
        <h2>Home</h2>
        <p style="font-style:italic; font-size:24px; font-weight:bold; margin:-10px 0px 10px 0px; color:#ba1b1f;">A whole new level of service!</p>
        <?php do { ?>
          
        <a href="team.php"><img src="<?php echo $row_rs_team['photo']; ?>" style="float:left; margin:0px 5px 5px 0px; width:84px; height:84px;" /></a>
		<?php } while ($row_rs_team = mysql_fetch_assoc($rs_team)); ?>
          
          
          
          
          <p style="clear:both; font-style:italic; font-size:18px; font-weight:bold; margin:0px; color:#ba1b1f;">Start searching for your new home now!</p>
          
          <iframe src="http://framing.usamls.net/framing/default.asp?f_id=R%5DVWRWWRWV%5DR" background="inherit" frameborder="0" height="700" width="855"></iframe>
        
        <!-- END CONTENT -->
        <!-- DO NOT EDIT BELOW HERE -->
      </div>
    </div>
  </div>
  <?php include ("assets/footer.shtml"); ?>
<?php mysql_free_result($rs_team); ?>