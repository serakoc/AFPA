//on cr�e une fonction qui executeras une instruction 10 fois : 1 fois pour chaque multiplication
//la mutlitplication est effectuer avec la variable i qui est incrementer a chaque tour de boucle
//ce qui simule la ultiplication de 1 a 10 sur la variable chiffre
        function Table(chiffre)
        {
            for(var i=1; i<=10; i++)
            {  
                alert(chiffre+" * "+i+" = "+(chiffre * i));
            }
        }
        Table(10);
    