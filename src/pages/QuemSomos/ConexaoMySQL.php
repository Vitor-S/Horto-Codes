<?php
    $pdo = new PDO("mysql:4.228.214.159;dbname=SITE_ROBOCODE", "QUASE_SUPER", "n!2kD241hdjQD"); 
    $link = mysqli_connect("4.228.214.159", "QUASE_SUPER", "n!2kD241hdjQD", "SITE_ROBOCODE");
    if (!$link) 
    {
        echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    else 
    {    
        echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;
    }
    mysqli_close($link);
?> 