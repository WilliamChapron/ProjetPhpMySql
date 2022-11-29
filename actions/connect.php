<?php
    session_start();
    try
    {
        $pdo = new PDO('mysql:host=localhost;dbname=portfoliophp', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAME');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
?>