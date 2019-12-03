
    var age = 0;
    var vingt = 0;
    var trente = 0;
    var quarante = 0;
    var centenaire = 0;
    do
    {   
        var age = prompt("entrer l'age : ");
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
    while(age < 100)
    console.log(vingt + " ");
    document.write(trente + " ");
    document.write(quarante + " ");
    document.write(centenaire + " ");
 