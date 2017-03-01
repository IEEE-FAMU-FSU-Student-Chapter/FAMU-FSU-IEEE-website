<?php
//============================================================
// File   : index.php
// Author : Dominic Eaton
// Created: 8/11/2016
// Updated: 8/22/2016
// Purpose: FAMU-FSU CoE IEEE student chapter site main index
//          source file.
// Usage  : Website php source file.
//============================================================
include('config/setup.php');
?>

<!DOCTYPE html>
 <!-- BEGIN PAGE CONTENT -->
<html lang="en">
	<head>
		<!-- DATA -->
		<title><?php echo /*$page['title'].' | '.*/$site_title; ?></title>
		<meta charset="UTF-8">
		<meta name="author" content="Dominic Eaton">
		<meta name="description" content="FAMU FSU COE IEEE Student Chapter website">
		<meta name="viewport" content ="width-device-width, initial-scale=1.0">

		<!-- STYLESHEETS -->
		<?php include('config/css.php'); ?>

		<!-- SCRIPTS -->
		<?php //include('js.php') ?>
	</head>

	<!-- PAGE CONTENT -->
	<body>
			 <?php
			 include('template/header.php');

			 $test = fopen('site/Home.php', 'r');

			 while(!feof($test)) {
			 	$temp .= fgets($test);
			 }
			 echo $temp;
			 include('template/footer.php');
			 ?>

		 <!-- Site Header -->
		 <?php //include(D_TEMPLATE."/header.php"); ?>

		 <!-- Site Contentr-->
		 <?php //echo $page['content']; ?>

		 <!-- Site Footing -->
		 <?php //include(D_TEMPLATE."/footer.php"); ?>

	</body>
</html>
<!-- END PAGE CONTENT-->
