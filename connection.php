<?php

    $hostname = 'localhost';
    $database = 'registration';
    $user = 'root';
    $password = '';

    // Create object with database informations
    $mysqli = new mysqli($hostname, $user, $password, $database);
    // Returns an error
    if ($mysqli->connect_errno) {
        echo 'Erro ao conectar: (' . $mysqli->connect_errno . ')' . $mysqli->connect_error;
    }

?>