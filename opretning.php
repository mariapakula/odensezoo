<?php
	//We include the includes.php, which contains our db connection data.
	include("databaseconnection.php");
	//dbCon(); references the db connection data in includes.php - in other words we call a function.
	dbCon();

	//Vi tager user-informationer og laver dem til variabler
	$email = $_POST["username"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$pass = $_POST["password"];

	$password = sha1($pass);

	//Der sendes user informationer til "odensezoo" tabellen
	$query = "INSERT INTO odensezoo VALUES ('" .$email ."', '" . $password . "', '" . $salt . "', '" . $firstname . "', '" . $lastname . "', 0 );";
	$result = mysqli_query($dbc,$query) or die('Error querying database.');

	mysqli_close($dbc);
	header("Location: aarskortoversigt.html?sign=ok"); /* omdirigerer browser */
	exit();

	?>
