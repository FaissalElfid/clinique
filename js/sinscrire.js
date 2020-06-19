const calendar = document.querySelector('.datepicker');
var date = new Date();
var pswdvalid = false;
        M.Datepicker.init(calendar,{
            format: 'dd-mm-yyyy',
            showClearBtn: true,
        });
        $(document).ready(function(){
            var day = new Date().getDate();
            var mm = new Date().getMonth()+1;
            var yy = new Date().getFullYear()-18;
            var mindate = new Date(yy,mm,day);
            $('#date_naissance').datepicker({
                format: 'yyyy-mm-dd',
                showClearBtn: true,
                maxDate: mindate,
                defaultDate: mindate,
               });
            $("#inputPasswordConf").blur(function(){
            if($("#inputPassword").val()==$("#inputPasswordConf").val()){
                $("#inputPasswordConf").removeClass("invalid");
                $("#inputPasswordConf").addClass("valid");
                pswdvalid=true;
            }
            else{
                pswdvalid = false;
                $("#inputPasswordConf").addClass("invalid");
                $("#inputPasswordConf").removeClass("valid");
            }
        });
        console.log("le programme entre dans la fonction ready");
        });
        if(window.XMLHttpRequest){
            var myReq = new XMLHttpRequest();
        }else{
            var myReq = new ActiveXObject("Microsoft.XMLLHTTP");}
        
            var button = document.querySelector("#signin");

        function sinscrire(){
            if(document.getElementById("prenom").classList.contains('valid')===false){
                alert("confirmer le mot de passe");
            }
            else{
            var formData = new FormData();
            console.log("le programme entre dans la fonction s'inscrire ");

            document.querySelector("#signin").innerHTML="En cours d'envoie ... <span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>";
            button.disabled = true;
            formData.append("prenom",document.getElementById("prenom").value);
            formData.append("nom",document.getElementById("nom").value);
            formData.append("email",document.getElementById("email").value);
            formData.append("password",document.getElementById("inputPassword").value);
            formData.append("date_naissance",document.getElementById("date_naissance").value);
                myReq.open("POST","sinscrire.php");
                myReq.send(formData);
                myReq.onreadystatechange=function(){
                    if(myReq.status==200&&myReq.readyState==4){
                        button.disabled = false;
                        document.querySelector("#signin").textContent="Personne ajouter";
                        document.location.href = "seconnecter.php";
                    }
                    else if(myReq.status==200&&myReq.statreadyState<4){
                        button.disabled = false;
                    }
                    else if(myReq.status!=200&&myReq.readyState==4){
                        alert("Error d'enregistrement");
                        
                    }
                    
                }
            }
            }
        













        /*
        !("#inputPasswordConf").hasClass('valid')
        $('#date_naissance').datepicker({
            maxDate: 2
            disableWeekends: true,
           });
        /*
        $('.datepicker').pickadate({
            min: new Date(2020,5,10),
            max: '+0'
          });
          $(function(){
            $('.datepicker').pickadate({
              min: new Date(2016, 5, 20),
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
          });
        });
*/
        /*
function  verifiepswd(){
    if(pswd != pswdVerif){
        document.querySelector("#confirmationPsswd").textContent="Les mots de passes ne sont pas les même";
    }
    else{
        document.querySelector("#confirmationPsswd").style.display="none";
    }
    }*/

/*
    $(document).ready(function(){
        $("#inputPasswordConf").keyup(function(){
        if($("#inputPassword").val()!=$("#inputPasswordConf").val()){
            $("#inputPassword").validate() = false;
        }
        else{
            $("#confirmationPsswd").hide(600);
        }
    });
});
$(document).ready(function(){
    $("form").validate({
        rules: {
            inputPasswordConf: {
                equalTo: "#inputPassword"
            }
        },
        messages: {
            inputPasswordConf: {
            equalTo: "entrer le meme passwd"
        }
    }
    
});});



var pswdVerif = document.querySelector('#inputPasswordConf').val();
var pswd = document.querySelector('#inputPassword').val();

function  verifiepswd(){
    var EverythingChecksOut = false;
    if(pswd == pswdVerif){
        EverythingChecksOut = true;
    }
    if (pswd == pswdVerif) {
        console.log("valid");
        //document.querySelector("#confirmationPsswd").removeClass("valid");
    } else {
        console.log("invalid");
        //document.querySelector("#confirmationPsswd").addClass("valid");
    }
}*/
