
var allDay;
  document.addEventListener('DOMContentLoaded', function() {
    var Calendar = FullCalendar.Calendar;
    
    var Draggable = FullCalendarInteraction.Draggable

    /* --------------initialize the external events------------------
    -----------------------------------------------------------------*/

    var containerEl = document.getElementById('external-events-list');
    new Draggable(containerEl, {
      itemSelector: '.fc-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText.trim()
        }
      }
    });
    var calendarEl = document.getElementById('calendar');
    var calendar = new Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      defaultView: 'timeGridWeek',
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectMirror: true,
      //height: 'parent',
      eventClick: function(info) {
      
        info.jsEvent.preventDefault();
        x= info.event.id;
        $.ajax({
          url : 'php/getreservations.php',
          type : 'post', 
          data :{x:x},
          datatype : 'json',
          success : function(data, statut){
            info = JSON.parse(data);
            //console.log(info);
            var i;
            for (i = 0; i < info.length; i++) {
              $("#reserve").append("<tr>");
              $("#reserve").append($("<td>" + info[i].id + "</td>"));
              $("#reserve").append($("<td>" + info[i].nom + "</td>"));
              $("#reserve").append($("<td>" + info[i].email + "</td>"));
              $("#reserve").append("</tr>");
            }
            $('#info_client').modal('show');
            
          }
        });
      },
      select: function(arg) {
        //var title = prompt('Event Title:');
        $('#addmodal').modal('show');
        
        $('#start').val(moment(arg.start).format('YYYY-MM-DD HH:mm:ss'));
        $('#end').val(moment(arg.end).format('YYYY-MM-DD HH:mm:ss'));
        allDay = arg.allDay;

      },
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar
      drop: function(arg) {
        // is the "remove after drop" checkbox checked?
        if (document.getElementById('drop-remove').checked) {
          // if so, remove the element from the "Draggable Events" list
          arg.draggedEl.parentNode.removeChild(arg.draggedEl);
        }
      },
    events: 'php/getMeeting.php'
  })
    calendar.render();
  });

function close(){
  $('#addmodal').modal('hide');
  calendar.render();
}
//*********** */
if(window.XMLHttpRequest){
  var myReq = new XMLHttpRequest();
}else{
  var myReq = new ActiveXObject("Microsoft.XMLLHTTP");}

  var button = document.querySelector("#send");

function rendezvous(){
  var formData = new FormData();
  alert("rendez vous");

  document.querySelector("#send").innerHTML="En cours d'envoie ... <span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>";
  button.disabled = true;
  formData.append("medecin",document.getElementById("medecin").value);
  formData.append("prix",document.getElementById("prix").value);
  formData.append("chambre",document.getElementById("chambre").value);
  formData.append("patients",document.getElementById("patients").value);
  formData.append("couleur",document.getElementById("couleur").value);
  formData.append("end",document.getElementById("end").value);
  formData.append("allday",allDay);
  formData.append("start",document.getElementById("start").value);
      myReq.open("POST","rendezvous.php");
      myReq.send(formData);
      myReq.onreadystatechange=function(){
          if(myReq.status==200&&myReq.readyState==4){
              button.disabled = false;
              document.querySelector("#send").textContent="rendez-vous ajouter";
              $('#addmodal').modal('hide');
              //calendar.fullCalendar( 'refetchEvents' );
              document.location.href = "meeting.php";

            }
          else if(myReq.status==200&&myReq.statreadyState<4){
              button.disabled = false;
          }
          else if(myReq.status!=200&&myReq.readyState==4){
              alert("Error d'enregistrement");
          }
      }
  }


  function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year =  d.getFullYear();
        h = '' + d.getHours();
        m =  '' + d.getMinutes();
        s =  '' + d.getSeconds()

    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;
    if (h.length < 2) 
        h = '0' + h;
    if (m.length < 2) 
        m = '0' + m;
    if (s.length < 2) 
        s = '0' + s;
        
        
        var jour =[year, month, day].join('-');// z est pour UTC
        var hms = [h, m, s].join(':')+'Z';
        var res = [jour, hms].join('T');

    return res;
}
