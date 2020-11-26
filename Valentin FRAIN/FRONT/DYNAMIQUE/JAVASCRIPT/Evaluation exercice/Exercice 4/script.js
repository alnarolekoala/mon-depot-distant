
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


