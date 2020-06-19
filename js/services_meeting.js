var x;
var currentDate = new Date();
$(document).ready(function(){

  var hash = window.location.hash;
  if(hash.toString().localeCompare("#contact") == 0){
    $('#myTab li:last-child a').tab('show');
  }
  
  });
document.addEventListener('DOMContentLoaded', function() {
    var Calendar = FullCalendar.Calendar;
    /* --------------initialize the external events------------------
    -----------------------------------------------------------------*/
    var calendarEl = document.getElementById('calendar');
    var calendar = new Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      visibleRange: function(currentDate) {
        function formatDate(currentDate) {
    var d = new Date(),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;

    return {start : [year, month, day].join('-')};
}
        },
      defaultView: 'timeGridWeek',
      navLinks: true, // can click day/week names to navigate views
      //selectable: false,
      selectMirror: false,
      editable: false,
      droppable: false, // this allows things to be dropped onto the calendar
      
      height: 'parent',
    events: 'php/getMeeting.php',
    eventClick: function(info) {
      
      info.jsEvent.preventDefault();
      x= info.event.id;
      $.ajax({
        url : 'php/getevents.php',
        type : 'post', 
        data :{x:x},
        datatype : 'json',
        success : function(data, statut){
          info = JSON.parse(data);
          console.log(data);
          if(info.places_dispo > 0){
          $('#td_ref').html(info.id);
          $('#td_prix').html(info.prix);
          $('#td_med').html(info.medecin);
          $('#exampleModalCenter').modal('show');}
          else {
            alert("il n'y a plus de place dans cet horaire")
          }
        }      
      });
        /*
        alert('Event: ' + info.event.title);
        alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
        alert('View: ' + info.view.type);
        info.event.extendedProps.my_value;
        */
    
        // change the border color just for fun
        info.el.style.borderColor = 'black';
      }
  })
    calendar.render();
  });


  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'ARXmEa6Q1BslEuNfWBB8W0Iu_9Aer0nUQabAtDGii9h7dlQUIPd5Me2Ik4OqiGsI3JZxHlkEOsr6fp9n',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: '5',
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        $.ajax({
          url : 'php/reservation.php',
          type : 'post', 
          data :{meeting:x},
          success : function(data, statut){
            console.log(data);
          } 
        });
        // Show a confirmation message to the buyer
        window.alert('Thank you for your purchase!');
      });
    }
  }, '#paypal-button');


//https://developer.paypal.com/docs/archive/checkout/integrate/#1-get-the-code
