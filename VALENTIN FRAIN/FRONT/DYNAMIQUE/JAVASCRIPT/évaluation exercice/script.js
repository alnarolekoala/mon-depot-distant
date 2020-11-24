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








/*<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< EXERCICE 1


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

EXERCICE 1 >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>*/
    

/********************************************************************************************************************************************************************************
 * ******************************************************************** Exercice 2 ************************************************************************************************* 
 * **************************************************************************************************************************************************************************** */


/*Exercice 2 : Table de multiplication
Ecrivez une fonction qui affiche une table de multiplication.

Votre fonction doit prendre un paramètre qui permet d'indiquer quelle table afficher.

Par exemple, TableMultiplication(7) doit afficher :*/



// m = prompt('choississez quelle table vous souhaitez afficher');

// function multipli(k)
// {
//     var n = k;
//     //var n = prompt('choississez quelle table vous souhaitez afficher');
//     document.write('Table de : '+ n+ '<br><br>');
//     for(var i = 1; i < 11; i++)
//     {
//         document.write(i + ' x ' + n +' = ' +(i*n));
//         document.write('<br>');
//         document.write('<br>');
//     }
// }

// multipli(m);




/********************************************************************************************************************************************************************************
 * ******************************************************************** Exercice 3 ************************************************************************************************* 
 * **************************************************************************************************************************************************************************** */

/*Un prénom est saisi au clavier. On le recherche dans le tableau tab donné ci-après.

Si le prénom est trouvé, on l'élimine du tableau en décalant les cases qui le suivent, et en mettant à blanc la dernière case. Si le prénom n'est pas trouvé un message d'erreur apparait et aucun prénom ne se supprime.

 var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];
( exemple : ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", " "]; )*/




// var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];

// console.table(tab);
// console.log(tab);

// var prenom;
// do 
// {
//     console.table(tab);
//     prenom = prompt('Saisir le prénom à effacer');
    
//     if(tab.indexOf(prenom) != -1 )
//     {
//         tab.splice(tab.indexOf(prenom),1);
//         tab.push('');
        
//     }

//     else 
//     {
//         alert('Error');
//     }
// }
// while( tab[0] != '')

// console.table(tab);




/********************************************************************************************************************************************************************************
 * ******************************************************************** Exercice 4 ************************************************************************************************* 
 * **************************************************************************************************************************************************************************** */


// Exercice 4 : total d'une commande
// A partir de la saisie du prix unitaire noté PU d'un produit et de la quantité commandée QTECOM, afficher le prix à payer PAP, en détaillant la remise REM et le port PORT, sachant que :

// TOT = ( PU * QTECOM )
// la remise est de 5% si TOT est compris entre 100 et 200 € et de 10% au-delà
// le port est gratuit si le prix des produits ( le total remisé ) est supérieur à 500 €. Dans le cas contraire, le port est de 2%
// la valeur minimale du port à payer est de 6 €
// Testez tous les cas possibles afin de vous assurez que votre script fonctionne.

// Ci-dessous, un jeu de tests :

// Saisir 600 € et quantité = 1 : remise 10% (-60 €) soit 540,00 et frais port = 0; à payer : 540 €
// Saisir 501 € et quantité = 1 : remise 10% (-50,1 €) soit 450,90 et frais port 2% (de 450,90 €) soit +9,01 € ; à payer : 450,90+9.01 = 459,91 €.
// Saisir 100 € et quantité = 2 : 200 € donc remise 5% soit 190 € et frais de port 2% soit 3,8 € mini 6 €; à payer : 190+6 = 196 €
// Saisir 3 € et quantité = 1 : remise 0, frais de port 2% soit 0.06 € donc le minimum de 6 € s'applique; à payer : 3+6 = 9 €

var PU = parseInt(prompt('prix du produit?'));
var QTECOM = parseInt(prompt('Combien?'));


while(QTECOM <= 0 || isNaN(QTECOM)){
    QTECOM = parseInt(prompt('Combien?'));
}


function calcul(a, b)
{
    var rem = 0;
    TOT = a * b 
    if(TOT <= 200 && TOT > 100)
    {
   
    rem = (TOT * 5 / 100);
    }

    if(TOT > 200)
    {
        
        rem = (TOT * 10/100);
    }
    return TOT, rem;
}

var PAP = PU * QTECOM;
var rem = calcul(PU, QTECOM);
// console.log(PAP);
// console.log(rem);
PAP = PAP - rem;

if (PAP < 500)
{
    var PAP2 = (PAP * 2 / 100);
  
}

if(PAP2 < 6)
{
    var PAP2 = 6
}
if(PAP > 500)
{
   var PAP2 = 0;
}


var PAP3 = PAP + PAP2


PAP3 = (Math.trunc(PAP3 * 100))/100
PAP2 = (Math.trunc(PAP2 * 100))/100
rem = (Math.trunc(rem * 100))/100
document.write('Le prix à payer est de : <strong>' +PAP3+ '€</strong><br> dont une remise de : <strong>'+rem+ '€</strong><br> Et <strong>'+PAP2+ '€</strong> de frais de port.'  )


