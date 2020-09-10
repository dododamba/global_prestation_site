
function prettyTime(time) {
    var times = time.split(':', 3);
    return times[0] + ':' + times[1];
}


function clearForm() {
    $(".visitor-firstname").val("");
    $(".visitor-lastname").val("");
    $(".visitor-document-number").val("");
    $(".visitor-phone-number").val("");
    $(".visitor-email").val("");
    $(".visitor-company-name").val("");

}

function clearVisitInfo() {
    $('#numbvisi').replaceWith('<h4 id="numbvis" class="text-danger">  Visitors - <span id="datevisilog"></span></h4>')
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
                     end_hour = value.end_date_time;
                 }else{
                     end_hour = '--:--';
                 }
  
                   if (visitor_status == 4) {
                     button_action = '<div class="btn-group mr-1 mt-2"><button type="button" class="btn btn-info btn-info-disable">ON-SITE</button><button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-chevron-down"></i></button><div class="dropdown-menu" style=""><a class="dropdown-item" href="#" onclick="sigoutVisitor('+value.id+')">SIGN OUT</a></div></div>';
                 }else if(visitor_status == 2){
                    button_action = '<div class="btn-group mr-1 mt-2"><button type="button" class="btn btn btn-secon-disable">CHECKED-OUT</button><button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" disabled data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-chevron-down"></i></button></div>';
  
                 }else if(visitor_status == 3){
                  button_action = '<div class="btn-group mr-1 mt-2"><button type="button" class="btn btn-primary btn-prim-disable">EXPECTED</button><button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-chevron-down"></i></button><div class="dropdown-menu" style=""><a class="dropdown-item" href="#" onclick="signiVisitor('+value.id+')">SIGN IN</a></div></div>';
  
               }
  
                visitHTML += ' <tr><td>'+button_action+'</td>' +
                                                  '<td><div class="media"><div class="avatar-xs mr-3"><span class="avatar-title rounded-circle">'+value.visitor.firstname.charAt(0)+''+value.visitor.lastname.charAt(0)+' </span></div><div class="media-body"><a href=""><h5 class="font-size-14">'+value.visitor.firstname+' '+value.visitor.lastname+'</h5></a><p class="text-muted">'+value.visitor.organisation_name+'</p></div></div></td>' +
                                                  '<td><h5 class="font-size-14">'+value.host.firstname+' '+value.host.lastname+'</h5><p class="text-muted">'+value.host.department+'</p></td>' +
                                                  '<td><div><p class="badge badge-soft-primary font-size-14 m-1">'+value.start_date_time+'</p></div></td>' +
                                                  '<td><div> <p class="badge badge-soft-danger font-size-14 m-1">'+end_hour+'</p></div></td>' +
                                                  '<td><p>'+value.reason.label+'</p></td>' +
                                              '</tr>';
               });

               $('tbody').replaceWith('<tbody></tbody>');

               $('tbody').append(visitHTML);

               if (response.data.reasons) {
                   purposes = response.data.reasons;

                   purposes.forEach(function(value){
                    purposeHTML += '<option value="'+value.id+'">'+value.label+'</option>';
                   });

                   $('.purpose').append(purposeHTML);
               }


               if (response.data.hosts) {
                   hosts = response.data.hosts;

                   hosts.forEach(function(value){
                    hostHTML += '<option value="'+value.id+'">'+value.firstname+' '+value.lastname+'</option>';
                   });

                   $('.host').append(hostHTML);
               }

           }
        }
    );
}



function initTable(){
  $('tbody').empty();
  visitsOfTheDay();
}

