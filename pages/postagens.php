<?php
$postagem = new Postagem();
$dados = $postagem->read();
?>
<h1>Postagens Cadastradas</h1>
<?php 
foreach($dados as $dado):
?>
<div class="card mb-4" style="width: 50rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $dado['titulo'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $dado['descricao'];?></h6>
    <p class="card-text"><?= date("d/m/Y H:i", strtotime($dado['data_post']));?></p>
    <a href="?page=editar&id=<?= $dado['id'];?>" class="card-link text-success">Editar</a>
    <a href="actions/delete.php?id=<?= $dado['id'];?>" class="card-link text-danger">Excluir</a>
  </div>
</div>
<?php endforeach; ?>
