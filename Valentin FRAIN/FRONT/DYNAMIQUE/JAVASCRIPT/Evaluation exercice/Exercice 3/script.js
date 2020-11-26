
/********************************************************************************************************************************************************************************
 * ******************************************************************** Exercice 3 ************************************************************************************************* 
 * **************************************************************************************************************************************************************************** */

/*Un prénom est saisi au clavier. On le recherche dans le tableau tab donné ci-après.

Si le prénom est trouvé, on l'élimine du tableau en décalant les cases qui le suivent, et en mettant à blanc la dernière case. Si le prénom n'est pas trouvé un message d'erreur apparait et aucun prénom ne se supprime.

 var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];
( exemple : ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", " "]; )*/




var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];

console.table(tab);
console.log(tab);

var prenom;
do 
{
    console.table(tab);
    prenom = prompt('Saisir le prénom à effacer');
    
    if(tab.indexOf(prenom) != -1 )
    {
        tab.splice(tab.indexOf(prenom),1);
        tab.push('');
        
    }

    else 
    {
        alert('Error');
    }
}
while( tab[0] != '')

console.table(tab);




