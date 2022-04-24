<?php
	//All of this is essential variables for connections that php needs for Bravebank site to work properly
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bravebank";

	//$conn is used to connect to MySQL database,
	//with the if statement providing the possible reasons for failed connection with the mysqli_connect_error());.
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("We cannot connect to the database due to this following error --> ".mysqli_connect_error());
	}

?>