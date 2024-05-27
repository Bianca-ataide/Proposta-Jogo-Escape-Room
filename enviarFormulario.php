<?php

require "conexao.php";
$pdo = mysqlConnect();

$nome = $_POST["nome"];
$email = $_POST["email"];
$recomend = $_POST["recomend"]?? "";
$texto = $_POST["texto"] ?? "";
$fases = implode(",", $_POST['fases']);
$motivo = $_POST["motivo"] ?? "";

if (trim($nome) == "") {
    echo "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo nome!</div>";

} else if (trim($email) == "") {
    echo "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo email!</div>";

} else if (trim($recomend) == "") {
    echo "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o selecionar uma opção!</div>";

} else if (trim($fases)=="NULL") {
    $fases = "";

} else {
    $sql = <<<SQL
            INSERT INTO formulario (nome, email, recomend, texto, fases, motivo)
            VALUES (?, ?, ?, ?, ?, ?);
            SQL;

    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nome, $email, $recomend, $texto, $fases, $motivo]);
        header("location: formulario.php");
        exit();

    } catch (Exception $e) {
        exit('Falha ao cadastrar os dados: ' . $e->getMessage());
    }
}