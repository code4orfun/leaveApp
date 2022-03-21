<?php

$servername = "localhost";
$username = "root";
$password = "pass@123";
$dbname = "leaveApp";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
