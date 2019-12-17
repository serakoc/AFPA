<?php
    $valide = true;
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $sexe = $_POST["Sexe"];
    $email = $_POST["email"];
    $demande = $_POST["demande"];

    if (empty($nom) || empty($prenom) || empty($sexe) 
    || empty($email) || empty($demande))
    {
        echo '<p>VOUS AVEZ OUBLIEE UN CHAMP OBLIGATOIRE AU MINIMUM !</p>';
        $valide = false;
    }

    if ( !preg_match('#[a-zA-Zéèçàê]+-?[a-zA-Zéèçàê]+$#',$nom) )
    {
        echo '<p>NOM : INSERER UNIQUEMENT DES CARACTERES ALPHABETIQUES !</p>';
        $valide = false;
    }
    if ( !preg_match('#[a-zA-Zéèçàê]+-?[a-zA-Zéèçàê]+$#',$prenom) )
    {
        echo '<p>PRENOM : INSERER UNIQUEMENT DES CARACTERES ALPHABETIQUES !</p>';
        $valide = false;
    }
    if ( !preg_match('#[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}#',$email) )
    {
        echo '<p>FORMAT EMAIL NON RECONNU (exemple : exemple00@domaine.org)</p>';
        $valide = false;
    }
    if ($valide)
    {
        echo '<p> VOTRE FORMULAIRE DE CONTACT A été ENVOYER ! </p>';
        //echo '<p> REDIRECTION PAGE ACCUEIL (3 secondes) </p>';
        //header("Refresh : 3; url:http://localhost/site_jarditou/view/index.html");
    }
?>