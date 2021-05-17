<?php
$connection = mysqli_connect('localhost', 'user', 'password');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'file_uploader');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
$sql = "CREATE TABLE PR_MOD (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(30) NOT NULL,
last_name VARCHAR(30) NOT NULL,
mail_id VARCHAR(30) UNIQUE,
recovery_mailid VARCHAR(30) UNIQUE,
password VARCHAR(30) NOT NULL)" ;


if (mysqli_query($connection, $sql)) {
  echo "Table created successfully";
} else {
  //die ("Error creating table: " . mysqli_error($connection));
}

//$connection->close();

