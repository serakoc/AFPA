
var bouton = document.body.getElementById('bouton');
var nom = document.getElementById('nom');
var prenom = document.getElementById('prenom');
var naissance = document.getElementById('naissance');
var email = document.getElementById('email');

bouton.addEventListener('click', verification);

function verification(event)
{
    
    var regexNom = new RegExp(/^[a-zA-Z]+$/);
    var regexPrenom =  new RegExp(/^[a-zA-Z]+$/);
    var regexEmail = new RegExp(/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/);
    /*var regexNaissance = new RegExp(/^[0-9]{8,8}$/);*/

    if(!regexNom.test(nom.value))
    {
        event.preventDefault();
        var paraErreurNom = document.body.getElementById('missNom');
        paraErreurNom.textContent = "Nom : Entrez uniquement des caractères alphabétiques";
    }
    if(!regexPrenom.test(prenom.value))
    {
        event.preventDefault();
        var paraErreurPrenom = document.body.getElementById('missPrenom');
        paraErreurPrenom.textContent="Prenom : uniquement des caractères alphabétiques";
    }
    if(!regexEmail.test(email.value))
    {
        event.preventDefault();
        let paraErreurEmail = document.body.getElementById('missEmail');
        paraErreurEmail.textContent = "email : format exemple0@email.com";
    }
    /*if(!regexNaissance.test(naissance.value))
    {
        var paraErreurNaissance = document.createElement("p");
        paraErreurNaissance.textContent = "date de naissance : format dd/mm/yyyy";
        divErreur.appendChild(paraErreurNaissance);
        console.log("naissance");
        return false;
    }*/
}