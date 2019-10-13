<?php

$servername = "localhost";
$username = "root";
$password = "password";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS db_rush00";
if ($conn->query($sql) === TRUE) {
	echo "Database created successfully";
} else {
	echo "Error creating database: " . $conn->error;
}

$sql = "USE db_rush00;";
if ($conn->query($sql) === TRUE) {
	echo "Database connected successfully";
} else {
	echo "Error connecting database: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS users(
	idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
	uidUsers TINYTEXT NOT NULL,
	emailUsers TINYTEXT NOT NULL,
	pwdUsers LONGTEXT NOT NULL
);";
if ($conn->query($sql) === TRUE) {
	echo "Table users created successfully";
} else {
	echo "Error creating users table: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
)";
if ($conn->query($sql) === TRUE) {
	echo "Table products created successfully";
} else {
	echo "Error creating products table: " . $conn->error;
}

$conn->close();
?>
