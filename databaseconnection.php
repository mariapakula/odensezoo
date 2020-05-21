<?php
	$dbc = NULL;
	function dbCon(){
		global $dbc;
		$dbc = mysqli_connect("mariapakula.dk.mysql","mariapakula_dk","HUCyVKkEtErSL2ADxQWKBYgp","mariapakula_dk");
}

//tjek forbindelse
if ($dbc->connect_error) {
  die("Connection failed: " . $dbc->connect_error);
}
echo "Connected successfully";
?>
