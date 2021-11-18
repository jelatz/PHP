<?php
$servername = "localhost";
$username = "uspfstudent";
$password = "1234567";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE schooldb";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully \n";
} else {
  echo "Error creating database: \n" . $conn->error;
}

$servername = "localhost";
$username = "uspfstudent";
$password = "1234567";
$dbname = "schooldb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Studenttable (
  Student_ID_Number INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Student_Family_Name VARCHAR(30),
  Student_First_Name VARCHAR(30),
  Student_Middle_Name VARCHAR(30),
  Student_Email_Address VARCHAR(30),
  Student_Home_Address VARCHAR(30),
  Student_Mobile_Number VARCHAR(30),
  Student_Course VARCHAR(30))";
  
  if ($conn->query($sql) === TRUE) {
    echo "\n Table Student Table created successfully";
  } else {
    echo "\n Error creating table: " . $conn->error;
  }

$conn->close();
?>

