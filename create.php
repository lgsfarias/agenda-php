<?php
include_once 'templates/header.php'
?>
<div class="container">
  <?php include_once 'templates/backBtn.html' ?>
  <h1 id="main-title">Criar Contato</h1>
  <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="post">
    <input type="hidden" name="type" value="create" />
    <div class="form-group">
      <label for="name">Nome do contato:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required />
    </div>
    <div class="form-group">
      <label for="name">Telefone:</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="(XX)XXXXX-XXXX" required />
    </div>
    <div class="form-group">
      <label for="name">Observação:</label>
      <textarea type="text" class="form-control" id="obs" name="obs" placeholder="Digite uma observação" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>
<?php
include_once 'templates/footer.php'
?>