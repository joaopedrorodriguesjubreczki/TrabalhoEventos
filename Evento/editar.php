<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$data = $_POST['data'];
$local = $_POST['local'];
$descricao = $_POST['descricao'];

$sql = "UPDATE eventos SET nome='$nome', data='$data', local='$local', descricao='$descricao' WHERE id=$id";
$conn->query($sql);

header("Location: index.php");
?>