
var current_page;
var next_page;
var preview_page;



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

function blacklisted(page){
       
   
    var URI = '/web-api-visitor-blacklist/'+page;
    visitorHTML = '';
   

    visitors = [];
    //var current_page = current_page;

    axios.get(URI).then(
        (response) => {
         
            if (response.data.data) {

            visitors = response.data.data;
          
            visitors.forEach(function(value){
             
              visitorHTML += '<tr>'+
              '<td>'+
                  '<div class="avatar-xs">'+
                      '<span class="avatar-title rounded-circle">'+
                      ''+value.firstname.charAt(0)+''+value.lastname.charAt(0)+'' +
                      '</span>'+
                  '</div>'+
              '</td>'+
              '<td>'+
                  '<h5 class="font-size-14 mb-1"><a href="#" class="text-dark">'+value.firstname+' '+value.lastname+'</a></h5>'+
                  '<p class="text-muted mb-0">'+value.job_title+'</p>'+
              '</td>'+
              '<td>'+value.email+'</td>'+
              '<td>'+
                 ''+value.organisation_name+''+
              '</td>'+
              '<td>'+
              ''+value.purpose_blacklist+''+
              '</td>'+
              '<td>'+
                  '<div class="dropdown">'+
                     '<a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">'+
                          '<i class="mdi mdi-dots-horizontal font-size-18"></i>'+
                      '</a>'+
                      '<ul class="dropdown-menu dropdown-menu-right" style="">'+
                          '<li><a href="javascript: void(0);" class="dropdown-item" onclick="editBlacklisted('+value.id+')"><i class="mdi mdi-pencil font-size-16 text-success mr-1"></i> Edit</a></li>'+
                          '<li><a href="javascript: void(0);" class="dropdown-item" id="sa-params" onclick="deleteVisitor('+value.id+')"><i class="mdi mdi-trash-can font-size-16 text-danger mr-1"></i> Delete</a></li>'+
                      '</ul>'+
                  '</div>'+
              '</td>'+
          '</tr>';

            
            });
            
              current_page = response.data.meta.current_page;
               $('tbody').replaceWith('<tbody></tbody>');

               $('tbody').append(visitorHTML);

               $('.current_page').replaceWith('<li class="page-item curent-page"><a href="#" class="page-link">'+current_page+'</a></li>');
               if(response.data.links.next){
                $('.next-to-current').replaceWith('<li class="page-item next-to-current"><a href="#" class="page-link" onclick="blacklisted('+(current_page + 1)+')">'+(current_page + 1)+'</a></li>')
                 $('.right').replaceWith('<li class="page-item"><a href="#" class="page-link" onclick="blacklisted('+(current_page + 1)+')"><i class="mdi mdi-chevron-right"></i></a></li>');
               }

               if(response.data.links.prev){
                $('.preview-to-current').replaceWith('<li class="page-item preview-to-current"><a href="#" class="page-link" onclick="blacklisted('+(current_page - 1)+')">'+(current_page - 1)+'</a></li>')
                $('.left').replaceWith('<li class="page-item"><a href="#" class="page-link" onclick="blacklisted('+(current_page - 1)+')"><i class="mdi mdi-chevron-left"></i></a></li>');
            }

           }
        }
    );
}



function initTable(){
  $('tbody').empty();
  blacklisted(10);
}







  


$('.save-visitor').on("click", function(){
    var firstname = $('.visitor-firstname').val();
    var  lastname= $('.visitor-lastname').val();
    var  phone_number = $('.visitor-phone-number').val();
    var email = $('.visitor-email').val();
    var  purpose_blacklist = $('.visitor-blacklist-purpose').val();
    var  remark = $('.visitor-blacklist-remark').val();
    var  job_title = $('.visitor-job-title').val();

    var  company_name = $('.visitor-company-name').val();
    var  document_label = $('.visitor-document-label').val();
    var  document_number = $('.visitor-document-number').val();

    var _data = {
        firstname : firstname,
        lastname: lastname,
        phone_number: phone_number,
        email: email,
        job_title: job_title,
        remark: remark,
        purpose_blacklist: purpose_blacklist,
        document_label: document_label,
        document_number: document_number,
        company_name: company_name
    }

    axios.post('/web-api-visitor-blacklist',_data).then(
        (response)  => {
            if (response.data.status) {
                $('.blacklist-modal').modal('toggle');
                $('#blacklist-form').trigger("reset");
                $('.blacklist-modal').trigger("reset");
                toastr.success(response.data.message);
                clearForm();
                initTable();
            }else{
                toastr.error(response.data.message)
            }
        }
    );

    

});


