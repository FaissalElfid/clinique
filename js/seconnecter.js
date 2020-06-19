if(window.XMLHttpRequest){
    var myReq = new XMLHttpRequest();
}else{
    var myReq = new ActiveXObject("Microsoft.XMLLHTTP");}

    $("button#submit").click( function() {
 
        if( $("#username").val() == "" || $("#password").val() == "" )
          $("div#ack").html("Please enter both username and password");
        else
          $.post( $("#myForm").attr("action"),
                  $("#myForm :input").serializeArray(),
                  function(data) {
                      console.log(data);
                      info = JSON.parse(data);
                      if(info.result =="valide"){
                    //$("div#ack").html(info.session.nom);
                    document.location.href = "index.php";
                }
                 else if(info.result =="admin"){
                    document.location.href = "admin.php";
                }
                    else{
                        if(info.result =="password invalide"){
                        $("div#ack").html("Veuillez verifier votre mot de passe");
                        console.log("erreur");
                        }
                        else{
                            $("div#ack").html("Veuillez verifier votre adress mail");
                        console.log("erreur");
                        }
                    }
                  });
       
          $("#myForm").submit( function() {
             return false;	
          });
       
      });



/*
    $(document).ready(function(){
        $.ajax({ url: '/seconnecter.php',
         data: {action: 'test'},
         type: 'post',
         success: function(output) {
                      alert(output);
                  }
});
    });

    $(document).ready(function(){

        $("#signin").click(function(e){
            e.preventDefault();

     
            $.post( $("#login").attr("action"),
                    $("#login :input").serializeArray(),
                    function(data){
                        $("#resultat").html(data);
                    });
        });
        $("#login").submit(function(){
            return false;
        });
    });*/
    
/*
$("#signin").click(function(e){
            e.preventDefault();
     
            $.post(
                'seconnexion.php', // Un script PHP que l'on va créer juste après
                {
                    username : $("#email").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
                    password : $("#inputPassword").val()
                },
     
                function(data){
     
                    if(data == 'Success'){
                        $("#resultat").html("<p>Vous avez été connecté avec succès !</p>");
                         // Le membre est connecté. Ajoutons lui un message dans la page HTML.
                         console.log("compliation terminer");
                                            }
                    else{
                        $("#resultat").html("<p>fail !!!</p>");
                         // Le membre n'a pas été connecté. (data vaut ici "failed")
                         console.log("introuvable");
                    }
             
                },
                'text'
             );
        });

function test(){
    var result= "<?php test(); ?>";
    alert(result);
    return false;
}
function seconnecter(){
    var formData = new FormData();
    document.querySelector("#signin").innerHTML="Verification ... <span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>";
    button.disabled = true;
    formData.append("email",document.getElementById("email").value);
    formData.append("password",document.getElementById("inputPassword").value);
        myReq.open("POST","seconnecter.php");
        myReq.send(formData);
        myReq.onreadystatechange=function(){
            if(myReq.status==200&&myReq.readyState==4){
                var res = this.responseText;
                if(res == null){
                    console.log("le retour est null");
                }
                var data = JSON.parse(this.responseText);
                console.log(data);
                button.disabled = false;
                document.querySelector("#signin").textContent="Se connecter";
                console.log("compliation terminer");
            }
            else if(myReq.status==200&&myReq.statreadyState<4){
                button.disabled = false;
                console.log("erreur");
            }
            else if(myReq.status!=200&&myReq.readyState==4){
                alert("Error d'enregistrement");
                
            }
            
        }
    }
    */