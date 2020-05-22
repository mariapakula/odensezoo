<?php

	include("databaseconnection.php");
	//dbCon(); references the db connection data in config.php - in other words we call a function.
	dbCon();

	//We grab the user-input, and place them into variables
	$email = $_POST["username"];
	$pass = $_POST["password"];
	$password = sha1($pass);

	$query = "SELECT * FROM odensezoo WHERE email = '" .$email ."' AND login = '".$password."';";
	$result = mysqli_query($dbc,$query) or die('Error querying database.');
	if (mysqli_num_rows($result) == NULL) {
		mysqli_close($dbc);
		header("Location: aarskortoversigt.html?l=f");
		exit();
	}

	while ($row = mysqli_fetch_array($result)){
					session_start();
												if ($row['usertype']==0){
													$_SESSION['type'] = "user";
												}elseif($row['usertype']==1){
													$_SESSION['type'] = "admin";
												}
					$_SESSION['user'] = $email;
					$_SESSION['name'] = utf8_encode($row['firstname'] . " " . $row['lastname']);
					mysqli_close($dbc);

					header("Location: aarskortoversigt.html?l=s"); /* Redirect browser */
					exit();
				}

?>
