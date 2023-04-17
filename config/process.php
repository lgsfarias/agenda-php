<?php
session_start();
include_once 'connection.php';
include_once 'url.php';

$id;
$contact = [];

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM contacts WHERE id = :id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  $contact = $stmt->fetch(PDO::FETCH_ASSOC);
}

$sql = "SELECT * FROM contacts";
$stmt = $conn->prepare($sql);
$stmt->execute();
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
