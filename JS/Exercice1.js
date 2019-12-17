	//on demande a l'utilisateur quel est la quantité ainsi que le prix unitaire unitaire
        var PU=prompt("prix unitaire");;
        var quantite=prompt("quantité");
	//creation de variable pour chaque étape de la conversion prix unitaire/quantié => prix total taxé avec remise
        var PAP;
        var PORT = 0;
        var REM;
        var TOT = PU*quantite;
	//affichage de la variable TOT dans la console
        console.log(TOT);
	//si le total est supérieur a 500 alors l'on applique une réduction de port
        if(TOT>500)
        {
            PORT = 0;
        }
	//étant donné que 2% des frais de port sur un total de moins de 500euro seras toujours inférieur a 6e alors on applique d'office des frais de port de 6e
        else 
        {
            //PORT = TOT*0.02;
            if(PORT < 6)
            {
                PORT = 6;
            }
        }
	//on affiche les frais de port
        console.log(PORT);
	//si le total est compris entre en 100 et 200 inclus alors on applique une réduction de 5% 
        if(TOT>=100 && TOT<=200)
        {
            REM = 0.95;
        }
	//si c'est supérieur a 200 alors on applique une réduction de 10%
        else if(TOT>200)
        {
            REM = 0.9;
        }
	//on affiche ensuite dans la console la remise appliquer
        console.log(REM);
	//on calcule le prix a payer en integrant les port ainsi que la remise
        PAP = (TOT + PORT)*REM;
	//on affiche le pap en console ainsi que sur la page
        console.log(PAP);
        document.write(PAP);
        alert(PAP);
  