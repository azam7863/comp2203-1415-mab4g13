/*if the $count divided by 4 (number of films displayed on each row) equals 0*/
							if($count % 4 == 0) echo("</div>");
								/* partials for selected film genre */
								require ("partials/film-genre.php");
							
							/*increase the $count by 1*/
							$count++;
							if($count % 4 == 0) echo("<div class='row'>");	
						}
							echo("</div>");	
	?>
</div>
<!-- end of genre page -->

<!-- require footer -->
<?php require('includes/footer.php'); ?>