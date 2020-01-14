<?php
    require('connexion_bdd.php');

    $co_db = connectionBase();

    $id = $_POST["id"];
    $ref = $_POST["ref"];
    $cat = (int)$_POST["cat"];
    $lib = $_POST["lib"];
    $desc = $_POST["desc"];
    $prix = (int)$_POST["prix"];
    $stock = (int)$_POST["stock"];
    $couleur = $_POST["couleur"];
    $bloque = $_POST["block"];
    $modif = $_POST["modif"];

    $requete = $co_db->prepare("UPDATE produits SET 
    pro_ref=:ref, 
    pro_libelle=:lib, 
    pro_cat_id = :cat, 
    pro_prix = :prix, 
    pro_stock = :stock,
    pro_couleur=:couleur,
    pro_description=:desc, 
    pro_bloque=:bloque,
    pro_d_modif=:modif WHERE pro_id = :id
    ");

    if($bloque == "y")
        $bloque = true;
    else
        $bloque = false;

    $requete->bindValue(":ref",$ref);
    $requete->bindValue(":lib",$lib);
    $requete->bindValue(":cat",$cat,PDO::PARAM_INT);
    $requete->bindValue(":prix",$prix,PDO::PARAM_INT);
    $requete->bindValue(":stock",$stock,PDO::PARAM_INT);
    $requete->bindValue(":desc",$desc);
    $requete->bindValue(":couleur",$couleur);
    $requete->bindValue(":bloque", $bloque);
    $requete->bindValue(":modif",$modif);
    $requete->bindValue(":id",$id);

    $test = $requete->execute();
    var_dump($test);
?>