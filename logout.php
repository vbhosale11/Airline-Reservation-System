<?php

	session_start();
	session_destroy();
	header('Location: http://localhost/cyan/index.php');

?>