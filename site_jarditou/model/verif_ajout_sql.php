<?php
    $reference = $_POST["ref"];
    $libelle = $_POST["lib"];
    $prix = $_POST["prix"];
    $stock = $_POST["stock"];
    $couleur = $_POST["couleur"];
    /*$derniere_modif = $_POST["modif"];*/
    $date_ajout = $_POST["ajout"];
    $cat_id = $_POST["cat"];
    $desc = $_POST["desc"];
    $block = $_POST['block'];


    $valide=false;
    
    if (empty($reference) || !preg_match("#^[a-zA-Z_\-0-9]{2,20}$#",$reference))
    {
        echo "<p>Seulement des lettres et chiffres. (symbole autorisé : -_). 2-20 caracteres.</p>";
    }
    else
    {
        $valide = true;
    }

    if (empty($libelle) || !preg_match("#^[a-zA-Z0-9\ ]{2,20}$#",$libelle))
    {
        echo "<p>Lettres et chiffres seulement. 2-20 caracteres.</p>";
    }
    else
    {
        $valide = true;
    }

    if (empty($prix) || !preg_match("#^[0-9]+$#",$prix))
    {
        echo "<p>seulement des chiffres !</p>";
    }
    else
    {
        $valide = true;
    }

    if (empty($stock) || !preg_match("#^[0-9]+$#",$stock))
    {
        echo "<p>seulement des chiffres !</p>";
    }
    else
    {
        $valide = true;
    }

    if (empty($couleur) || !preg_match("#^[a-zA-Z]{3,10}$#",$couleur))
    {
        echo "<p>seulement des lettres ! 3-10 caractères </p>";
    }
    else
    {
        $valide = true;
    }

    
    /*echo "ref " . $reference . "<br>";
    echo "lib " . $libelle . "<br>";
    echo "prix " . $prix . "<br>";
    echo "stock " . $stock . "<br>";
    echo "couleur " . $couleur . "<br>";
    echo "date_ajout " . $date_ajout . "<br>";
    echo "cat" . $cat_id . "<br>";*/

    if($valide)
    {   
        

        require('connexion_bdd.php');
        $co_db = connectionBase();
        
        if ($block == "oui")
        {
            $block = 1;
        }

        if ($block == "non")
        {
            $block = null;
        }

        $requete_ajout = $co_db->prepare("INSERT INTO produits
        (pro_cat_id,pro_ref,pro_libelle,pro_prix,pro_description,pro_stock,pro_couleur,pro_d_ajout,pro_bloque)
        VALUES
        (:cat_id,:reference,:libelle,:prix,:desc,:stock,:couleur,:ajout,:bloque)");


        $requete_ajout->bindValue(':reference',$reference);
        $requete_ajout->bindValue(':libelle',$libelle);
        $requete_ajout->bindValue(':desc',$desc);
        $requete_ajout->bindValue(':cat_id',$cat_id, PDO::PARAM_INT);
        $requete_ajout->bindValue(':prix',$prix, PDO::PARAM_INT);
        $requete_ajout->bindValue(':stock',$stock, PDO::PARAM_INT);
        $requete_ajout->bindValue(':couleur',$couleur);
        $requete_ajout->bindValue(':ajout',$date_ajout);
        $requete_ajout->bindValue(':bloque',$block, PDO::PARAM_INT);

        $result = $requete_ajout->execute();

        /*var_dump($result);*/
        require('../controller/php/verif_img.php');
        header("Location:../view/tableau.php");
    }
    else
    {
        echo "<a href=\"../view/tableau.php\"><input type='submit' value='retour'>";
    }
?>
