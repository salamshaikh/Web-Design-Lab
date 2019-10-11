<?php
// for displaying errors
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$server = "localhost"; // "127.0.0.1"
$user = "abdul";
$pwd = "abdul";
$db = "smartsystem";

// Using MySQLi Object - Oriented approach

$conn = new mysqli($server, $user,$pwd,$db);

if($conn->connect_error){
    die("Can't connect to database". $conn->connect_error);
}
?>

