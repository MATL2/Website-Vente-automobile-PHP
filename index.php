<?php
	session_start();

	header('location:views\home.php');
	require('models\cars.php');

	sort($brands);
	$_SESSION['brands'] = $brands;
	$_SESSION['models'] = $models;
	
	exit;
?>