<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $postagem = new Postagem();
    $info = $postagem->readOne($id);
}
?>
<h1 class="mb-4">Notícia</h1>
<p><strong>Título: </strong><?= $info['titulo'] ?></p>
<p><strong>Descrição: </strong><?= $info['descricao'] ?></p>
<p><strong>Categoria: </strong><?= $info['categoria'] ?></p>
<p><strong>Data: </strong><small><?= date("d/m/Y H:i", strtotime($info['data_post'])) ?></small></p>
<p><strong>Notícia: </strong><?= $info['noticia'] ?></p>
