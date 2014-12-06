<!-- require database and film class -->
<?php require("includes/db.php"); ?>
<?php require("classes/film.class.php"); ?>

<!-- genre page -->
<div class="container">

<!-- require header -->
<?php require("includes/header.php"); ?>

	<!-- shows the films which are searched by genre in the navigation bar  -->
	<?php
		if (isset ($_GET["id"]))
			{
				$id = $_GET["id"];
			}
				else
				{
					$id=1;
				}
					