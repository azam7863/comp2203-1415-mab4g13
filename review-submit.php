<!-- customer reviews -->
<div class="container">

<!-- require database, header, review class and film class-->
<?php require("includes/db.php");?>
<?php require('includes/header.php'); ?>
<?php require('classes/review.class.php');?>
<?php require('classes/film.class.php');?>

<pre>
	<?php
		/*try-catch block ensures the reviews that are submitted are valid 
		*if invalid names and comments are entered, i.e. numbers, exceptions are thrown with appropriate error messages.
		*@return string
		*/	
	try
		{	
			if(!isset($_POST['name']) OR empty($_POST['name']) OR is_numeric($_POST['name'])) throw new Exception('Error! Please enter a valid name');
			if(!isset($_POST['comment']) OR empty($_POST['comment']) OR is_numeric($_POST['comment'])) throw new Exception('Error! Please enter a valid comment');
				
			