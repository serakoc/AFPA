<?php
    require("connexion_bdd.php");
    $db=connectionBase();

    $pro_id = $_POST["id"];
    $cat_id = $_POST["cat"];
    $ref = $_POST["ref"];
    $lib = $_POST["lib"];
    $prix = $_POST["prix"];
    $stock = $_POST["stock"];
    $couleur = $_POST["couleur"];
    $modif = date("Y-m-d-h-m-s");
    $desc = $_POST["desc"];
    $block = $_POST['block'];

    $valide=false;

    if (empty($ref) || !preg_match("#^[a-zA-Z_\-0-9]{2,20}$#",$ref))
    {
        echo "<p>Seulement des lettres et chiffres. (symbole autorisé : -_). 2-20 caracteres.</p>";
    }
    else
    {
        $valide = true;
    }

    if (empty($lib) || !preg_match("#^[a-zA-Z0-9\ ]{2,20}$#",$lib))
    {
        echo "<p>Lettres et chiffres seulement. 2-20 caracteres.</p>";
    }
    else
    {
        $valide = true;
    }

    if (empty($prix) || !preg_match("#^[0-9\.]+$#",$prix))
    {
        echo "<p>prix : seulement des chiffres !</p>";
    }
    else
    {
        $valide = true;
    }

    if (empty($stock) || !preg_match("#^[0-9]+$#",$stock))
    {
        echo "<p>stock : seulement des chiffres !</p>";
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

    if($valide == true)
    {
        if ($block == "oui")
        {
            $block = 1;
        }

        if ($block == "non")
        {
            $block = null;
        }

        $requete = $db->prepare("UPDATE produits 
        SET pro_cat_id=:cat_id, pro_ref=:ref, pro_libelle=:lib, pro_description = :desc,pro_prix=:prix,pro_stock=:stock,pro_d_modif=:modif,pro_couleur = :couleur,pro_bloque=:bloque
        WHERE pro_id = $pro_id");

        $requete->bindValue(':cat_id',$cat_id,PDO::PARAM_INT);
        $requete->bindValue(':ref',$ref);
        $requete->bindValue(':lib',$lib);
        $requete->bindValue(':prix',$prix,PDO::PARAM_INT);
        $requete->bindValue(':desc',$desc);
        $requete->bindValue(':stock',$stock,PDO::PARAM_INT);
        $requete->bindValue(':modif',$modif);
        $requete->bindValue(':couleur',$couleur);
        $requete->bindValue(':bloque',$block,PDO::PARAM_INT);

       	$requete->execute();
        header('Location:../view/tableau.php');
	
    }

?>
