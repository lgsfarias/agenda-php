<?php
$host = "agenda_db";
$db_name = "agenda";
$user = "root";
$password = "mysql";

try {
  $conn = new PDO("mysql:host=$host", $user, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE IF NOT EXISTS $db_name";
  $conn->exec($sql);
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

try {
  $conn = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "CREATE TABLE IF NOT EXISTS contacts (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    phone VARCHAR(15),
    obs TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  $conn->exec($sql);
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
