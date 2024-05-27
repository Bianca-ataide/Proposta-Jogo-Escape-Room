<?php

require "conexao.php";
$pdo = mysqlConnect();

$nome = $_POST["nome"] ? $_POST["nome"] : "Anonimo";
$comentario = $_POST["comentario"]??"";


if (trim($comentario)=="") {
    echo  "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo Comentário!</div>";

} else {
    $sql = <<<SQL
            INSERT INTO comentarios (nome, comentario)
            VALUES (?, ?);
            SQL;

    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nome, $comentario]);
        header("location: index.php");
        exit();

    } catch (Exception $e) {
        exit('Falha ao cadastrar os dados: ' . $e->getMessage());
    }
}
