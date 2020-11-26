/********************************************************************************************************************************************************************************
 * ******************************************************************** Exercice 1 ************************************************************************************************* 
 * **************************************************************************************************************************************************************************** */



 /* Exercice 1 - Calcul du nombre de jeunes, de moyens et de vieux
Il s'agit de dénombrer les personnes d'âge strictement inférieur à 20 ans, les personnes d'âge strictement supérieur à 40 ans et celles dont l'âge est compris entre 20 ans et 40 ans (20 ans et 40 ans y compris).

Le programme doit demander les âges successifs.

Le comptage est arrêté dès la saisie d'un centenaire. Le centenaire est compté.

Donnez le programme Javascript correspondant qui affiche les résultats.*/


/*faire écrire a l utilisateur des ages a l aide d une boucle  
rentrer les données dans 3 tableau avec une boucle qui s arrete quand l utilisateur rentre un chiffre > 99 
ressortir des tableau et afficher le nombre d age  de      20> N                   20< N < 40                        40< N*/











//-----------------------------------------------création du tableau------------------------------------------

var tableau = []

// ----------------------------------------------Remplir le tableau------------------------------
function SaisieTab(c) // 3
{
    
    var tab  = c;

    alert('Saisir les âges :');

var tab = [];
var i = 0;

var a = new Array();
    do {
    tab[0+i] = [GetInteger()];
   // console.log(tab[0+i]);
    a[0+i] = tab[0+i];
    var b = tab[0+i];
    console.log(a);

    i++;
    }
    while(b < 100)
    return a;
}
// ----------------------------------------------Remplir le tableau------------------------------


// ---------------------------------------------fonction uniquement des chiffres rentré------------------------------------------------------
function GetInteger(a) // 1
{
do 
{
do {   
            var entier = parseInt(prompt('veuillez entrer un nombre'));
        }
        while(isNaN(entier))
        
    }
        while(entier < 0)
        return entier;
}

// ---------------------------------------------fonction uniquement des chiffres rentré------------------------------------------------------



var montab = SaisieTab(tableau);





var m20 = new Array();
var mp20 = new Array();
var p40 = new Array();

for(var i = 0; i < montab.length; i++)
{
    if (montab[i] < 20)
    {
        parseInt(m20.push(montab[i]))
    }
    if(montab[i] > 20 && montab[i] < 40)
    {
        parseInt(mp20.push(montab[i]))
    }
    if(montab[i] > 40 && montab[i] < 100)
    {
        parseInt(p40.push(montab[i]))
    }
    if(montab[i] > 100)
    {
        parseInt(p40.push(montab[i]))
        break;
    }
}


document.write('Les ages inférieurs à<strong> 20ans</strong> sont : ');
for(var i = 0; i < m20.length; i++)
{
    document.write(m20[i]);
    document.write(' ans ')
}
document.write('<br>');
document.write('Les âges compris entre <strong>20 et 40ans</strong> ans sont : ');

for(var i = 0; i < mp20.length; i++)
{
    document.write(mp20[i]);
    document.write(' ans ')
}
document.write('<br>');
document.write('Les âges supérieurs à <strong>40ans</strong> sont : ');
for(var i = 0; i < p40.length; i++)
{
    document.write(p40[i]);
    document.write(' ans ')
}

    

