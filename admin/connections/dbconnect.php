<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "gcob";

// Create a connection
$con = new mysqli($servername, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    header("Location: ../error/dberror.php");
    die();
    // die("Connection failed: " . $con->connect_error);
}
?>
