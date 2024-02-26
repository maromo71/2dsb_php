<?php
    date_default_timezone_set('Brazil/East');
    $hoje = date("d/m/y", time() );
    $hora = date("h:i", time() );
    echo "Hoje é $hoje, agora são $hora horas\n";