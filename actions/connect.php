


<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=portfoliophp', 'root', 'root');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
?>