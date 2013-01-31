<?php require_once('/home/users/web/b2275/d5.remaxove/etc/conn_4pr.php'); ?>
<?php 
	session_save_path("/home/users/web/b2275/d5.remaxove/public_html");
	session_start();
	/*name, phone, email, info, photo*/
	$query_rs_team = "SELECT * FROM team ORDER BY name ASC";
	$rs_team = mysql_query($query_rs_team, $dbConn) or die(mysql_error());
	$row_rs_team = mysql_fetch_assoc($rs_team);
?>
<?php include("assets/meta.shtml"); ?>
<title>Performance Realty</title>
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
        <h2>Our Team</h2>
        <h1>Meet Our Team</h1>
        <!-- END CONTENT -->
        <!-- DO NOT EDIT BELOW HERE -->
        <?php
          	do {
		  ?>
          <div style="float:left; padding-bottom:10px; width:303px; height:100px;">
          <a href="admin/editteam.php?id=<?php echo $row_rs_team['id']; ?>"><img src="<?php echo $row_rs_team['photo']; ?>" style="float:left; margin-right:5px; width:84px; height:84px;" /></a>
          <p>
		  <?php echo $row_rs_team['name']; ?><br />
          <?php echo $row_rs_team['phone']; ?><br />
          <a href="mailto:<?php echo $row_rs_team['email']; ?>"><?php echo $row_rs_team['email']; ?></a><br />
          <?php
		  	if ($_SESSION['accesslevel']=="Admin"){
				echo "<a href='admin/deleteteam.php?id=".$row_rs_team['id']."' class='button'>Delete Team Member</a>";
			}
		  ?>
          </p>
          </div>
		  <?php } while ($row_rs_team = mysql_fetch_assoc($rs_team)); ?>
          <div id="floatfix" style="clear:both;"></div>
        <?php if ($_SESSION['accesslevel']=="Admin"){ ?>
        <p style="clear:both; padding-top:10px;"><a href="admin/addteam.php" class="button">Add Team Member</a>
        <a href="admin/logout.php" class="button">Log Out</a></p>
        <?php } ?>
        
        </div>
    </div>
  </div>
  <?php include ("assets/footer.shtml"); ?>
<?php mysql_free_result($rs_team); ?>