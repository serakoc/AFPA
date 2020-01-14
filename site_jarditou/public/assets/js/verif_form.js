var ref = document.getElementById("ref");
var lib = document.getElementById("lib");
/*var cat = document.getElementsByName("cat");*/
var prx = document.getElementById("prix");
var stock = document.getElementById("stock");
var couleur = document.getElementById("couleur");

var bouton = document.getElementById('bouton');

var missref = document.getElementById("missref");
var misslib = document.getElementById("misslib");
var missprx = document.getElementById("missprix");
var missstock = document.getElementById("missstock");
var misscouleur = document.getElementById("misscouleur");


var regexRef = /^[a-zA-Z_\-0-9]{2,20}$/;
var regexLib = /^[a-zA-Z0-9 ]{2,20}$/;
var justLetter = /^[a-zA-Z]{3,10}$/;
var justeNumber = /^[0-9]$/
bouton.addEventListener('click',function(e)
{
    missref.textContent="";
    misslib.textContent="";
    missprx.textContent="";
    missstock.textContent="";
    misscouleur.textContent="";

    if(!regexRef.test(ref.value) || ref.validity.valueMissing)
    {
        missref.textContent = "Seulement des lettres et chiffres. (symbole autorisé : -_). 2-20 caracteres.";
        e.preventDefault();
    }
    if(!regexLib.test(lib.value) || lib.validity.valueMissing)
    {
        misslib.textContent = "Lettres et chiffres seulement. 2-20 caracteres.";
        e.preventDefault();
    }

    if(isNaN(prx.value))
    {
        missprix.textContent = "seulement des chiffres !";
        e.preventDefault();
    }

    if(isNaN(stock.value))
    {
        missstock.textContent = "seulement des chiffres !";
        e.preventDefault();
    }

    if(!justLetter.test(couleur.value) || couleur.validity.valueMissing)
    {
        misscouleur.textContent = "seulement des lettres ! 3-10 caractères";
        e.preventDefault();
    }
});