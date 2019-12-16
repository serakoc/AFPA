<?php
	echo '<form action="calculator.php">
	
    <input type="text" name="valeur1">      
	
    <input type="text" name="operateur">
     
    <input type="text" name="valeur2">      
	
    <input type="submit" value="Envoyer">
	
	</form>';


    function calculator()
    {
		$valeur1 = $_GET["valeur1"];
		$valeur2 = $_GET["valeur2"];
		$operateur = $_GET["operateur"];
		
		switch($operateur)
		{
			case "-" : $resultat = ($valeur1 - $valeur2);break;
			case "*" : $resultat = ($valeur1 * $valeur2);break;
			case "/" : $resultat = ($valeur1 / $valeur2);break;
			case "+" : $resultat = ($valeur1 + $valeur2);break;
		}
		echo "le resultat est $resultat"
    }