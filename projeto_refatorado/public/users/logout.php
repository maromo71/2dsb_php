<?php
require_once __DIR__ . '/../../src/controllers/UserController.php';

$controller = new UserController();
$controller->logout();
header('Location: /../../public/users/login.php');
?>