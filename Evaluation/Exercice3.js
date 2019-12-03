
        var continuer = true;
        var une = true;
        do
        {
            var valeur = prompt("entrer la valeur : ");
            if(une)
            {
                max = valeur;
                min = valeur,
                une = false;
            }
            if(valeur == 0)
            {
                continuer = false;
            }
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
        document.write(min + " " + max);
   