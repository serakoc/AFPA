    //on crée une variable pour chaque de tranche d'age, age pour la saisie actuelle, 
    //vingt pour <20 ans, trente pour entre 20 et 40 ans, quarante pour >40, ainsi que les centenaire.
    var age = 0;
    var vingt = 0;
    var trente = 0;
    var quarante = 0;
    var centenaire = 0;
    //on entre dans la condition pour vérifier la premiere saisie
    do
    {   
	//on demande l'age
        var age = prompt("entrer l'age : ");
	
	//en fonction de l'age nous incrementons la variable pour la tranche d'age concernée
        if(age < 20)
        {
            vingt = vingt + 1;
        }
        else if(age < 40)
        {
            trente++;
        }
        else if(age < 100)
        {
            quarante++ ;
        }
        else if(age >= 100)
        {
            centenaire++;
        }
    }
    //si l'age est supérieur a 100 alors nous arretons la boucle, le choix d'un do while a été choisis pour compté le centenaire.
    while(age < 100)
    //on affiche ensuite cote a cote les valeur pour le nombre d'age saisie correspondant a chaque tranche d'age
    document.write(vingt + " ");
    document.write(trente + " ");
    document.write(quarante + " ");
    document.write(centenaire + " ");
 