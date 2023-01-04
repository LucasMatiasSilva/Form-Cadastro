<?php
    $dbHost = 'Localhost';
    $dbuserName = 'lucas';
    $dbPassword = '1010Luca@s';
    $dbName = 'form';

    $conection = new mysqli($dbHost, $dbuserName, $dbPassword, $dbName);

    /*
        if($conection->connect_errno){
            echo "Erro";
        }
        else {
            echo "Conectado!";
        }
    */
?>