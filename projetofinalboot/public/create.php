<?php
// src/views/create.php
require_once __DIR__ . '/../src/controllers/ProductController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new ProductController();
    $controller->createProduct($_POST);
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Criar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Criar Novo Produto</h1>
        <form class="form" action="create.php" method="post">
            <label class="form-label" for="name">Nome:</label>
            <input class="form-control" type="text" id="name" name="name" required>
            <br>
            <label class="form-label" for="description">Descrição:</label>
            <textarea class="form-control" id="description" name="description"></textarea>
            <br>
            <label class="form-label" for="price">Preço:</label>
            <input class="form-control" type="number" id="price" name="price" step="0.01" required>
            <br>
            <button class="btn btn-primary m-3" type="submit">Criar</button>
            <a class="btn btn-secondary m-3" href="index.php">Voltar à lista</a>
        </form>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>