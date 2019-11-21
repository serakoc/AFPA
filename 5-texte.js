var nom = window.prompt("Nom");
var prenom = window.prompt("Prenom");
if(window.confirm("êtes-vous un homme") == true)
{
 var sexe = "Monsieur";
}
else 
{
    var sexe = "Madame";
}
window.alert("Bonjour "+sexe+" "+nom+" "+prenom+"\rBienvenu sur notre site web");
