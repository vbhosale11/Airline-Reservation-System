<?php

	$connect_error = 'Sorry, there was some connectivity issue!';
	$DB_USERNAME="root";
	$DB_PASS="";
	$DB_HOSTNAME="localhost";
	$DB_NAME="cyan";
	$conn=mysqli_connect($DB_HOSTNAME,$DB_USERNAME,$DB_PASS,$DB_NAME) or die('DATABASE CONNECTION ERROR');
	// @mysql_select_db('cyan') or die($connect_error);

?>