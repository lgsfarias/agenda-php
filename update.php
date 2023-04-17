<?php
include_once 'templates/header.php'
?>
<div class="container">
  <?php include_once 'templates/backBtn.html' ?>
  <h1 id="main-title">Editar Contato</h1>
  <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="post">
    <input type="hidden" name="type" value="update" />
    <input type="hidden" name="id" value="<?= $contact['id'] ?>" />
    <div class="form-group">
      <label for="name">Nome do contato:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required value="<?= $contact['name'] ?>" />
    </div>
    <div class="form-group">
      <label for="name">Telefone:</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="(XX)XXXXX-XXXX" required value="<?= $contact['phone'] ?>" />
    </div>
    <div class="form-group">
      <label for="name">Observação:</label>
      <textarea type="text" class="form-control" id="obs" name="obs" placeholder="Digite uma observação" rows="3"><?= $contact['obs'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Concluir</button>
  </form>
</div>
<?php
include_once 'templates/footer.php'
?>