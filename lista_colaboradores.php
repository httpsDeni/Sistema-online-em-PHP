<?php
// Conectar ao banco de dados SQLite
$db = new SQLite3('cadastro.db');

// Consultar todos os colaboradores cadastrados
$results = $db->query('SELECT * FROM colaboradores');

// Exibir a lista de colaboradores
while ($row = $results->fetchArray()) {
    echo '<li>' . htmlspecialchars($row['nome']) . ', Chefe: ' . htmlspecialchars($row['chefe']) . '</li>';
}

// Fechar a conexão com o banco de dados
$db->close();
?>
