<?php require_once('/home/users/web/b2275/d5.remaxove/etc/conn_4pr.php'); ?>
<?php
	//CALL SESSION AND DESTROY
	session_save_path("/home/users/web/b2275/d5.remaxove/public_html");
	session_start();
	unset($_SESSION);
	session_destroy();
	header("Location: login.php");
?>