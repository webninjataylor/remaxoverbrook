<?php require_once('/home/users/web/b2275/d5.remaxove/etc/conn_4pr.php'); ?>
<?php
	//Make sure no one is logged in already from here...
	session_save_path("/home/users/web/b2275/d5.remaxove/public_html");
	session_start();
	unset($_SESSION);
	session_destroy();
?>
<?php include("../assets/meta.shtml"); ?>
<title>Performance Realty</title>
<!--[if !IE]>-->
<link media="only screen and (max-device-width: 480px)" rel="stylesheet" type="text/css" href="mobile.css"/>
<!--<![endif]-->
<?php include("../assets/header.shtml"); ?>
  <!-- TOP MENU -->
  <div id="menuTop">
    <?php include("../assets/menu.shtml"); ?>
  </div>
  <div id="content">
    <div id="mainContent3">
      <div class="container">
        <!-- DO NOT EDIT ABOVE HERE -->
        <!-- START CONTENT -->
        <h2>Log On to the Performance Realty CMS</h2>
        <form name="login" id="login" method="POST" action="login_processor.php">
          <table cellspacing="0" cellpadding="3">
            <tr>
              <td align="right">User Name:</td>
              <td><input name="username" type="text" id="username" style="width:200px;" /></td>
            </tr>
            <tr>
              <td align="right">Password:</td>
              <td><input name="password" type="password" id="password" style="width:200px;" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="submit" value="Log On" class="button" />
                <a href="register.php" class="button">Register</a> <a href="../index.php" class="button">Cancel</a></td>
            </tr>
          </table>
        </form>
        <!-- END CONTENT -->
        <!-- DO NOT EDIT BELOW HERE -->
      </div>
    </div>
  </div>
  <?php include ("../assets/footer.shtml"); ?>
