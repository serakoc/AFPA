var AllBouton = document.getElementsByClassName("id");

for (var i = 0; i< AllBouton.length; i++)
{
    AllBouton[i].addEventListener('click',function(e)
    {
            if(!confirm("Etes vous sur de supprimer l'article"))
                e.preventDefault();
    });
}