<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="../model/update.php" method="POST">

        <label for='ref'>ID : </label>
        <input type="text" id='id' name='id' value="<?php echo $_GET['pro_id'];?>" readonly><br/>

        <label for='ref'>Réference : </label>
        <input type="text" id='ref' name='ref'><br/>

        <label for='lib'>Libellé : </label>
        <input type="text" id='lib' name='lib'><br/>

        <label for='cat'>Catégorie : </label>
        <input type="text" id='cat' name='cat'><br/>

        <label for='desc'>Description : </label>
        <input type="text" id='desc' name='desc'><br/>

        <label for='prix'>Prix : </label>
        <input type="text" id='prix' name='prix'><br/>

        <label for='stock'>Stock : </label>
        <input type="text" id='stock' name='stock'><br/>

        <label for='couleur'>Couleur : </label>
        <input type="text" id='couleur' name='couleur'><br/>

        <label for='modif'>Modif : </label>
        <input type="text" id='modif' name='modif' value="<?php echo date("Y-m-d")?>" readonly><br/>

        <label for='ajout'>Ajout : </label>
        <input type="text" id='ajout' name='ajout' value="<?php echo $_GET['pro_d_ajout']?>" readonly><br/>

        <p>Bloqué : </p>
        <input type="radio" id='y' name='block'>
        <label for='y'>Oui </label>
        <input type="radio" id='n' name='block'>
        <label for='n'>Non </label><br/>
        <input type="submit" value="ajouter"/>

    </form>
</body>
</html>