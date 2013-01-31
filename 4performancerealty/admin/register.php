<?php require_once('/home/users/web/b2275/d5.remaxove/etc/conn_4pr.php'); ?>
<?php include("../assets/meta.shtml"); ?>
<title>Performance Realty</title>
<?php include("../assets/header.shtml"); ?>
  <div id="content" style="padding-top:0px;">
    <div id="mainContent3">
      <div class="container">
        <!-- DO NOT EDIT ABOVE HERE -->
        <!-- START CONTENT -->
        <h2>Register for Access to the Performance Realty CMS</h2>
        <form name="register" id="register" method="POST" action="register_processor.php">
          <table cellspacing="0" cellpadding="3">
            <tr>
              <td align="right">eMail:</td>
              <td><input name="email" type="text" id="email" style="width:200px;" /></td>
            </tr>
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
              <td><input type="submit" name="submit" value="Register" class="button" />
                <a href="login.php" class="button">Cancel</a></td>
            </tr>
          </table>
        </form>
        <!-- END CONTENT -->
        <!-- DO NOT EDIT BELOW HERE -->
      </div>
    </div>
    <?php include ("../assets/footer.shtml"); ?>