function editBlacklisted(item){
   var url = '/web-api-visitor/show/'+item;
   axios.get(url).then(
       (response) => {
           if(response.data.status){
            $('.visitor-firstname2').val(response.data.content.firstname);
            $('.visitor-lastname2').val(response.data.content.lastname);
            $('.visitor-phone-number2').val(response.data.content.phone_number);
            $('.visitor-email2').val(response.data.content.email);
            $('.visitor-blacklist-purpose2').val(response.data.content.purpose_blacklist);
            $('.visitor-blacklist-remark2').val(response.data.content.remark);
            $('.visitor-job-title2').val(response.data.content.job_title);
            $('.visitor-company-name2').val(response.data.content.organisation_name);
            $('.visitor-document-label2').val(response.data.content.document_label);
            $('.visitor-document-number2').val(response.data.content.document_number);
            $('.item-slug').val(response.data.content.id);
            $('.edit-blacklist-modal').modal('show');
           }
       }
   )
}




$('.edit-visitor').on("click", function(){
    var firstname = $('.visitor-firstname2').val();
    var  lastname= $('.visitor-lastname2').val();
    var  phone_number = $('.visitor-phone-number2').val();
    var email = $('.visitor-email2').val();
    var  purpose_blacklist = $('.visitor-blacklist-purpose2').val();
    var  remark = $('.visitor-blacklist-remark2').val();
    var  job_title = $('.visitor-job-title2').val();

    var  company_name = $('.visitor-company-name2').val();
    var  document_label = $('.visitor-document-label2').val();
    var  document_number = $('.visitor-document-number2').val();
    var item = $('.item-slug').val();

    var _data = {
        id: item,
        firstname : firstname,
        lastname: lastname,
        phone_number: phone_number,
        email: email,
        job_title: job_title,
        remark: remark,
        purpose_blacklist: purpose_blacklist,
        document_label: document_label,
        document_number: document_number,
        company_name: company_name
    }

    axios.put('/web-api-visitor-blacklist-edit',_data).then(
        (response)  => {
            if (response.data.status) {
                $('.edit-blacklist-modal').modal('toggle');
                $('#blacklist-form2').trigger("reset");
                $('.edit-blacklist-modal').trigger("reset");
                toastr.success(response.data.message);
                clearForm();
                initTable();
            }else{
                toastr.error(response.data.message)
            }
        }
    );

    

});


function deleteVisitor(item){
 var url = '/web-api-visitor/'+item;

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            axios.delete(url).then(
                (response) => {
                    if (response.data.status) {
                        Swal.fire(
                            'Deleted!',
                            ''+response.data.message,
                            'success'
                        );

                        initTable();

                    }else{
                        Swal.fire(
                            'Not Deleted!',
                            ''+response.data.message,
                            'error'
                        );
                    }
                }
            )
        
        }
    })



}


$(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
          });
          

          

$('#fsearch').on('keyup', function () {

    var query = $(this).val();
    var res = '';

    if (query.trim()) {
        $.ajax({
            url: "/web-api-visitor-search/" + query,
            method: 'GET',
            dataType: 'json',
            success: function (dataResult) {
    
                if (dataResult.content.length < 1) {
                    $('tbody').replaceWith('<tbody></tbody>');
                } else {
                    $.each(dataResult.content, function (key, value) {
    
                        res += '<tr>'+
                        '<td>'+
                            '<div class="avatar-xs">'+
                                '<span class="avatar-title rounded-circle">'+
                                ''+value.firstname.charAt(0)+''+value.lastname.charAt(0)+'' +
                                '</span>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<h5 class="font-size-14 mb-1"><a href="#" class="text-dark">'+value.firstname+' '+value.lastname+'</a></h5>'+
                            '<p class="text-muted mb-0">'+value.job_title+'</p>'+
                        '</td>'+
                        '<td>'+value.email+'</td>'+
                        '<td>'+
                           ''+value.organisation_name+''+
                        '</td>'+
                        '<td>'+
                        ''+value.purpose_blacklist+''+
                        '</td>'+
                        '<td>'+
                            '<div class="dropdown">'+
                               '<a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">'+
                                    '<i class="mdi mdi-dots-horizontal font-size-18"></i>'+
                                '</a>'+
                                '<ul class="dropdown-menu dropdown-menu-right" style="">'+
                                    '<li><a href="javascript: void(0);" class="dropdown-item" onclick="editBlacklisted('+value.id+')"><i class="mdi mdi-pencil font-size-16 text-success mr-1"></i> Edit</a></li>'+
                                    '<li><a href="javascript: void(0);" class="dropdown-item" id="sa-params" onclick="deleteVisitor('+value.id+')"><i class="mdi mdi-trash-can font-size-16 text-danger mr-1"></i> Delete</a></li>'+
                                '</ul>'+
                            '</div>'+
                        '</td>'+
                    '</tr>';
                    })
                    $('tbody').replaceWith('<tbody></tbody>');
                    $('tbody').append(res);
                }
    
    
            }
    
    
        });
    }else{
        $('tbody').replaceWith('<tbody></tbody>');
        clearForm();
        blacklisted(current_page);

    }
  
});




$(document).ready(function () {
         // displayAdmin();
   

         blacklisted(10); 
         
        
         
         });