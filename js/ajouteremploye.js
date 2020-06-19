const calendar = document.querySelector('.datepicker');
var date = new Date();
var pswdvalid = false;
if(window.XMLHttpRequest){
    var myReq = new XMLHttpRequest();
}else{
    var myReq = new ActiveXObject("Microsoft.XMLLHTTP");}
        M.Datepicker.init(calendar,{
            format: 'dd-mm-yyyy',
            showClearBtn: true,
        });
        $( ".delete" ).click(function() {
            var id_emp = $(this).attr("data_id"); 
            if (confirm('Vous voulez supprimer l\'employe dont l\'id est '+id_emp+' ?')) {
                $.ajax({ url: 'php/delete_employe.php',
                    data: {id_emp},
                    type: 'post',
                    success: function(output) {
                        document.location.href = "employe.php";
                            }
                    });
              }           
          });
        $( ".edit" ).click(function() {
            $('#editModal').modal('show');
          });
        $( ".plus" ).click(function() {
            //$('.modal').modal();
      var id= $(this).attr("data_id");
      $.ajax({
        url : 'php/getEmploye.php',
        type : 'post', 
        data :{id},
        datatype : 'json',
        success : function(data, statut){
          info = JSON.parse(data);
          console.log(data);
          $('#td_id').html(info.id);
          $('#td_med').html(info.nom+' '+info.prenom);
          $('#td_telephone').html(info.telephone);
          $('#td_prix').html(info.prix);
          $('#td_email').html(info.email);
          $('#td_naissance').html(info.dateNaissance);
          $('#td_specialite').html(info.spec);
          
          //$('#plusInfo').modal('open');
          $('#plusInfo').modal('show');
        }      
      });
          });
        $(document).ready(function(){
            $('input.autocomplete').autocomplete({
                data: 'php/getSpec.php',
              });
            $('select').formSelect();
            var day = new Date().getDate();
            var mm = new Date().getMonth()+1;
            var yy = new Date().getFullYear()-18;
            var mindate = new Date(yy,mm,day);
            var res;
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
        var button = document.querySelector("#ajouter");
        function add(){
            var formData = new FormData();
            if (document.getElementById('r1').checked) {
                var sexe = document.getElementById('r1').value;
              }
              if (document.getElementById('r2').checked) {
                var sexe = document.getElementById('r2').value;
              }

            console.log("le programme entre dans la fonction ajouter ");
            document.querySelector("#ajouter").innerHTML="En cours d'envoie ... <span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>";
            button.disabled = true;
            formData.append("prenom",document.getElementById("prenom").value);
            formData.append("nom",document.getElementById("nom").value);
            formData.append("email",document.getElementById("email").value);
            formData.append("tel",document.getElementById("tel").value);
            formData.append("sexe",sexe);  
            formData.append("spec",document.getElementById("spec").value);
            formData.append("date_naissance",document.getElementById("date_naissance").value);
            formData.append("autre",document.getElementById("autre").value);
            formData.append("prix",document.getElementById("prix").value);  
            
                myReq.open("POST","ajouter_employe.php");
                myReq.send(formData);
                myReq.onreadystatechange=function(){
                    if(myReq.status==200&&myReq.readyState==4){
                        button.disabled = false;
                        document.querySelector("#ajouter").textContent="Employe ajouter";
                        //document.location.href = "seconnecter.php";
                        alert("succees d'ajouter");
                    }
                    else if(myReq.status==200&&myReq.statreadyState<4){
                        button.disabled = false;
                        alert("attente");
                    }
                    else if(myReq.status!=200&&myReq.readyState==4){
                        alert("Error d'enregistrement");
                        
                    }
                
                }
            }
            