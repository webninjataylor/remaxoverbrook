<?php require_once('/home/users/web/b2275/d5.remaxove/etc/conn_4pr.php'); ?>
<?php include("sessioncheck.php"); ?>
<?php include("../assets/meta.shtml"); ?>
<title>Performance Realty</title>
<?php include("../assets/header.shtml"); ?>
  <div id="content" style="padding-top:0px;">
    <div id="mainContent3">
      <div class="container">
        <!-- DO NOT EDIT ABOVE HERE -->
        <!-- START CONTENT -->
        <h2>Add Event <a href="logout.php" class="button" style="display:block; float:right; font-size:12px; height:15px;">Log Out</a></h2>
        <form name="addteam" id="addteam" method="post" action="addteam_processor.php">
          <table cellspacing="0" cellpadding="3">
            <tr>
              <td align="right"><strong>Name:</strong></td>
              <td><input name="name" type="text" id="name" style="width:700px;" /></td>
            </tr>
            <tr>
              <td align="right"><strong>Phone:</strong></td>
              <td><input name="phone" type="text" id="phone" style="width:700px;" value="(540) 433-7369 " /></td>
            </tr>
            <tr>
              <td align="right"><strong>eMail:</strong></td>
              <td><input name="email" type="text" id="email" style="width:700px;" value="remaxperformance@comcast.net" /></td>
            </tr>
            <tr>
              <td align="right" valign="top"><strong>Description:</strong></td>
              <td><textarea name="info" id="info" cols="45" rows="5" style="width:700px;"></textarea></td>
            </tr>
            <tr>
              <td align="right"><strong>Photo URL:</strong></td>
              <td><input name="photo" type="text" id="photo" style="width:700px;" value="http://www.remaxoverbrook.com/4performancerealty/images/NAME.jpg" /></td>
            </tr>
            <tr>
              <td align="right">&nbsp;</td>
              <td><p>
                  <input type="submit" name="submit" value="Add" class="button" />
                  <a href="../team.php" class="button">Cancel</a></p></td>
            </tr>
          </table>
        </form>
        <!-- END CONTENT -->
        <!-- DO NOT EDIT BELOW HERE -->
      </div>
    </div>
    <?php include ("../assets/footer.shtml"); ?>
