<?php
session_start();
require_once "../functions/validate.php";
require_once "../autoload.php";
$postagem = new Postagem();
if(isset($_POST['btn'])){
    $titulo = validate($_POST['titulo']);
    $descricao = validate($_POST['descricao']);
    $categoria = validate($_POST['categoria']);
    $noticia = validate($_POST['noticia']);

    if($titulo && $descricao && $categoria && $noticia){
        $postagem->create($titulo, $descricao, $categoria, $noticia);
        $_SESSION['msg'] = "Postagem cadastrada com sucesso";
        header("location:../?page=home");  
    }

}else{
    $_SESSION['msg'] = "preencha todos os campos";
    header("location:../?page=addpostagem");
}