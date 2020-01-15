<?php
    require('connexion_bdd.php');
    $co_db = connectionBase();

    echo "<table style=\"border:1px solid black\" class='table'>";
    echo "<thead>";
    echo "<tr>";
    /*echo "<th style=\"border:1px solid black\">Select</th>";*/
    echo "<th style=\"border:1px solid black\">Photo</th>";
    echo "<th style=\"border:1px solid black\">ID</th>";
    echo "<th style=\"border:1px solid black\">Référence</th>";
    echo "<th style=\"border:1px solid black\">Catégorie</th>";
    echo "<th style=\"border:1px solid black\">Libellé</th>";
    echo "<th style=\"border:1px solid black\">Prix</th>";
    echo "<th style=\"border:1px solid black\">Stock</th>";
    echo "<th style=\"border:1px solid black\">Couleur</th>";
    echo "<th style=\"border:1px solid black\">Ajout</th>";
    echo "<th style=\"border:1px solid black\">Modif</th>";
    echo "<th style=\"border:1px solid black\">Bloqué</th>";
    echo "<th style=\"border:1px solid black\">Supprimer ?</th>";
    echo "</tr>";
    
    $requete = $co_db->prepare("SELECT * FROM produits");
    $requete->execute();

    echo "<tbody>";
    while($tab = $requete->fetch())
    {
        echo "<tr>";

        /*echo "<td style=\"border:1px solid black\"><input type=\"checkbox\" name=\"select\"/></td>";*/

        echo "<td style=\"border:1px solid black\"><img src=\"../public/jarditou_photos/$tab->pro_id.$tab->pro_photo\" width=\"70\" height=\"70\"></td>";

        echo "<td style=\"border:1px solid black\">$tab->pro_id</td>";

        echo "<td style=\"border:1px solid black\">$tab->pro_ref</td>";

        echo "<td style=\"border:1px solid black\">$tab->pro_cat_id</td>";

        echo "<td style='border:1px solid black'> <a class='no' href=\"../view/page_d_modif.php?id=$tab->pro_id&cat=$tab->pro_cat_id&ref=$tab->pro_ref&lib=$tab->pro_libelle&prix=$tab->pro_prix&stock=$tab->pro_stock&cat_id=$tab->pro_cat_id&couleur=$tab->pro_couleur&desc=$tab->pro_description&ajout=$tab->pro_d_ajout&modif=". date("Y-m-d") ."&src=$tab->pro_id.$tab->pro_photo&block=$tab->pro_bloque\">$tab->pro_libelle</a></td>";

        echo "<td style=\"border:1px solid black\">$tab->pro_prix</td>";

        echo "<td style=\"border:1px solid black\">$tab->pro_stock</td>";

        echo "<td style=\"border:1px solid black\">$tab->pro_couleur</td>";

        echo "<td style=\"border:1px solid black\">$tab->pro_d_ajout</td>";

        echo "<td style=\"border:1px solid black\">$tab->pro_d_modif</td>";

        echo "<td style=\"border:1px solid black\">";
        if($tab->pro_bloque == 1)
            {
                echo "Oui";

            }
        echo "</td>";

        echo "<td>
               
                <a class='no' href='../model/supprimer.php?id=$tab->pro_id&ext=$tab->pro_photo'><input type='button' value='supprimer' class='id'/></a>
          
            </td>";
    
        echo "</tr>";


    }

    echo "</tbody>";
    echo "</table>";
?>