<?php
$servername = "mariapakula.dk.mysql";
$username = "mariapakula_dk";
$password = "HUCyVKkEtErSL2ADxQWKBYgp";
$dbname = "mariapakula_dk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO odensezoo (firstname, lastname, email, password)
VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
header("Location: aarskortoversigt.html?sign=ok"); /* Redirect browser */
exit();
?>
