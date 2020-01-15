<!DOCTYPE html>
<html lang="fr">

<!-- head + titre-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/assets/css/Style.css">
    <title>Contact</title>
</head>

<body>
<!-- header contenant logo et phrase d'accroche (bootstrap) -->
    <header>
        <a href="index.html" title="logo accueil"  class=" col-md-6">
            <img src="../public/images/jarditou_logo.jpg" alt="Logo Jarditou" title="Logo Jarditou" class=" col-md-6"/>
        </a>
        <p class="text-center">TOUT LE JARDIN</p>
    </header>
 
<!-- menu burger désactiver < 768px -->
    <div id="navb" class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-light p-4">
                <nav>
                    <ul>
                        <li class="burger"><a class="color" href="index.html" title="Accueil">Accueil</a></li>
                        <li class="burger"><a class="color" href="tableau.php" title="Tableau">Tableau</a></li>
                        <li class="burger"><a class="color" href="Contact.html" title="Contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        </div>
<!-- menu "" burger "" > 768px -->
        <nav id="burg">
            <ul>
                <li><a href="index.html" title="Accueil">Accueil</a></li>
                <li><a href="tableau.html" title="Tableau">Tableau</a></li>
                <li><a href="Contact.html" title="Contact">Contact</a></li>
            </ul>
        </nav>
<!-- image de promotion-->
    <img src="../public/images/promotion.jpg" alt="promotion" title="promotion" id="promotion" class="img-fluid"/>
        <!-- tableau bottstrap responsive -->
        <?php
            require("formulaire_ajout.php");
        ?>
    <footer>
        <nav>
            <ul>
                <li><a href="Mentions_légales.html" title="Mentions légales">Mentions légales</a></li>
                <li><a href="Horaires.html" title="Horaires">Horaires</a></li>
                <li><a href="Plan_du_site.html" title="Plan du site">Plan du site</a></li>
            </ul>
        </nav>
    </footer>
    <!-- 3script bootstrap servant a son fonctionnement, popper est facultatif-->
    <script src="../controller/js/conformation.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
       
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>