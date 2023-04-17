<?php
include_once 'templates/header.php';
?>
<div class="container" id="view-contact-container">
  <?php include_once 'templates/backBtn.html' ?>
  <h1 id="main-title">
    <?= $contact['name'] ?>
  </h1>
  <p>
    <strong>Telefone:</strong>
  </p>
  <p>
    <?= $contact['phone'] ?>
  </p>
  <p>
    <strong>Observação:</strong>
  </p>
  <p>
    <?= $contact['obs'] ?>
  </p>
</div>
<?php
include_once 'templates/footer.php'
?>