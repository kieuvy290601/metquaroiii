<?php

$servername = "remotemysql.com";
$username = "dm0EQolcIo";
$password = "Tuny59bIHv";
$db = "dm0EQolcIo";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>