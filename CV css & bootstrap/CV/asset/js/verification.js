var name = document.getElementById('nom');
var email = document.getElementById('mail');
var envoie = document.getElementById('envoieForm');
var blocErreur = document.getElementById('checkErr');

var regNom = /^[a-zA-Z]+$/;
var regEmail = /^[a-zA-Z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;


envoie.addEventListener("click",verif);

function verif(event){
    blocErreur.innerHTML = "";
    if(!(regNom.test(name.value))) 
    {
        blocErreur.insertAdjacentHTML('afterbegin', '<p style="color:red;font-size : 12px">Seulement des caractères alphabétiques s\'il vous plaît !</p>');
        event.preventDefault();
    }
    if(!(regEmail.test(email.value))) 
    {
        blocErreur.insertAdjacentHTML('afterbegin', '<p style="color:red;font-size : 12px">Comment puis-je vous répondre ? vérifier que vous n\'avez rien oublier ! (exemple: exemple00@votre_domaine.fr)</p>');
        event.preventDefault();
    }
}