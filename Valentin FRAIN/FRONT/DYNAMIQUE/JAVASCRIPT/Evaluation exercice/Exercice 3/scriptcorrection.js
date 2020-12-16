var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];

console.table(tab);
console.log(tab);

var prenom;

    console.table(tab);
    prenom1 = prompt('Saisir le prénom à effacer');
    prenom = prenom1.charAt(0).toUpperCase() + prenom1.substr(1).toLowerCase();

    document.write(prenom);
    if(tab.indexOf(prenom) != -1 )
    {
        tab.splice(tab.indexOf(prenom),1);
        tab.push('');
        
    }

    else 
    {
        alert('Error');
    }


console.table(tab);



