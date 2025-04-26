<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Evento</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Adicionar Evento</h1>
    <form action="salvar_evento.php" method="POST">
        <input type="text" name="nome" placeholder="Nome do evento" required>
        <input type="date" name="data" required>
        <input type="text" name="local" placeholder="Local" required>
        <textarea name="descricao" placeholder="Descrição"></textarea>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>