<?php
$servername = "localhost";
$database = "hw15";
$username = "root";
$password = "root";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Подключение к БД установлено!!!";
?>