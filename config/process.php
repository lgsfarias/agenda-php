<?php
session_start();
include_once 'connection.php';
include_once 'url.php';

$id;
$contact = [];

$data = $_POST;

if (!empty($data)) {
  // print_r($data);
  // exit;

  // Create
  if ($data['type'] == 'create') {
    $sql = "INSERT INTO contacts (name, phone, obs) VALUES (:name, :phone, :obs)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $data['name']);
    $stmt->bindParam(':phone', $data['phone']);
    $stmt->bindParam(':obs', $data['obs']);
    try {
      $stmt->execute();
      $_SESSION['msg'] = 'Contato criado com sucesso!';
    } catch (PDOException $e) {
      $_SESSION['msg'] = 'Erro ao criar contato!';
    }

    header('Location: ' . $BASE_URL . '/../index.php');
  }

  if ($data['type'] == 'update') {
    $sql = "UPDATE contacts SET name = :name, phone = :phone, obs = :obs WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $data['name']);
    $stmt->bindParam(':phone', $data['phone']);
    $stmt->bindParam(':obs', $data['obs']);
    $stmt->bindParam(':id', $data['id']);
    try {
      $stmt->execute();
      $_SESSION['msg'] = 'Contato atualizado com sucesso!';
    } catch (PDOException $e) {
      $_SESSION['msg'] = 'Erro ao atualizar contato!';
    }

    header('Location: ' . $BASE_URL . '/../index.php');
  }
} else {

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM contacts WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
  } else {

    $sql = "SELECT * FROM contacts";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}

// Close connection
$conn = null;
