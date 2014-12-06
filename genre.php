/*count up for each film*/
					$count = 0;
					$films = $db->query("SELECT * FROM `comp2203-cw-1415`.film WHERE genre_id = $id;");
					echo("<div class='row'>");
						
					/**
					* while statement that goes through each film in the database and shows their information on the genre page
					* @param filmOb Object $films
					* @print string, img
					**/	
					while ($filmOb = $films->fetch_object("filmtable"))
						{	
					