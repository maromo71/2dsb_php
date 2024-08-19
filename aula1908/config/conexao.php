<?php
    $usuario = "root";
    $senha = "";
    try {
        //configuração do PDO
        $pdo = new PDO('mysql:host=localhost;dbname=escola', 
            $usuario, 
            $senha);
        $pdo->setAttribute(
            PDO::ATTR_ERRMODE, 
            PDO::ERRMODE_EXCEPTION
        );
    } catch (PDOException $ex) {
        //Lanca exceção se der erro na conexao
        die($ex->getMessage());
    }