<?php require_once('/home/users/web/b2275/d5.remaxove/etc/conn_4pr.php'); ?>
<?php include("sessioncheck.php"); ?>
<?php
	$query_rs_team = "SELECT * FROM team WHERE id = ".$_GET['id'];
	$rs_team = mysql_query($query_rs_team);
	$row_rs_team = mysql_fetch_assoc($rs_team);
?>
<?php include("../assets/meta.shtml"); ?>
<title>Performance Realty</title>
<?php include("../assets/header.shtml"); ?>
  <div id="content" style="padding-top:0px;">
    <div id="mainContent3">
      <div class="container">
        <!-- DO NOT EDIT ABOVE HERE -->
        <!-- START CONTENT -->
        <h2>Add Event <a href="logout.php" class="button" style="display:block; float:right; font-size:12px; height:15px;">Log Out</a></h2>
        <form name="editteam" id="editteam" method="post" action="editteam_processor.php?id=<?php echo $_GET['id']; ?>">
          <table cellspacing="0" cellpadding="3">
            <tr>
              <td align="right"><strong>Name:</strong></td>
              <td><input name="name" type="text" id="name" style="width:700px;" value="<?php echo $row_rs_team['name']; ?>" /></td>
            </tr>
            <tr>
              <td align="right"><strong>Phone:</strong></td>
              <td><input name="phone" type="text" id="phone" style="width:700px;" value="<?php echo $row_rs_team['phone']; ?>" /></td>
            </tr>
            <tr>
              <td align="right"><strong>eMail:</strong></td>
              <td><input name="email" type="text" id="email" style="width:700px;" value="<?php echo $row_rs_team['email']; ?>" /></td>
            </tr>
            <tr>
              <td align="right" valign="top"><strong>Description:</strong></td>
              <td><textarea name="info" id="info" cols="45" rows="5" style="width:700px;"><?php echo $row_rs_team['info']; ?></textarea></td>
            </tr>
            <tr>
              <td align="right"><strong>Photo URL:</strong></td>
              <td><input name="photo" type="text" id="photo" style="width:700px;" value="<?php echo $row_rs_team['photo']; ?>" /></td>
            </tr>
            <tr>
              <td align="right">&nbsp;</td>
              <td><p>
                  <input type="submit" name="submit" value="Edit" class="button" />
                  <a href="../team.php" class="button">Cancel</a></p></td>
            </tr>
          </table>
        </form>
        <!-- END CONTENT -->
        <!-- DO NOT EDIT BELOW HERE -->
      </div>
    </div>
    <?php include ("../assets/footer.shtml"); ?>
<?php mysql_free_result($rs_team); ?>