function visitsPerDay(date){
       
    
    var URI = '/web-api-visit/'+date;
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
            infoHTML += '<h4 id="numbvisi" class="text-danger"> '+visits.length+'  Visitors - <span id="datevisilog">'+date+'</span></h4>';
            $('#numbvisi').replaceWith(infoHTML);

          
              visits.forEach(function(value){
                var end_hour = '';
                var button_action = '';
                var visitor_status = value.visit_status;
  
                console.log(visitor_status)
  
                 if (value.end_date_time) {
                     end_hour = prettyTime(value.end_date_time);
                 }else{
                     end_hour = '--:--';
                 }
  
                   if (visitor_status == 4) {
                     button_action = '<div class="btn-group mr-1 mt-2"><button type="button" class="btn btn-info btn-info-disable">ON-SITE</button><button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-chevron-down"></i></button><div class="dropdown-menu" style=""><a class="dropdown-item" href="#" onclick="sigoutVisitor('+value.id+')">SIGN OUT</a></div></div>';
                 }else if(visitor_status == 2){
                    button_action = '<div class="btn-group mr-1 mt-2"><button type="button" class="btn btn btn-secon-disable">CHECKED-OUT</button><button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" disabled data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-chevron-down"></i></button></div>';
  
                 }else if(visitor_status == 3){
                  button_action = '<div class="btn-group mr-1 mt-2"><button type="button" class="btn btn-primary btn-prim-disable">EXPECTED</button><button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-chevron-down"></i></button><div class="dropdown-menu" style=""><a class="dropdown-item" href="#" onclick="signiVisitor('+value.id+')">SIGN IN</a></div></div>';
  
               }
  
          visitHTML += ' <tr><td>'+button_action+'</td>' +
          '<td><div class="media"><div class="avatar-xs mr-3"><span class="avatar-title rounded-circle">'+value.visitor.firstname.charAt(0)+''+value.visitor.lastname.charAt(0)+' </span></div><div class="media-body"><a href=""><h5 class="font-size-14">'+value.visitor.firstname+' '+value.visitor.lastname+'</h5></a><p class="text-muted">'+value.visitor.organisation_name+'</p></div></div></td>' +
          '<td><h5 class="font-size-14">'+value.host.firstname+' '+value.host.lastname+'</h5><p class="text-muted">'+value.host.department+'</p></td>' +
          '<td><div><p class="badge badge-soft-primary font-size-14 m-1">'+prettyTime(value.start_date_time)+'</p></div></td>' +
          '<td><div> <p class="badge badge-soft-danger font-size-14 m-1">'+end_hour+'</p></div></td>' +
          '<td><p>'+value.reason.label+'</p></td>' +
      '</tr>';
               });

               $('tbody').replaceWith('<tbody></tbody>');

               $('tbody').append(visitHTML);

               if (response.data.reasons) {
                   purposes = response.data.reasons;

                   purposes.forEach(function(value){
                    purposeHTML += '<option value="'+value.id+'">'+value.label+'</option>';
                   });

                   $('.purpose').append(purposeHTML);
               }


               if (response.data.hosts) {
                   hosts = response.data.hosts;

                   hosts.forEach(function(value){
                    hostHTML += '<option value="'+value.id+'">'+value.firstname+' '+value.lastname+'</option>';
                   });

                   $('.host').append(hostHTML);
               }

           }
        }
    );
}


function sigoutVisitor(visitID){
  var URI = '/web-api-visit/sign-out-visitor/' + visitID;
  axios.get(URI).then(
      (response) => {
          if(response.data.status){
              toastr.success(response.data.message);
              initTable();

          }


      }
  )
}



function signiVisitor(visitID){
    var URI = '/web-api-visit/sign-in-visitor/' + visitID;
    axios.get(URI).then(
        (response) => {
            if(response.data.status){
                toastr.success(response.data.message);
                initTable();
  
            }
  
  
        }
    )
  }


$(".get-selected-date").on("click", function() {
    var current_date = $('.get-date').val();
     visitsPerDay(current_date);
 });

$('.save-visit').on("click", function(){
    var firstname = $('.visitor-firstname').val();
    var  lastname= $('.visitor-lastname').val();
    var  phone_number = $('.visitor-phone-number').val();
    var email = $('.visitor-email').val();
    var  time = $('.visit-time').val();
    var  date = $('.visit-date').val();
    var purpose = $('.purpose').val();
    var  host = $('.host').val();
    var  company_name = $('.visitor-company-name').val();
    var  document_label = $('.visitor-document-label').val();
    var  document_number = $('.visitor-document-number').val();

    var _data = {
        firstname : firstname,
        lastname: lastname,
        phone_number: phone_number,
        email: email,
        time: time,
        date: date,
        purpose: Number(purpose),
        host: Number(host),
        document_label: document_label,
        document_number: document_number,
        company_name: company_name
    }

    axios.post('/web-api-visit',_data).then(
        (response)  => {
            if (response.data.status) {
                $('.bs-example-modal-lg').modal('toggle');
                $('.bs-example-modal-lg').removeData('modal');
                $('.bs-example-modal-lg').trigger("reset");
                toastr.success(response.data.message);
                clearForm();
                initTable();
            }else{
                toastr.error(response.data.message)
            }
        }
    );

    

});




$(document).ready(function () {
         // displayAdmin();
        var now = new Date();
        var day = ("0" + now.getDate()).slice(-2);
        var month = ("0" + (now.getMonth() + 1)).slice(-2);
        var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

         $('.visit-date').val(today);

            h = now.getHours(),
            m = now.getMinutes();
            if(h < 10) h = '0' + h; 
            if(m < 10) m = '0' + m; 
            $('.visit-time').each(function(){ 
                $(this).attr({'value': h + ':' + m});
            });



         visitsOfTheDay(); 
         
         
         });