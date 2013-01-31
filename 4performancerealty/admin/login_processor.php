<?php require_once('/home/users/web/b2275/d5.remaxove/etc/conn_4pr.php'); ?>
<?php
	session_save_path("/home/users/web/b2275/d5.remaxove/public_html");
	session_start();
	include("sanitize.php");
	washnormal('username', 'password');
	$query_rs_users = "SELECT * FROM users";
	$rs_users = mysql_query($query_rs_users, $dbConn) or die(mysql_error());
	$row_rs_users = mysql_fetch_assoc($rs_users);
	do {
		if($clean['username'] == $row_rs_users['username']){
			if(md5($clean['password']) == $row_rs_users['password']) {
				$_SESSION['username'] = $clean['username'];
				$_SESSION['password'] = md5($clean['password']);
				$_SESSION['time'] = time();
				$_SESSION['accesslevel'] = $row_rs_users['accesslevel'];
			}
		}
	} while ($row_rs_users = mysql_fetch_assoc($rs_users));
	if(($_SESSION['accesslevel'] == 'Admin')||($_SESSION['accesslevel'] == 'Editor')){
		header("Location: ../team.php");
	} else {
		header("Location: login.php");
	}
?>
<?php mysql_free_result($rs_users); ?>