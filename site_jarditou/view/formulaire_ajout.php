<h3 style="margin-left: 60px;">FORMULAIRE D'AJOUT</h3>

<form action="../model/verif_ajout_sql.php" method="POST" enctype="multipart/form-data" style="margin : 30px;" >
    
    <label for='photo'>Photo : </label>
    <input type='file' name='img' id='photo'/>
    <br>
    
    <label for='ref'>Réference : *</label>
    <input type="text" id='ref' name='ref'>
    <span id='missref'></span> 
    <br/>
    
    <label for='lib'>Libellé : *</label>
    <input type="text" id='lib' name='lib'>
    <span id='misslib'></span> 
    <br/>

    <label for='cat'>Catégorie : *</label>
    <Select name='cat'>
        <?php
            require('../model/connexion_bdd.php');
            $db = connectionBase();
            $requete = $db->prepare("SELECT * FROM categories");
            $requete->execute();

            while($fetcheur = $requete->fetch())
            {
                echo "<option value=\"$fetcheur->cat_id\">$fetcheur->cat_nom";
            }
        ?>
    </Select><br/>

    <label for='desc'>Description :</label><br>
    <textarea id='desc' name='desc'>
    </textarea><br>

    <label for='prix'>Prix : *</label>
    <input type="text" id='prix' name='prix'>
    <span id='missprix'></span> 
    <br/>

    <label for='stock'>Stock : *</label>
    <input type="text" id='stock' name='stock'>
    <span id='missstock'></span> 
    <br/>
    

    <label for='couleur'>Couleur : </label>
    <input type="text" id='couleur' name='couleur'>
    <span id='misscouleur'></span>   
    <br/>

    <label for='ajout'>Ajout : </label>
    <input type="text" id='ajout' name='ajout' value="<?php echo date("Y-m-d")?>" readonly><br/>

    <p>Bloqué : </p>
    <input type="radio" id='y' name='block' value="oui">
    <label for='y'>Oui </label>
    <input type="radio" id='n' name="block" value="non">
    <label for='n'>Non </label><br/>

    <input id='bouton' type="submit" value="ajouter"/>
</form>

<script src='../public/assets/js/verif_form.js'></script>
