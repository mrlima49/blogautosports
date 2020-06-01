<?php
$postagem = new Postagem();
$info = $postagem->categorias();
$categorias = [];
foreach($info as $n){
    if(in_array($n, $categorias) == false){
        $categorias[] = $n;
    }
}
?>
<h1 class="mb-4">Categorias</h1>
<?php foreach($categorias as $categoria): ?>
<a href="?page=noticias&categoria=<?= $categoria['categoria'] ?>"><h2><?= $categoria['categoria'] ?></h2></a>
<hr>
<?php endforeach; ?>
