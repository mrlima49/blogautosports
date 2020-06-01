<?php
if(isset($_GET['categoria'])){
    $categoria = $_GET['categoria'];
    $postagem = new Postagem();
    $noticias = $postagem->noticias($categoria);
}else{
    header("location:../?page=home");
}
?>
<h1><?= $categoria; ?></h1>
<?php foreach($noticias as $noticia): ?>
<div class="card mb-4">
  <div class="card-header">
    Destaque
  </div>
  <div class="card-body">
    <h5 class="card-title"><?= $noticia['titulo'] ?></h5>
    <p class="card-text"><?= $noticia['descricao'] ?></p>
    <a href="?page=noticia&id=<?= $noticia['id'] ?>" class="btn btn-primary">Visitar</a>
  </div>
</div>
<?php endforeach; ?>