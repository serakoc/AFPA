	//on cr�e une variable bool�enne afin de gerer le while
        var continuer = true;

	//on cr�e une autre variable bool�enne pour gerer le cas ou la premiere saisie serais 0
	//nous avons besoin de faire sa, car nous avons besoin de la 1ere saisie comme r�ference pour min et max
        var une = true;

	//on entre au moins une fois dans la boucle while demander la saisie
        do
        {
            var valeur = prompt("entrer la valeur : ");
	    
	    //cette condtion s'�xecute seulement lors de la premiere saisie, comme referencement pour min et max
            if(une)
            {
                max = valeur;
                min = valeur,
                une = false;
            }
	    
	    //nous g�rons le cas ou la valeur est 0, dans ce cas nous changeons la valeur de condtionnement de la boucle
            if(valeur == 0)
            {
                continuer = false;
            }
	    //si la valeur n'est pas 0, alors nous comparons la valeur actuelle avec min max, pour savoir quel valeur est sup�rieure a l'autre
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
	//on affiche ensuite le r�sultat
        document.write(min + " " + max);
   