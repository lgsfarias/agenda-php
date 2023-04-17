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
          <a href="<?= $BASE_URL ?>show.php?id=<?= $contact['id'] ?>" class="btn btn-success">Visualizar</a>
          <a href="<?= $BASE_URL ?>update.php?id=<?= $contact['id'] ?>" class="btn btn-primary">Editar</a>
          <form action="<?= $BASE_URL ?>config/process.php" method="post" class="delete-form">
            <input type="hidden" name="id" value="<?= $contact['id'] ?>" />
            <input type="hidden" name="type" value="delete" />
            <button type="submit" class="btn btn-danger"
              onclick="return confirm('Tem certeza que deseja excluir este contato?');">Excluir</button>
          </form>
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