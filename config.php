<?php
$host = "10.18.57.16";
$user = "H_092220120";
$password = "Syj011023";
$database = "H_092220120";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>