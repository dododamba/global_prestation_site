function prettyTime(time) {
    var times = time.split(':', 3);
    return times[0] + ':' + times[1];
}


function todayPresence() {
    axios.get('/get-today-presence-rate').then(
        (response) => {
           console.log(response)
        }
    )
}


function getAnalytic() {
    axios.get('/web-api-visit-analytic').then(
        (response) => {
           console.log(response)
        }
    )
}

function visitsOfTheDay(){
       
    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

    var URI = '/web-api-visit/'+today;
    visitHTML = '';
    purposeHTML= '';
    hostHTML= '';
    infoHTML= '';

    visits = [];
    purposes = [];
    hosts = [];

    axios.get(URI).then(
        (response) => {
           if (response.data.content) {

            visits = response.data.content;
          //  clearVisitInfo();
            infoHTML += '<h4 id="numbvisi" class="text-danger"> '+visits.length+'  Visitors - <span id="datevisilog">'+today+'</span></h4>';
            $('#numbvisi').replaceWith(infoHTML);

            
              visits.forEach(function(value){
                var end_hour = '';
                var button_action = '';
                var visitor_status = value.visit_status;
  
  
                 if (value.end_date_time) {
                     end_hour = prettyTime(value.end_date_time);
                 }else{
                     end_hour = '--:--';
                 }
  
               
                 
  
                visitHTML +=   '<tr>'+
                '<td>'+
                    '<div class="avatar-xs">'+
                        '<span class="avatar-title rounded-circle">'+
                            ''+value.visitor.firstname.charAt(0)+''+value.visitor.lastname.charAt(0)+''+
                        '</span>'+
                    '</div>'+
                '</td>'+
                '<td>'+
                    '<h5 class="font-size-14 mb-1"><a href="#" class="text-dark">'+value.visitor.firstname+' '+value.visitor.lastname+'</a></h5>'+
                    '<p class="text-muted mb-0">'+value.visitor.organisation_name+'</p>'+
                '</td>'+
                '<td>'+value.host.firstname+' '+value.host.lastname+'</td>'+
                '<td>'+
                    '<div>'+
                        '<p class="badge badge-soft-primary font-size-13 m-1">'+prettyTime(value.start_date_time)+'</p>'+
                    '</div>'+
                '</td>'+
                '<td>'+
                    '<div>'+
                        '<p class="badge badge-soft-danger font-size-13 m-1">'+end_hour+'</p>'+
                    '</div>'+
                '</td>'+
                '<td>'+
                    '<ul class="list-inline font-size-20 contact-links mb-0">'+
                        '<li class="list-inline-item px-2">'+
                            '<a href="" data-toggle="tooltip" data-placement="top" title="Message"><i class="bx bx-message-square-dots"></i></a>'+
                        '</li>'+
                        '<li class="list-inline-item px-2">'+
                            '<a href="" data-toggle="tooltip" data-placement="top" title="Profile"><i class="bx bx-user-circle"></i></a>'+
                        '</li>'+
                    '</ul>'+
                '</td>'+
            '</tr>';
                
                
               });

               $('tbody').replaceWith('<tbody></tbody>');

               $('tbody').append(visitHTML);
            

               $('.today-visitor').replaceWith('<h4 class="mb-0 today-visitor">'+visits.length+'</h4>');


           }
        }
    );
}


function appointmentOfTheDay(){
       
    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

    var URI = '/web-api-visit/invite/'+today;
    var visitHTML = '';
    var host = '';
    

    visits = [];
    
    axios.get(URI).then(
        (response) => {
         
         
            if (response.data.content) {

            visits = response.data.content;
          //  clearVisitInfo();
          

           
              visits.forEach(function(value){
             
           

                    visitHTML +='<li class="event-list">'+
                                '<div class="event-timeline-dot">'+
                                    '<i class="bx bx-right-arrow-circle font-size-18"></i>'+
                                '</div>'+
                                '<div class="media">'+
                                    '<div class="media-body">'+
                                        '<div>'+
                                            '<p><span class="font-weight-medium ml-2">'+value.visitor.firstname+' '+value.visitor.lastname+'</span> to meet <span class="font-weight-medium" >'+value.host.firstname+' '+value.host.lastname+'</span> <br> Today at '+prettyTime(value.start_date_time)+'</p>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</li>';


               });

               // host ='<ul class="verti-timeline list-unstyled" id="dashboard-media">'+visitHTML+'</ul>';
               // console.log(visitHTML);
             //  $('#dashboard-media').replaceWith('<ul class="verti-timeline list-unstyled" id="dashboard-media"></ul>');
               $('#dashboard-media').replaceWith(visitHTML);

               $('.today-appointement').replaceWith('<h4 class="mb-0 today-appointement">'+visits.length+'</h4>');

        

           }

            
        });

 }


 $(document).ready(function () {
    // displayAdmin();

    visitsOfTheDay(); 
    appointmentOfTheDay();
    todayPresence();

    
    });