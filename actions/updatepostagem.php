<?php
session_start();
require_once "../autoload.php";
require_once "../functions/validate.php";
$postagem = new Postagem();
if(isset($_POST['btn'])){
    $titulo = validate($_POST['titulo']);
    $descricao = validate($_POST['descricao']);
    $categoria = validate($_POST['categoria']);
    $noticia = validate($_POST['noticia']);
    $id = validate($_POST['id']);
    if(!empty($id)){
        $postagem->update($titulo, $descricao, $categoria, $noticia, $id);
    }
}
header("location:../?page=admin");
