<?php
$usuarios = [
    [
        "nome" => "Carlos",
        "email" => "carlos@example.com"
    ],
    [
        "nome" => "Mariana",
        "email" => "mariana@example.com"
    ]
];
foreach ($usuarios as $usuario) {
    echo "Nome: " . $usuario["nome"] . "\n";
    echo "Email: " . $usuario["email"] . "  \n\n";
}