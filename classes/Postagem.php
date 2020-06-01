<?php

class Postagem{

    public function create($titulo, $descricao, $categoria, $noticia){
        $sql = "INSERT INTO postagens(titulo, descricao, categoria, noticia) VALUES(?,?,?,?)";
        $stmt = Conexao::pdo()->prepare($sql);
        $stmt->execute([$titulo, $descricao, $categoria, $noticia]);
    }

    public function read(){
        $sql = "SELECT * FROM postagens ORDER BY data_post DESC";
        $stmt = Conexao::pdo()->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return $stmt->fetchAll();
        }
    }

    public function readOne($id){
        $sql = "SELECT * FROM postagens WHERE id = ?";
        $stmt = Conexao::pdo()->prepare($sql);
        $stmt->execute([$id]);
        if($stmt->rowCount() > 0){
            return $stmt->fetch();
        }else{
            return array();
        }
    }

    public function categorias(){
        $sql = "SELECT categoria FROM postagens";
        $stmt = Conexao::pdo()->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return $stmt->fetchAll();
        }else{
            return array();
        }
    }

    public function noticias($categoria){
        $sql = "SELECT * FROM postagens WHERE categoria = ?";
        $stmt = Conexao::pdo()->prepare($sql);
        $stmt->execute([$categoria]);
        if($stmt->rowCount()> 0){
            return $stmt->fetchAll();
        }else{
            return array();
        }
    }

    public function update($titulo, $descricao, $categoria, $noticia, $id){
        $sql = "UPDATE postagens SET titulo = ?, descricao = ?, categoria = ?, noticia = ? WHERE id = ?";
        $stmt = Conexao::pdo()->prepare($sql);
        $stmt->execute([$titulo, $descricao, $categoria, $noticia, $id]);
    }

    public function delete($id){
        $sql = "DELETE FROM postagens WHERE id = ?";
        $stmt = Conexao::pdo()->prepare($sql);
        $stmt->execute([$id]);
    }
}