<?php require_once('/home/users/web/b2275/d5.remaxove/etc/conn_4pr.php'); ?>
<?php
	$page = "DELETE";
	include("sessioncheck.php");
	$query_rs_deleteTeam = "DELETE FROM team WHERE id=".$_GET['id'];
	$deleteTeam = mysql_query($query_rs_deleteTeam);
	//EMAIL AND RETURN TO MAIN PAGE
	include("email.php");
	header("Location: ../team.php");
?>