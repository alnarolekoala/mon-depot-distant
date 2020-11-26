document.forms[form];

var nom = document.getElementById("nom");
var prenom = document.getElementById("prenom");
var postal = document.getElementById("postal");
var question = document.getElementById("question");
var mail = document.getElementById("mail");
var submit = document.getElementById("submit")
var date = document.getElementById("date");



 
function checkForm(b) {
   console.log(postal.value);
   
   if(nom.value.length < 1)
    {
        
        return false;
    }
    
    
    if(prenom.value.length < 1)
    {
        
        return false;
    }


    if((isNaN(postal.value)) || postal.value.length != 5 ){

      
        return false;
    }


    if(question.value.length < 1)
    {
        
        return false;
    }

    var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
    
    if(reg.test(mail.value))
    {
        return(true);
    }
    else
    {
        
        return(false);
    }
}