<?php

echo '<h1>livro.php</h2>';

function InserirLivros( $nome, $genero, $publicacao, $editora, $valor, $quantidade){

    $conexao = new PDO("mysql:host=localhost;dbname=livraria", "root" , "");

    $guarda = "INSERT INTO controle_de_livros (nome_livro, genero_livro, data_publicação, editora, valor, quantidade) VALUE (:nome_livro, :genero, :publicacao, :editora, :valor, :quantidade)";

    $preparacao = $conexao->prepare($guarda);

    $preparacao->bindParam(":nome_livro",$nome);
    $preparacao->bindParam(":genero",$genero);
    $preparacao->bindParam(":publicacao",$publicacao);
    $preparacao->bindParam(":editora",$editora);
    $preparacao->bindParam(":valor",$valor);
    $preparacao->bindParam(":quantidade",$quantidade);

    $preparacao->execute();
}

InserirLivros("Os segredos da mente milionaria","Finanças","1992-08-01","Sextante", 35.92, 100);


?>