
    

/********************************************************************************************************************************************************************************
 * ******************************************************************** Exercice 2 ************************************************************************************************* 
 * **************************************************************************************************************************************************************************** */


/*Exercice 2 : Table de multiplication
Ecrivez une fonction qui affiche une table de multiplication.

Votre fonction doit prendre un paramètre qui permet d'indiquer quelle table afficher.

Par exemple, TableMultiplication(7) doit afficher :*/



m = prompt('choississez quelle table vous souhaitez afficher');

function multipli(k)
{
    var n = k;
    
    document.write('Table de : '+ n+ '<br><br>');
    for(var i = 1; i < 11; i++)
    {
        document.write(i + ' x ' + n +' = ' +(i*n));
        document.write('<br>');
        document.write('<br>');
    }
}

multipli(m);




