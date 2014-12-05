!-- homepage-->

<!-- introducing the site  -->
	<div class="row" align="center">
		<h1><b>Watch the Latest and Greatest on Red Carpet Films!</b></h1>
		<h4><br>Explore new worlds through our exhilarating thrillers or re-live the past through our countless classics! </br>
		<br>Red Carpet Films is the hub of the Film industry. Available to you at the click of a mouse.
		Take the journey of a lifetime and walk into the world of Red Carpet Films.</h4>
	</div>
	
		<!--random film-->
		<div class="col-md-4">
			<?php
				/**
				* extrapolates a random film from the database, every time the website is loaded
				* @param filmname, filmid Object $random
				* @prints img
				*/
				$random= rand (1,78);
				$filmId = $db-> query("SELECT * FROM `comp2203-cw-1415`.film WHERE id =  $random")-> fetch_object()->id;
				$filmName =$db->query ("SELECT * FROM `comp2203-cw-1415`.film WHERE id =  $random")-> fetch_object()->name;
				/* partials for random film */
				require ("partials/film-random.php");
			?>			
		</div>
		