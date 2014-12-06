<?php require("includes/db.php"); ?>
<?php require_once("classes/filmtable.class.php"); ?>
<?php require_once("classes/reviewtable.class.php"); ?>
<?php require_once("classes/actortable.class.php"); ?>
<?php require_once("classes/roletable.class.php"); ?>


<!-- Content on Film Page -->
<div class="container">

<!-- Header -->
<?php require ("includes/header.php");  ?>
<!-- /.Header -->


<!-- Information about each film is displayed, obtained from the database -->
	<?php 
		echo("<div class='clearfix'>");	 
			if (isset ($_GET["id"]))
				{
					$id = $_GET["id"];
				}
			else
				{
					$id=1; 
				}
		