<?php

/*extrapolates the actors name, the film they acted in and the character they played, from the database and shows it on the films page*/
class roletable
{
	public $id;
	public $actor_id;
	public $film_id;
	public $character;
	
	
	public function getActor() 
	{
		require("includes/db.php");	
		/* mysql select query to extrapolate actor information from database
		* @param actorOb Object $actor
		* @return string
		*/
		$actor = $db->query("SELECT * FROM `comp2203-cw-1415`.actor WHERE id = $this->actor_id");
		while ($actorOb = $actor->fetch_object("actortable"))
			{
				return $actorOb;
			}
	}
}
	


