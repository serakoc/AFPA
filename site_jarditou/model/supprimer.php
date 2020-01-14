<?php
    require('connexion_bdd.php');
    $co_bdd = connectionBase();

    $id = $_GET['id'];
    $extension = $_GET['ext'];

    $requete = $co_bdd->prepare("DELETE FROM produits WHERE pro_id=:id");
    $requete->bindValue(':id',$id);
    $requete->execute();

    unlink("../public/jarditou_photos/$id.$extension");
    header("Location:../view/tableau.php");
?>