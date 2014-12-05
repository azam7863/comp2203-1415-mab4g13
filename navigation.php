<!--require database and genre class-->
<?php require("includes/db.php"); ?>
<?php require("classes/genre.class.php"); ?>

<!-- navigation -->
   
<nav class="navbar navbar-inverse" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
    </button>
  </div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
		 <!-- page names-->
		 <li><a href="index.php">Homepage</a></li>
		 <li><a href="films.php">Films to Rent</a></li>
		   <!-- dropdown list of film genres -->
		   <li class="dropdown">
		   <a href="genre.php" class="dropdown-toggle" data-toggle="dropdown">Genre Search<b class="caret"></b></a>
			   <ul class="dropdown-menu">
				<?php 
					//extrapolates film genres from database to show in 'genre search' drop down menu
					$genres = $db->query("SELECT * FROM `comp2203-cw-1415`.genre ORDER BY name");
						while($genre = $genres->fetch_object())
							{
								echo "<li><a href = 'genre.php?id=". $genre->id."'>$genre->name</a></li>";
							}
				?>		
			
				</ul>
  </div>		
</nav>
<!-- end of navigation-->