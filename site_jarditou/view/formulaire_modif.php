<h3 style="margin-left: 60px;">FORMULAIRE DE DETAIL </h3>

<form action="../model/verif_and_modif.php" method="POST" style="margin : 30px;">

    <img src='../public/jarditou_photos/<?php echo $_GET['src']?>' width="150" height="150"><br/>

    <label for='id'>ID : *</label>
    <input type="text" id='id' name='id' value="<?php echo $_GET["id"] ?>"readonly><br/>

    <label for='ref'>Réference : *</label>
    <input type="text" id='ref' name='ref' value="<?php echo $_GET["ref"] ?>">
    <span id='missref'></span>
    <br/>
    

    <label for='lib'>Libellé : *</label>
    <input type="text" id='lib' name='lib' value="<?php echo $_GET["lib"] ?>">
    <span id='misslib'></span>
    <br/>

    

    <label for='cat'>Catégorie : *</label>
    <Select name='cat'>
        <?php
            require('../model/connexion_bdd.php');
            $db = connectionBase();
            $cat = $_GET["cat"];
            $requete = $db->prepare("SELECT * FROM categories");
            $requete->execute();

            while($fetcheur = $requete->fetch())
            {
                if ($fetcheur->cat_id == $cat)
                    echo "<option value=\"$fetcheur->cat_id\" selected='selected'>$fetcheur->cat_nom";
                else
                    echo "<option value=\"$fetcheur->cat_id\">$fetcheur->cat_nom";
            }
        ?>
    </Select><br/>
    
    <label for='desc'>Description :</label><br>

    <textarea id='desc' name='desc' value="<?php
        $requete = $db->prepare("SELECT pro_description FROM produits WHERE pro_id = :id");
        $requete->bindValue(':id',$_GET["id"]);
        $requete->execute();
        $description = $requete->fetch();
        echo $description->pro_description;
    ?>">
    <?php echo "$description->pro_description"; ?>
    </textarea><br/>


    <label for='prix'>Prix : *</label>
    <input type="text" id='prix' name='prix' value="<?php echo $_GET["prix"] ?>">
    <span id='missprix'></span>
    <br/>
    
    <label for='stock'>Stock : *</label>
    <input type="text" id='stock' name='stock' value="<?php echo $_GET["stock"] ?>">
    <span id='missstock'></span>
    <br/>
                

    <label for='couleur'>Couleur : </label>
    <input type="text" id='couleur' name='couleur' value="<?php echo $_GET["couleur"] ?>">
    <span id='misscouleur'></span>   
    <br/>
    
    <label for='id'>Date d'ajout : *</label>
    <input type="text" id='id' name='ajout' value="<?php echo $_GET["ajout"] ?>"readonly><br/>

    <label for='id'>Date de modification : *</label>
    <input type="text" id='id' name='modif' value="<?php echo $_GET["modif"] ?>"readonly><br/>

    <p>Bloqué : </p>
    <input type="radio" id='y' name='block' value="oui" <?php if($_GET['block']) echo "checked=\"checked\"";?>>
    <label for='y'>Oui </label>
    <input type="radio" id='n' name="block" value="non" <?php if(!$_GET['block']) echo "checked=\"checked\"";?>>
    <label for='n'>Non </label><br/>

    <input id='bouton' type="submit" value="modifier"/>
</form>

<script src='../public/assets/js/verif_form.js'></script>
