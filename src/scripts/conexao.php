<?php

    $hostname = "4.228.214.159";
    $banco = 'SITE_ROBOCODE';
    $user = "hordes";
    $password = "&3DI4oME6MB#U";

    try{
    $conn = new PDO('mysql:host='.$hostname.';dbname='.$banco.'',$user,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Error => '.$e->getMessage();
    }

