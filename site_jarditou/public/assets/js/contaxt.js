
var bouton = document.getElementById('bouton');
var nom = document.getElementById('nom');
var prenom = document.getElementById('prenom');
var email = document.getElementById('email');
var demande = document.getElementById('demande');
var mas = document.getElementById('mas');
var fem = document.getElementById('fem');
var regexNom = /^[a-zA-Zéèçàê]+-?[a-zA-Zéèçàê]+$/;
var regexPrenom =  /^[a-zA-Zéèçàê]+-?[a-zA-Zéèçàê]+$/;
var regexEmail = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;


bouton.addEventListener('click', verification);

function verification(event)
{
    if(!regexNom.test(nom.value))
    {   
        if(nom.validity.valueMissing)
        { 
            event.preventDefault();
            var paraErreurNom = document.getElementById('missNom');
            paraErreurNom.textContent = "Nom : Valeur obligatoire";
            paraErreurNom.style.color = "red";  
            paraErreurNom.style.fontSize = "11px";
        }
        else
        {
            event.preventDefault();
            var paraErreurNom = document.getElementById('missNom');
            paraErreurNom.textContent = "Nom : Entrez uniquement des caractères alphabétiques";
            paraErreurNom.style.color = "red";
            paraErreurNom.style.fontSize = "11px";
        }
    }
    if(!regexPrenom.test(prenom.value))
    {
        if(prenom.validity.valueMissing)
        {
            event.preventDefault();
            var paraErreurPrenom = document.getElementById('missPrenom');
            paraErreurPrenom.textContent="Prenom :  Valeur obligatoire";
            paraErreurPrenom.style.color = "red";
            paraErreurPrenom.style.fontSize = "11px";
        }
        else
        {
            event.preventDefault();
            var paraErreurPrenom = document.getElementById('missPrenom');
            paraErreurPrenom.textContent="Prenom : uniquement des caractères alphabétiques";
            paraErreurPrenom.style.color = "red";
            paraErreurPrenom.style.fontSize = "11px";
        }
    }
    if(!regexEmail.test(email.value))
    {
        if(email.validity.valueMissing)
        {
            event.preventDefault();
            let paraErreurEmail = document.getElementById('missEmail');
            paraErreurEmail.textContent = "email : Valeur obligatoire";
            paraErreurEmail.style.color = "red";
            paraErreurEmail.style.fontSize = "11px";
        }
        else
        {
            event.preventDefault();
            let paraErreurEmail = document.getElementById('missEmail');
            paraErreurEmail.textContent = "email : format exemple0@email.com";
            paraErreurEmail.style.color = "red";
            paraErreurEmail.style.fontSize = "11px";
        }
    }
    if(demande.validity.valueMissing)
    {
        event.preventDefault();
        let paraErreurEmail = document.getElementById('missDemande');
        paraErreurEmail.textContent = "Demande : Valeur obligatoire";
        paraErreurEmail.style.color = "red";
        paraErreurEmail.style.fontSize = "11px";
    }
    if(mas.validity.valueMissing && fem.validity.valueMissing)
    {
        event.preventDefault();
        let paraErreurEmail = document.getElementById('missSexe');
        paraErreurEmail.textContent = "Sexe : Valeur obligatoire";
        paraErreurEmail.style.color = "red";
        paraErreurEmail.style.fontSize = "11px";
    }

}

