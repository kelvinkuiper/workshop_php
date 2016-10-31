<?php
$servername = "localhost";
$username = "homestead";
$password = "secret";
$dbname = "workshop_php"; //string

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname); //object

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}