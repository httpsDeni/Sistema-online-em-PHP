<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Colaboradores</title>
</head>
<body>
    <h1>Cadastro de Colaboradores</h1>
    <form action="process.php" method="post">
        <label for="nome">Nome do Colaborador:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="chefe">Chefe:</label>
        <input type="text" id="chefe" name="chefe">

        <button type="submit">Cadastrar</button>
    </form>

    <h2>Lista de Colaboradores</h2>
    <ul>
        <?php include 'lista_colaboradores.php'; ?>
    </ul>
</body>
</html>
