<?php
    require_once "config.php";
    $_SESSION["pagina"]= "página index";
    echo "Status da sessão: " . session_status() . "<br>";
    require_once "exemplo01.php";
    echo "Sessao antes de destruir: " . session_id() . "<br>";
    var_dump($_SESSION);
    echo "<br>";
    session_destroy();
    //reiniciou a sessão
    session_start();
    session_regenerate_id();
    echo "Sessao depois de destruir: " . session_id() . "<br>";
    var_dump($_SESSION);
?>  