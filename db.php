<?php
/**
* connecting to the back-end database with login details and creates an instance of mysql
* if statement used to show an error if database cannot connect
* @param db Object $mysqli
* @prints string
**/

$db = new mysqli('comp2203.ecs.soton.ac.uk','comp2203-cw-1415','8VMMx2m80YsN4t3T2Oc28hO38F49NC','comp2203-cw-1415');	
	if($db->connect_error) 
	{
		 die("Error connecting to the MySQL database. Please try again!");	
	}
		