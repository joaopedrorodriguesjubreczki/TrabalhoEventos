<?php include 'conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Eventos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Eventos</h1>
    <a href="adicionar.php">Adicionar Evento</a>
    <table>
        <tr><th>Nome</th><th>Data</th><th>Local</th><th>Ações</th></tr>
        <?php
        $sql = "SELECT * FROM eventos ORDER BY data";
        $res = $conn->query($sql);
        while ($evento = $res->fetch_assoc()) {
            echo "<tr>
                <td>{$evento['nome']}</td>
                <td>{$evento['data']}</td>
                <td>{$evento['local']}</td>
                <td>
                    <a href='detalhes.php?id={$evento['id']}'>Ver</a> |
                    <a href='editar.php?id={$evento['id']}'>Editar</a> |
                    <a href='deletar.php?id={$evento['id']}'>Excluir</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>