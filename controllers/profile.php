<?php
	session_start();
	header('location:..\views\selection.php');

	$_SESSION['model'] = $_POST['model'];
	
	exit;
?>