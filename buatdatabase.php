<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
	die ("Connection failed: ". mysqli_connect_error());
}

//create database
$sql = "CREATE DATABASE praktikum10";
if (mysqli_query($conn, $sql)) {
	echo "Database created successfully";
} else {
	echo "Error creating database: ". mysqli_error($conn);
}
mysqli_close($conn);
?>