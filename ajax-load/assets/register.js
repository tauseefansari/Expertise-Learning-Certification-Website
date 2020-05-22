$('document').ready(function()
{      

     // name validation
     var nameregex = /^[a-zA-Z ]+$/;
     
     $.validator.addMethod("validname", function( value, element ) {
         return this.optional( element ) || nameregex.test( value );
     }); 
     
     // valid email pattern
     var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     
     $.validator.addMethod("validemail", function( value, element ) {
         return this.optional( element ) || eregex.test( value );
     });

      // valid phone No pattern
     var phonegex = /^[0-9-+]+$/;
     $.validator.addMethod("validnumber", function( value, element ) {
         return this.optional( element ) || phonegex.test( value );
     });
     
     $("#reservation_form_popup").validate({
          
      rules:
      {
        reservation_name: {
          required: true,
          validname: true,
          minlength: 4
        },
        reservation_email : {
        required : true,
           /* email: true,
                remote: {
                    url: "check_email.php",
                    type: "post"
                 }*/
        },
        reservation_phone: {
          required: true,
          validnumber:true,
          minlength: 10,
          maxlength: 12
        },
        reservation_pno:{
          required: true,
          validnumber:true,
          minlength: 10,
          maxlength: 12
        },
        car_select:{
          required: true,
        },
        reservation_date: {
          required: true,
        },
        
        reservation_address: {
          required: true,
        },

       },
       messages:
       {
        reservation_name: {
          required: "Name is required",
          validname: "Name must contain only alphabets and space",
          minlength: "your name is too short"
            },
        reservation_address: {
          required: "Address is required",
            },
        reservation_email : {
          required : "Email is required",
          validemail : "Please enter valid email address",
         // remote : "Email already exists"
          },
        reservation_phone:{
          required: "Phone number is required",
          validnumber: "Phone number must contain only Number.",
          minlength: "phone number at least have 10 no",
          maxlength: "Phone number less than 12 No"
          },

          reservation_pno:{
          required: "Phone number is required",
          validnumber: "Phone number must contain only Number.",
          minlength: "phone number at least have 10 no",
          maxlength: "Phone number less than 12 No"
          },
        car_select:{
          required: "Cousrse is required",
          
          },
        reservation_date: {
          required: "Date is required",

        }
        
       },
       errorPlacement : function(error, element) {
        $(element).closest('.form-group').find('.help-block').html(error.html());
       },
       highlight : function(element) {
        $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
       },
       unhighlight: function(element, errorClass, validClass) {
        $(element).closest('.form-group').removeClass('has-error');
        $(element).closest('.form-group').find('.help-block').html('');
       },
        submitHandler: submitForm
       }); 
 
       function submitForm(){
         
         $.ajax({
            url: 'ajax-load/reservation.php',
            type: 'POST',
            data: $('#reservation_form_popup').serialize(),
            dataType: 'json'
         })
         .done(function(data){
            
            $('#btn-signup').html('<img src="ajax-load/ajax-loader.gif" /> &nbsp; Please wait...').prop('disabled', true);
            $('input[type=text],input[type=email]').prop('disabled', true);
            
            setTimeout(function(){
                   
            if ( data.status==='success' ) {
              
              $('#errorDiv').slideDown('fast', function(){
                $('#errorDiv').html('<div class="alert alert-info">'+data.message+'</div>');
                $("#reservation_form_popup").trigger('reset');
                $('input[type=text],input[type=email]').prop('disabled', false);
                $('#btn-signup').html('Submit Now').prop('disabled', false);
              }).delay(3000).slideUp('fast');
              
                     
              } else {
                     
                $('#errorDiv').slideDown('fast', function(){
                    $('#errorDiv').html('<div class="alert alert-danger">'+data.message+'</div>');
                  $("#reservation_form_popup").trigger('reset');
                  $('input[type=text],input[type=email]').prop('disabled', false);
                  $('#btn-signup').html('Submit Now').prop('disabled', false);
              }).delay(3000).slideUp('fast');
            }
                  
          },3000);
            
         })
         .fail(function(){
            $("#reservation_form_popup").trigger('reset');
            alert('An unknown error occoured, Please try again Later...');
         });
       }
});
