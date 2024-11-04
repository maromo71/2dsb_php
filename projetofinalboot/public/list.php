<?php
// src/views/list.php
session_start();
if ($_SESSION['user'] == null) {
    header('Location: login.php');
}
require_once __DIR__ . '/../src/controllers/ProductController.php';
$controller = new ProductController();
$products = $controller->listProducts();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Lista de Produtos</h1>
        <a class="btn btn-primary mb-3" href="create.php">Adicionar Produto ></a>
        <a class="btn btn-danger mb-3" href="logout.php">Efetuar Logout  >>>></a>
    </div>
    <div class="container">
        <table class="table table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($products as $product): ?>
                <tr class="table-light">
                    <td><?= htmlspecialchars($product['id']) ?></td>
                    <td><?= htmlspecialchars($product['name']) ?></td>
                    <td><?= htmlspecialchars($product['description']) ?></td>
                    <td><?= htmlspecialchars($product['price']) ?></td>
                    <td>
                        <a class="btn btn-primary" href="edit.php?id=<?= htmlspecialchars($product['id']) ?>">Editar</a>
                        <a class="btn btn-danger" href="delete.php?id=<?= htmlspecialchars($product['id']) ?>"
                            onclick="return confirm('Tem certeza que deseja excluir este produto?')">
                            Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>