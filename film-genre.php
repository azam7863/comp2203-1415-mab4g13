<!-- partial for the genre search films -->
<div class='col-md-3 text-center' id ='genre'>
	<a href='film.php?id=<?=$filmOb->id?>'>
		<!-- medium image -->
		<img src='http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/<?=$filmOb->id?>_medium.jpg' class='img'/>
	</a><br>
		<h5><p><?=$filmOb->name?></p></h5>
			    Classification: <l1><?=$filmOb->classification?></l1> 
		    <p>Runtime: <l1><?=$filmOb->runtime?> minutes</l1></p><br> 
</div> 