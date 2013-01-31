<?php require_once('/home/users/web/b2275/d5.remaxove/etc/conn_4pr.php'); ?>
<?php
	include("sessioncheck.php");
	include("sanitize.php");
	washnormal('name', 'phone', 'email', 'info', 'photo');
	$page = "ADD";
	/*name, phone, email, info, photo*/
	$query_rs_insertTeam = "INSERT INTO team (
		name, 
		phone, 
		email, 
		info, 
		photo) 
		VALUES ('".
		$clean['name']."', '".
		$clean['phone']."', '".
		$clean['email']."', '".
		$_POST['info']."', '".
		$clean['photo']."');";
	$rs_insertTeam = mysql_query($query_rs_insertTeam);
	
	//EMAIL AND RETURN TO MAIN PAGE	
	include("email.php");
	header("Location: ../team.php");
?>