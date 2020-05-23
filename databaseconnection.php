<?php
$servername = "mariapakula.dk.mysql";
$username = "mariapakula_dk";
$password = "HUCyVKkEtErSL2ADxQWKBYgp";
$dbname = "mariapakula_dk";
$pass = sha1($_POST[password]);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO odensezoo (firstname, lastname, kortid, password)
VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$pass')";


if ($conn->query($sql) === TRUE) {
    header("Location: aarskortoversigt.html?sign=ok"); /* Redirect browser */
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
