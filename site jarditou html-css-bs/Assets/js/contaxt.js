
function verification()
{
    var nom = document.getElementById('nom');
    var prenom = document.getElementById('prenom');
    var naissance = document.getElementById('naissance');
    var email = document.getElementById('email');
    var bouton = document.getElementById('bouton');
    var form = document.querySelector('form');
    var body = document.body;
    var pForm = form.querySelector('p');

    var regexNom = new RegExp(/^[a-zA-Z]+$/);
    var regexPrenom =  new RegExp(/^[a-zA-Z]+$/);
    var regexEmail = new RegExp(/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/);
    /*var regexNaissance = new RegExp(/^[0-9]{8,8}$/);*/

    var divErreur = document.createElement("div");

    if(!regexNom.test(nom.value))
    {
        var paraErreurNom = document.createElement("p");
        paraErreurNom.textContent = "Nom : Entrez uniquement des caractères alphabétiques";
        paraErreurNom.className = "text-align:center;";
        divErreur.appendChild(paraErreurNom);
        console.log("nom");
        return false;
    }
    if(!regexPrenom.test(prenom.value))
    {
        var paraErreurPrenom = document.createElement("p");
        paraErreurPrenom.textContent="Prenom : uniquement des caractères alphabétiques";
        paraErreurPrenom.className = "text-align:center;";
        divErreur.appendChild(paraErreurPrenom);
        console.log("prenom");
        return false;
    }
    if(!regexEmail.test(email.value))
    {
        let paraErreurEmail = document.createElement("p");
        paraErreurEmail.textContent = "email : format exemple0@email.com";
        paraErreurEmail.className = "text-align:center;";
        divErreur.appendChild(paraErreurEmail);
        console.log("email");
        return false;
    }
    /*if(!regexNaissance.test(naissance.value))
    {
        var paraErreurNaissance = document.createElement("p");
        paraErreurNaissance.textContent = "date de naissance : format dd/mm/yyyy";
        divErreur.appendChild(paraErreurNaissance);
        console.log("naissance");
        return false;
    }*/
    pForm.insertAdjacentElement('afterbegin', divErreur);
    return true;
}