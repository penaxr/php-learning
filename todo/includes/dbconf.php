<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "learnphp";

$conn = mysqli_connect($server, $user, $pass, $db);

if (!$conn) {
    die("Failed!: " . mysqli_connect_error());
}

?>