<?php
include 'conexao.php';
$id = $_GET['id'];
$sql = "SELECT * FROM eventos WHERE id = $id";
$res = $conn->query($sql);
$evento = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Evento</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Editar Evento</h1>
    <form action="atualizar_evento.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $evento['id']; ?>">
        <input type="text" name="nome" value="<?php echo $evento['nome']; ?>" required>
        <input type="date" name="data" value="<?php echo $evento['data']; ?>" required>
        <input type="text" name="local" value="<?php echo $evento['local']; ?>" required>
        <textarea name="descricao"><?php echo $evento['descricao']; ?></textarea>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>