	//on crée une variable booléenne afin de gerer le while
        var continuer = true;

	//on crée une autre variable booléenne pour gerer le cas ou la premiere saisie serais 0
	//nous avons besoin de faire sa, car nous avons besoin de la 1ere saisie comme réference pour min et max
        var une = true;

	//on entre au moins une fois dans la boucle while demander la saisie
        do
        {
            var valeur = prompt("entrer la valeur : ");
	    
	    //cette condtion s'éxecute seulement lors de la premiere saisie, comme referencement pour min et max
            if(une)
            {
                max = valeur;
                min = valeur,
                une = false;
            }
	    
	    //nous gérons le cas ou la valeur est 0, dans ce cas nous changeons la valeur de condtionnement de la boucle
            if(valeur == 0)
            {
                continuer = false;
            }
	    //si la valeur n'est pas 0, alors nous comparons la valeur actuelle avec min max, pour savoir quel valeur est supérieure a l'autre
            else
            {
                if(valeur > max)
                {
                    max = valeur;
                }
                else if (valeur < min)
                {
                    min = valeur;
                }
            }
        } while(continuer)
	//on affiche ensuite le résultat
        document.write(min + " " + max);
   