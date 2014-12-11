<?php
// include database
include 'includes/db.php';
//require film class
require_once 'classes/film.class.php';

/* retrieves film results which are queried by site visitors, in the search bar */
$search = $_GET["search"];
$searchquery = "SELECT* FROM film WHERE name LIKE "."'%".$search."%'"; 
$films = $db->query($searchquery); 

echo("<div class='row'>");
						
					/**
					* while statement that goes through each film in the database and shows their information on the genre page
					* @param filmOb Object $films
					* @print string, img
					**/	
					while ($filmOb = $films->fetch_object("film"))
						{	
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

