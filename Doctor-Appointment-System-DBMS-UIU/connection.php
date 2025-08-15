<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "edoc"; 

$database = new mysqli($host, $user, $password, $dbname);

if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}
?>