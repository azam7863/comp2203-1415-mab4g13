
				/*exception is caught and error message is shown if the review was not submitted successfully*/
					catch(Exception $e)
							{
								echo("<p>Your review was not submitted. Please enter your name and a valid comment.</p>");
								echo("<p>".$e->getMessage()."</p>");
							}
							$filmId = $_POST['film_id'];
				echo("<a class='btn btn-default' href='film.php?id=".$filmId."'><p>Back to view Films to Rent</p></a>");
			
				?>	
</pre>

</div><!-- end of ontent -->

<!-- require footer -->
<?php require('includes/footer.php'); ?>