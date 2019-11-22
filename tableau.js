var tableau = [3,2,1];
console.log("trie par odre croissant : ");
var i=0;
while(i<tableau.length)
{
    if(tableau[i]>tableau[i+1] && i<tableau.length)
    {
        var temporaire = tableau[i];
        tableau[i] = tableau[i+1];
        tableau[i+1] = temporaire;
        i = 0;
    }
    i++;
}
i = 0;
while(i<tableau.length)
{
    console.log(tableau[i]);
    i++;
}
