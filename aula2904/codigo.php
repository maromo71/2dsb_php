<?php
session_start();
if (!isset($_SESSION['dados'])) {
    $_SESSION['dados'] = [];
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['dados'][] = [
        'nome' => htmlspecialchars($_POST['nome']),
        'email' => htmlspecialchars($_POST['email'])
    ];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dados Recebidos</title>
</head>
<body>
    <h1>Dados Recebidos</h1>
    <?php
    if (!empty($_SESSION['dados'])) {
        echo "<ul>";
        foreach ($_SESSION['dados'] as $dados) {
            echo "<li>Nome: " . $dados['nome'] . ", Email: " . 
                $dados['email'] . "</li>";
        }
        echo "</ul>";
    }
    ?>
    <a href="index.php">Voltar ao Formulário</a>
</body>
</html>
