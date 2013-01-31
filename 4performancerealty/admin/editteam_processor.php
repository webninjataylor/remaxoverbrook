<?php require_once('/home/users/web/b2275/d5.remaxove/etc/conn_4pr.php'); ?>
<?php
	include("sessioncheck.php");
	include("sanitize.php");
	washnormal('name', 'phone', 'email', 'info', 'photo');
	$page = "EDIT";
	/*name, phone, email, info, photo*/
	$query_rs_editTeam = "UPDATE team SET 
		name='".$clean['name']."', 
		phone='".$clean['phone']."', 
		email='".$clean['email']."', 
		info='".$_POST['info']."', 
		photo='".$clean['photo']."' WHERE id = ".$_GET['id'];
	$rs_editTeam = mysql_query($query_rs_editTeam);
	
	//EMAIL AND RETURN TO MAIN PAGE	
	include("email.php");
	header("Location: ../team.php");
?>