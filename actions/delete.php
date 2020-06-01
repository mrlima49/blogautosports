<?php
session_start();
require_once "../autoload.php";
$postagem = new Postagem();
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $postagem->delete($id);
}

header("location:../?page=admin");