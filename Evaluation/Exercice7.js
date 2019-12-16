
//nous prenons le noeud de chaque element pour le mettre dans une variable
var bouton = document.getElementById('bouton');
var nom = document.getElementById('nom');
var prenom = document.getElementById('prenom');
var email = document.getElementById('email');
var demande = document.getElementById('demande');

//nous crééons un regex pour chaque champs a verifier
var regexNom = /^[a-zA-Z]+$/;
var regexPrenom =  /^[a-zA-Z]+$/;
var regexEmail = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;

//nous crééons un evenement sur le bouton du formulaire rélié via un id ou son noeud a été mis precedement dans une variable
bouton.addEventListener('click', verification);
//fonction de l'évenement
function verification(event)
{
	//si le regex ne correspond pas a la valeur du champ alors :
	//alors nous vérifions d'abord si le champs est vide, si c'est la cas nous insérer dans une span prévu sur l'html un message expliquant la situation
	//si le champs n'est pas vide alors nous expliquons quel format est attendu pour ce champs
	//event.preventDefault permet l'annulation de l'envoie du formulaire

	//nous faisons cela pour chaque champs
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

