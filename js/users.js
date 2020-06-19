$( ".deleteUser" ).click(function() {
    var id_emp = $(this).attr("data_id"); 
    if (confirm('Vous voulez supprimer l\'utilisateur dont l\'id est '+id_emp+' ?')) {
        $.ajax({ url: 'php/delete_user.php',
            data: {id_emp},
            type: 'post',
            success: function(output) {
                document.location.href = "users.php";
                    }
            });
      }           
  });
  $( ".plusUser" ).click(function() {
    //$('.modal').modal();
var id= $(this).attr("data_id");
$.ajax({
url : 'php/getUser.php',
type : 'post', 
data :{id},
datatype : 'json',
success : function(data, statut){
  info = JSON.parse(data);
  console.log(data);
  $('#td_id').html(info.id);
  $('#td_med').html(info.nom+' '+info.prenom);
  $('#td_email').html(info.email);
  $('#td_naissance').html(info.dateNaissance);
  
  //$('#plusInfo').modal('open');
  $('#plusInfo').modal('show');
}      
});
  });