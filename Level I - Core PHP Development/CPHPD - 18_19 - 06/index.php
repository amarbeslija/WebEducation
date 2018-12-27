<?php
/* Testiranje */
require 'includes/databaseConnector.php';
$connection = databaseConnector("localhost", "root", "");

//require 'includes/functions.php';
//getPrivateData();
//getSocialData();

?>
<!DOCTYPE HTML>
<!--
	Aerial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
	   <?php require_once 'includes/head.php';	?>
	</head>
	<body class="is-preload">
        <?php 
            require_once 'includes/body.php';
            require_once 'includes/skripte.php';
        ?>
	</body>
</html>