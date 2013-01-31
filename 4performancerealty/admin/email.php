<?php
	//Trigger email to Admin regarding CMS update
	$query_rs_users = "SELECT * FROM users WHERE accesslevel = 'Admin'";
	$rs_users = mysql_query($query_rs_users, $dbConn) or die(mysql_error());
	$row_rs_users = mysql_fetch_assoc($rs_users);
	$to      = $row_rs_users['email'];
	$subject = "Updated Content";
	$message = "User '" . $_SESSION['username'] . "' has made changes to the content.  They accessed the " . $page . " page.";
	$headers  = 'From: ' . $row_rs_users['email'] . "\r\n";
	mail($to, $subject, $message, $headers);
	mysql_free_result($rs_users);
?>