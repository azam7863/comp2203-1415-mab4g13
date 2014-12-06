
			/*user can review any film with a comment and 'like' it via the radio button*/
			$filmId = $_POST['film_id'];
			$name = $_POST['name'];
			$comment = $_POST['comment'];
			$liked=$_POST['liked'];
			
			/*reviews that customers make update the film, liked, comment and reviewer fields in the back-end database*/
			$reviews = $db->query("INSERT INTO `comp2203-cw-1415`.review (film_id, liked, comment, reviewer) VALUES ('$filmId', '$liked', '$comment', '$name')");	
				
				/*review confirmation message*/
				echo("<strong>Thank you for submitting a review.</strong>");
				
			}	
					