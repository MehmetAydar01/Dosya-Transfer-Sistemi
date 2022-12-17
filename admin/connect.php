<?php

    session_start();

    try {
        $db = new PDO("mysql:host=localhost;dbname=projefinal;charset=utf8", "mehmet", "1234");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }


?>