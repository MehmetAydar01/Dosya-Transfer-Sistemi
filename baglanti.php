<?php

    session_start();
    error_reporting(0);

    try {
        $baglan = new PDO("mysql:host=localhost;dbname=projefinal;charset=utf8", "mehmet", "1234");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

?>