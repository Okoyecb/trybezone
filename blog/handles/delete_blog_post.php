<?php
	session_start();
	include '../../includes/constants.inc';	
	include '../../includes/db.inc';	
	if(!isset($_SESSION['press']))
	{
		echo "You are not logged in";
		exit();
	}

	$id = htmlspecialchars($_POST['id']);
	$sql = "DELETE FROM news WHERE id = '$id'";
	$connection->exec($sql);
	echo "Deleted";

?>