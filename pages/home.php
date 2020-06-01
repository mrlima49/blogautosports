<?php  
$postagem = new Postagem();
$dados = $postagem->read();
?>
<h1>Blogautosports</h1>
<div class="row mb-4">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title"><?= $dados[0]['titulo']; ?></h6>
        <p class="card-text"><?= $dados[0]['descricao'] ?></p>
        <a href="?page=noticia&id=<?= $dados[0]['id']; ?>" class="btn btn-primary">Visitar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title"><?= $dados[1]['titulo']; ?></h6>
        <p class="card-text"><?= $dados[1]['descricao'] ?></p>
        <a href="?page=noticia&id=<?= $dados[1]['id']; ?>" class="btn btn-primary">Visitar</a>
      </div>
    </div>
  </div>
</div>
<div class="row mb-4">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title"><?= $dados[2]['titulo']; ?></h6>
        <p class="card-text"><?= $dados[2]['descricao'] ?></p>
        <a href="?page=noticia&id=<?= $dados[2]['id']; ?>" class="btn btn-primary">Visitar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title"><?= $dados[3]['titulo']; ?></h6>
        <p class="card-text"><?= $dados[3]['descricao'] ?></p>
        <a href="?page=noticia&id=<?= $dados[3]['id']; ?>" class="btn btn-primary">Visitar</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title"><?= $dados[4]['titulo']; ?></h6>
        <p class="card-text"><?= $dados[4]['descricao'] ?></p>
        <a href="?page=noticia&id=<?= $dados[4]['id']; ?>" class="btn btn-primary">Visitar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title"><?= $dados[5]['titulo']; ?></h6>
        <p class="card-text"><?= $dados[5]['descricao'] ?></p>
        <a href="?page=noticia&id=<?= $dados[5]['id']; ?>" class="btn btn-primary">Visitar</a>
      </div>
    </div>
  </div>
</div>