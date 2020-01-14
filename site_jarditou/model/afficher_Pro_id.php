
<!DOCTYPE html>

<html lang="fr">

    <head>

    <meta charset="UTF-8">
    <title>Atelier PHP N°4 - page de détail</title>

    </head>

    <body> 

        <?php 
            /*Connexion a la bdd*/
            require('connexion_bdd.php');
            $connexion_db = connectionBase();

            /*selection de la variable get 'pro_id' attrivué a une variable*/
            $pro_id = $_GET['pro_id'];

            /*préparation d'une requete dites "sécurisée" (évite les injection sql)*/
            $requete = $connexion_db->prepare("SELECT * FROM produits WHERE pro_id = :id");
            
            /*remplacement des variable nomméé :id*/
            $requete->bindValue(":id",$pro_id);

            /*envoie de la requete*/
            $requete->execute();

            /*qui est transmis ensuite(TOTALEMENT 
            (toutes les requetes, non ligne par ligne comme avec la 
            méthode fetch)) a la variable requete*/

            $tableau = $requete->fetch();

            echo $tableau->pro_libelle;

            
            /*while( $tableau = $requete->fetch())
            {   
                echo count($tableau);
                echo "<br>";
                for($index = 0; $index < count($tableau) ; $index++)
                {
                    echo "go";
                    echo $tableau[$index];
                    echo "<br>";
                }
            }*/
        ?>

    </body>

</html>