//on demande a l'utilisateur d'entrer une valeur
var N = prompt("que vaut N ?");

//on affecte 0 a somme afin de pr�parer l'algorithme
var somme = 0;

//cette boucle for ajoute a somme, la somme de i avec le i pr�cedent, 
//i pr�cedent que l'on auras additionner a la variable somme, ce qui ajoute a somme le i actuelle, autant de fois que N ne seras pas atteint
for(var i=1; i <= N; i++ )
{
	somme += i;
}
//on affiche le r�sultat a l'�cran
document.write(somme);
     