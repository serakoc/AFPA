<?php
function connectionBase()
{
    $host = "localhost";
    $login = "root";
    $password = "";
    $base = "jarditou";

    try
    {
        $co_db = new PDO("mysql:host=localhost;charset=utf8;dbname=$base",$login,$password);
        $co_db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 
        return $co_db;
    }
    catch (exception $exception)
    {
        echo "Erreur :" . $exception->getMessage() . " <br>";
        echo "n° : " . $exception->getCode() ."<br>";
        die("connexion au serveur impossible");
    }
}

?>
