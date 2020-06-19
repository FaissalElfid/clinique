
function _(id){return document.getElementById(id);}
if(window.XMLHttpRequest){
    var myReq = new XMLHttpRequest();
}else{
    var myReq = new ActiveXObject("Microsoft.XMLLHTTP");
}
var button = document.querySelector("#submitMessage");
var res = document.getElementById('resultat_contact');
function mail(){
    const element = document.querySelector("#inputEmail");
if (!element.value.match(/[a-z0-9_\-\.]+@[a-z0-9_\-\.]+\.[a-z]+/i)){document.querySelector("#mailverif").textContent="adress mail invalid";}
else{
    if (document.getElementById("messageEmail").value===""){document.querySelector("#messagevrif").textContent="veuillez saisir un mot de passe";}
    else{

    var formData = new FormData();
    document.querySelector("#submitMessage").innerHTML="En cours d'envoie ... <span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>";
    button.disabled = true;
    formData.append("email",document.getElementById("inputEmail").value);
    formData.append("nom",document.getElementById("nomContact").value);
    formData.append("message",document.getElementById("messageEmail").value);
    formData.append("sujet",document.getElementById("sujetContact").value);
        myReq.open("POST","sendMail.php");
        myReq.send(formData);
        myReq.onreadystatechange=function(){
            if(myReq.status==200&&myReq.readyState==4){
                button.disabled = false;
                document.querySelector("#submitMessage").textContent="Envoyer Message";
                console.log("hooray, it worked");
                document.querySelector("#res").textContent="Merci pour votre message!!";
                {document.querySelector("#mailverif").textContent="";}
            }
            else if(myReq.status==200&&myReq.statreadyState<4){
                console.log("attendre");
                button.disabled = false;
            }
            else if(myReq.status!=200&&myReq.readyState==4){
                alert("Error d'envoie de l'email");
                
            }
            
        }
    }}
}



 /* 
 function mail(){
 <span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>
    console.log("test de la console");
    if(window.XMLHttpRequest){
        var myReq = new XMLHttpRequest();
    }else{
        var myReq = new ActiveXObject("Microsoft.XMLLHTTP");
    }
    function mail(){
        var email = document.getElementById("inputEmail").value;
        var nom = document.getElementById("nomContact").value;
        var message = document.getElementById("messageEmail").value;
        var sujet = document.getElementById("sujetContact").value;
        var res = document.getElementById('resultat_contact');
        myReq.open("POST","sendMail.php",true);
        myReq.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        myReq.send("nom="+nom+"&email="+email+"&message="+message+"&sujet="+sujet);
        myReq.onreadystatechange=function(){
            if(myReq.status==200&&myReq.readyState==4){
                console.log("hooray, it worked");
            }
            else if(myReq.status==200&&myReq.readyState<4){
                console.log("attendre");
            }
            else{
                alert("error");
            }
        }
    }
}
*****************
 Get from elements values 
 function mail(){
 var values = $(this).serialize();

 $.ajax({
        url: "sendMail.php",
        type: "post",
        
        success: function (response) {
            alert(response);
           // You will get response from your PHP page (what you echo or print)
        },

        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
}*/
/*
    $("#submit").click(function(){
        
    $.ajax({url: "sendMail.php", success: function(result){
        if(result === 'sent') {  
			alert("the email was sent");
        }

    }})
    function showCustomer(str) {
        var xhttp;
        if (str == "") {
          document.getElementById("txtHint").innerHTML = "";
          return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "getcustomer.php?q="+str, true);
        xhttp.send();
      }
});*/