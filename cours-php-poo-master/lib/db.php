<?php

function getPdo() : PDO
{   
    try
    {
        $pdo = new PDO('mysql:host=localhost;dbname=blogpoo;charset=utf8', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        return $pdo;
    }
    catch(exception $ex)
    {
        echo "Erreur :" . $exception->getMessage() . " <br>";
        echo "n° : " . $exception->getCode() ."<br>";
        die("connexion au serveur impossible");
    }
    
}

?>
