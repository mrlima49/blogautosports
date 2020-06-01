<?php

$postagem = new Postagem();
$postagem->titulo = 'alonso';
echo $postagem->getTitulo();
echo "<br>";
echo $postagem->getCategoria();

