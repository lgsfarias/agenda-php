<?php
include_once 'templates/header.php';
?>
<div class="container">
  <?php if (isset($sessionMsg) && $sessionMsg != '') : ?>
    <p id="msg">
      <?= $sessionMsg ?>
    </p>
  <?php endif; ?>
  <h1 id="main-title">Minha Agenda</h1>
  <?php if (count($contacts) > 0) : ?>
    <table class="table" id="contacts-table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Telefone</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($contacts as $contact) : ?>
          <tr>
            <th scope="row"><?= $contact['id'] ?></th>
            <td><?= $contact['name'] ?></td>
            <td><?= $contact['phone'] ?></td>
            <td class="actions">
              <a href="#" class="btn btn-success">Visualizar</a>
              <a href="#" class="btn btn-primary">Editar</a>
              <a href="#" class="btn btn-danger">Excluir</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php else : ?>
    <p id="empty-list-text">Ainda não há contatos na sua agenda.
      <a href="<?= $BASE_URL ?>create.php">Adicione um contato</a>
    </p>
  <?php endif; ?>
</div>
<?php
include_once 'templates/footer.php'
?>