


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


// déclaration des tableaux


var m20 = new Array();
var mp20 = new Array();
var p40 = new Array();


// parcourir le tableau puis rentrer dans chaque tableau les nombres correspondant
for(var i = 0; i < montab.length; i++)
{
    if (montab[i] < 20)
    {
        parseInt(m20.push(montab[i]))
    }


    if(montab[i] >= 20 && montab[i] <= 40)
    {
        parseInt(mp20.push(montab[i]))
    }


    if(montab[i] > 40 && montab[i] < 100)
    {
        parseInt(p40.push(montab[i]))
    }


    if(montab[i] >= 100)
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

    
