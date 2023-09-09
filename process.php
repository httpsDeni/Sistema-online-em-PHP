<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $chefe = $_POST["chefe"];

    // Conectar ao banco de dados SQLite (criará um arquivo chamado 'cadastro.db' na mesma pasta)
    $db = new SQLite3('cadastro.db');

    // Criar a tabela 'colaboradores' se não existir
    $db->exec('CREATE TABLE IF NOT EXISTS colaboradores (id INTEGER PRIMARY KEY, nome TEXT, chefe TEXT)');

    // Inserir o novo colaborador no banco de dados
    $stmt = $db->prepare('INSERT INTO colaboradores (nome, chefe) VALUES (:nome, :chefe)');
    $stmt->bindValue(':nome', $nome, SQLITE3_TEXT);
    $stmt->bindValue(':chefe', $chefe, SQLITE3_TEXT);
    $stmt->execute();

    // Fechar a conexão com o banco de dados
    $db->close();
}

header('Location: index.php'); // Redirecionar de volta para a página inicial
