<?php require_once('/home/users/web/b2275/d5.remaxove/etc/conn_4pr.php'); ?>
<?php
	include("sanitize.php");
	washnormal('email', 'username', 'password');
	//ONLY ADD IF FIELDS ARE VALID, ELSE RETURN TO FORM
	if(($clean['email']!="")&&($clean['username']!="")&&($clean['password']!="")){
		
		//SEARCH FOR UNIQUE USERNAME
		$query_rs_users = "SELECT * FROM users";
		$rs_users = mysql_query($query_rs_users, $dbConn) or die(mysql_error());
		$row_rs_users = mysql_fetch_assoc($rs_users);
		do {
			if($clean['username'] == $row_rs_users['username']){
				header("Location: registrationfailed.php");
				exit();
			}
		} while ($row_rs_users = mysql_fetch_assoc($rs_users));
		mysql_free_result($rs_users);

		//INSERT NEW USER WITH NO PRIVELEDGES
		$query_rs_insertUser = "INSERT INTO users (
		email, 
		username, 
		password) 
		VALUES ('".
		$clean['email']."', '".
		$clean['username']."', '".
		md5($clean['password'])."');";
		$rs_insertUser = mysql_query($query_rs_insertUser);

		//TRIGGER EMAIL
		$query_rs_admin = "SELECT * FROM users WHERE accesslevel = 'Admin'";
		$rs_admin = mysql_query($query_rs_admin, $dbConn) or die(mysql_error());
		$row_rs_admin = mysql_fetch_assoc($rs_admin);
		$to      = $row_rs_admin['email'];
		$subject = "CMS Access Request";
		$message = $clean['username'] . " has requested access to modify the CMS.  Visit http://www.dot5hosting.com/mail/index.bml?m=1 to verify the registration request.";
		$headers  = 'From: ' . $clean['email'] . "\r\n";
		mail($to, $subject, $message, $headers);
		mysql_free_result($rs_admin);
		header("Location: registrationcomplete.php");
	} else {
		header("Location: registrationfailed.php");
		exit();
	}
?>