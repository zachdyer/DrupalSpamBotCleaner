<?php
//Create a form with a submit button

//Have the form use this file as the action

//Copy the link where the form is and paste it in the $location

// Putting code inside functions so it reads like english
function connectDatabase(){
	$host = "add host here";
	$user = "database username";
	$pass = "password";
	$database = "database name";
	$mysqli = new mysqli($host,$user,$pass,$database);
	return $mysqli;
}
function searchSpambots(){
	$query = "DELETE FROM users WHERE `status` = 0 AND `uid` != 0";
	return $query;
}
function deleteBots(){
	$mysqli = connectDatabase();
	$result = $mysqli->query(searchSpambots());
	return $result;
}
function returnBack(){
	$location = "http://yourwebsite.com/yourformpage";//Page to return to
	header("Location: $location");
}

deleteBots();
returnBack();