
        var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];
        console.log(tab);
        var prenom = prompt("entrez le prénom : ");
        var num_index = tab.indexOf(prenom)
        if(num_index > -1)
        {
            tab.splice(num_index,1);
            tab.push("");
        }
        console.log(tab);
  