<?php
	//IF NOT LOGGED IN, GO TO LOGIN
	session_save_path("/home/users/web/b2275/d5.remaxove/public_html");
	session_start();
	if (!isset($_SESSION['accesslevel'])) {
		header("Location: login.php");
		exit();   //NEEDED TO TERMINATE SCRIPT (otherwise crawlers will delete all data)
	}
?>