	//création du tableau qui serviras a l'algorithme
        var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];
	//on affiche dans la console pour comparer après la suppresion ou non de la variable désirée
        console.log(tab);
	//nous demandons quel est la variable a supprimer dans le tableau
        var prenom = prompt("entrez le prénom : ");
	//nous recherchons grace a indexof si la variable demander est présente dans le tableau, si oui elle renvoie son indice, sinon : elle renvoie -1
        var num_index = tab.indexOf(prenom)
	//on compare le retour d'index of avec la valeur -1 qui est la valeur de retour quand indexof n'a rien trouvé
        if(num_index > -1)
        {
		//donc nous entrons dans la condition seulement si la ariable est présente
		//la méthode splice permet de remplacer un certain nombre d'element dans un tableau 
		//donc ici, par l'absence du troisieme parametre a splice, nous remplacons 1 element par
		//rien du tout (donc nous supprimons) a partir de l'index donné par num_index
		//nous insérons ensuite une chaine de caractère vide en derniere position au tableau 
            tab.splice(num_index,1);
            tab.push("");
        }
//nous affichons le tableau pour le comparons a son précedent état
        console.log(tab);
  