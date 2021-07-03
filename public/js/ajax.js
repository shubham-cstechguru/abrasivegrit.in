$(function(){
    
    
$("#inquiry_form").on('submit', function(e){
    e.preventDefault();
    
    var url =  $(this).attr('data-url');
    var name = $('#user_name').val();
    var email = $('#user_email').val();
    var user_mobile = $('#user_mobile').val();
    var country = $('#country').val();
    var message = $('#user_message').val();
    
   $.ajax({
          url:url,
          type:"POST",
          headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data:{
            name:name,
            email:email,
            user_mobile:user_mobile,
            country:country,
            message:message
          },
          success:function(response){
              
              if(response.status){
                  document.getElementById("inquiry_form").reset();
                   $("#ajax_message").html();
                  $("#ajax_message").html("Inquiry Send Successfully");
              }
            else{
                 $("#ajax_message").html();
                 $("#ajax_message").html('faild');
            }
            
          },
    });
});
    
})