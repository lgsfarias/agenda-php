<?php
session_start();
include_once 'connection.php';
include_once 'url.php';

$sql = "SELECT * FROM contacts";
$stmt = $conn->prepare($sql);
$stmt->execute();
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
