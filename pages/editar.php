<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $postagem = new Postagem();
    $info = $postagem->readOne($id);
}
?>
<h1>Editar Postagem</h1>
<form action="actions/updatepostagem.php" method="POST">
    <p><input type="hidden" name="id" value="<?= $info['id']; ?>"></p>
    <p><input type="text" name="titulo" value="<?= $info['titulo'] ?>" autofocus class="form-control"></p>
    <p><input type="text" name="descricao" value="<?= $info['descricao'] ?>" class="form-control"></p>
    <p>
        <select name="categoria" class="form-control">
            <option value="Formula 1">Formula 1</option>
            <option value="IndyCar">IndyCar</option>
            <option value="Formula E">Formula E</option>
            <option value="Nascar">Nascar</option>
            <option value="Stock Car">Stock Car</option>
        </select>
    </p>
    <p><textarea name="noticia" cols="30" rows="10" placeholder="Notícia" class="form-control"><?= $info['noticia'] ?>"</textarea></p>
    <p><button class="btn btn-success" name="btn">Editar</button></p>    
</form>