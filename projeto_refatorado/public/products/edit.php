<?php
// src/views/edit.php

require_once __DIR__ . '/../../src/controllers/ProductController.php';

$controller = new ProductController();

if (!isset($_GET['id'])) {
    header('Location: /../../public/products/list.php');
    exit;
}

$product = $controller->viewProduct($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->editProduct($_GET['id'], $_POST);
    header('Location: /../../public/products/list.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Editar Produto</h1>
    </div>
    <div class="container">
        <form class="form" action="edit.php?id=<?= htmlspecialchars($product['id']) ?>" method="post">
            <label class="form-label" for="name">Nome:</label>
            <input class="form-control" type="text" id="name" name="name" value="<?= htmlspecialchars($product['name']) ?>" required>
            <br>
            <label class="form-label" for="description">Descrição:</label>
            <textarea class="form-control" id="description" name="description"><?= htmlspecialchars($product['description']) ?></textarea>
            <br>
            <label class="form-label" for="price">Preço:</label>
            <input class="form-control" type="number" id="price" name="price" step="0.01" value="<?= htmlspecialchars($product['price']) ?>"
                required>
            <br>
            <button class="btn btn-primary m-3" type="submit">Salvar</button>
            <a class="btn btn-secondary m-3" href="list.php">Voltar à lista</a>
        </form>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>