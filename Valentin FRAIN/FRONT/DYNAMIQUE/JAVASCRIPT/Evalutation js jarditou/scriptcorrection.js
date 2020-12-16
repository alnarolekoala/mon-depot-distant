

var nom = document.getElementById("nom");
var prenom = document.getElementById("prenom");
var postal = document.getElementById("postal");
var question = document.getElementById("question");
var mail = document.getElementById("mail");
var submit = document.getElementById("submit")
var date = document.getElementById("date");

var sub = document.getElementById("form");
var errnom = document.getElementById("errnom");
var errquestion = document.getElementById("errquestion");
var errprenom = document.getElementById("errprenom");

submit.addEventListener('click', function(event) {
    var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
   var reg1 = new RegExp(/^[a-zéèêàçîï]+$/ig);
  var reg2 = new RegExp(/^[a-zéèêàçîï \?]+$/ig);
   errnom.textContent ="";
   errquestion.textContent="";
   errprenom.textContent="";
   
   if(nom.validity.valueMissing)
{
    event.preventDefault();
    errnom.textContent = "nom manquant";
}
   else if(!(nom.value.match(reg1)))  
    {

        event.preventDefault();
        errnom.textContent = "format incorrect";
       
        
    }
    
    
    if(prenom.validity.valueMissing)
    {
        event.preventDefault();
        errprenom.textContent = "prenom manquant";
    }
    else if(!(prenom.value.match(reg1)))  
    {

        event.preventDefault();
        errprenom.textContent = "format incorrect";
       
        
    }


    if((isNaN(postal.value)) || postal.value.length != 5 ){

      
        event.preventDefault();
    }
    
    
    if(question.validity.valueMissing)
    {
        event.preventDefault();
        errquestion.textContent = "question manquante";
    }
       else if(!(question.value.match(reg2)))  
        {
    
            event.preventDefault();
            errquestion.textContent = "format incorrect";
           
            
        }

  

  
    
    if(!(reg.test(mail.value)))
    {
        event.preventDefault();
    }
  

});

