<?php
include 'conexao.php';

$nome = $_POST['nome'];
$data = $_POST['data'];
$local = $_POST['local'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO eventos (nome, data, local, descricao) 
        VALUES ('$nome', '$data', '$local', '$descricao')";

$conn->query($sql);

header("Location: index.php");
?>