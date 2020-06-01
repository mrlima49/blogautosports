<h1>Adicionar Postagem</h1>
<form action="actions/addpostagem.php" method="POST">
    <p><input type="text" name="titulo" placeholder="Título" autofocus class="form-control"></p>
    <p><input type="text" name="descricao" placeholder="Descrição" class="form-control"></p>
    <p>
        <select name="categoria" class="form-control">
            <option value="Formula 1">Formula 1</option>
            <option value="IndyCar">IndyCar</option>
            <option value="Formula E">Formula E</option>
            <option value="Nascar">Nascar</option>
            <option value="Stock Car">Stock Car</option>
        </select>
    </p>
    <p><textarea name="noticia" cols="30" rows="10" placeholder="Notícia" class="form-control"></textarea></p>
    <p><button class="btn btn-success" name="btn">Cadastrar</button></p>    
</form>