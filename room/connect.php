<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db = 'game';
w
// Create connection
$connect = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$connect) {
    die("ERROR !");
}
