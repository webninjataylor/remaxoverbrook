<?php require_once('/home/users/web/b2275/d5.remaxove/etc/conn_4pr.php'); ?>
<?php include("assets/meta.shtml"); ?>
<title>Performance Realty</title>
<?php include("assets/headermenu.shtml"); ?>
<div id="content">
<div id="mainContent3">
  <div class="container">
    <!-- DO NOT EDIT ABOVE HERE -->
    <!-- START CONTENT -->
    <h2>Performance Realty</h2>
    <h2>Log On for Events Listings Management</h2>
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
            <a href="register.php" class="button">Register</a> <a href="index.php" class="button">Cancel</a></td>
        </tr>
      </table>
    </form>
    <!-- END CONTENT -->
    <!-- DO NOT EDIT BELOW HERE -->
  </div>
</div>
<?php include ("assets/footer.shtml"); ?>
