<?php

    require './helpers/conexion.php';

    define("RAIZ", "https://taller-simu-production.up.railway.app");

    // $db_config = [
    //     "host" => "database-mdb",
    //     "port" => "3306",
    //     "user" => "root",
    //     "pass" => "isaias",
    //     "name" => "censo",
    // ];

    $db_config = [
        "host" => "containers-us-west-131.railway.app",
        "port" => "5782",
        "user" => "root",
        "pass" => "NUqSbD95jcWlnvHi9GQ6",
        "name" => "railway",
    ];
    
    $_CONEXION = conexion_db($db_config);
    $_QUESTIONS = json_decode(file_get_contents("./src/json/questions.json"), true);
?>