<div class="modal-header bg-theme-colored">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title text-white" id="myModalLabel">Registration Form</h4>
</div>
<div class="p-40">
  <!-- Reservation Form Start-->
    <form id="reservation_form_popup" name="reservation_form" class="reservation-form" method="post" role="form" autocomplete="off" action=""><h3 class="mt-0 line-bottom text-theme-colored mb-40">Get A Free Service<span class="text-theme-colored font-weight-600"> Now!</span></h3>
      <div class="row">
        <div class="col-sm-12">
        <div id="errorDiv"></div>
          <div class="form-group mb-30">
            <input placeholder="Enter Name" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
              <span class="help-block" id="error"></span>           
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group mb-30">
            <input placeholder="Email" type="email" id="reservation_email" name="reservation_email" class="form-control" required="">
             <span class="help-block" id="error"></span>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group mb-30">
            <input placeholder="Phone" type="text" id="reservation_phone" name="reservation_phone" class="form-control" required="">
                   <span class="help-block" id="error"></span>

          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group mb-30">
            <div class="styled-select">
              <select id="car_select" name="car_select" class="form-control" required="">
                <option value="">- Select Your Course Type -</option>
                <option value="Primary">Primary</option>
                <option value="Secondary">Secondary</option>
                <option value="Diploma">Diploma</option>
              </select>
            </div>
                   <span class="help-block" id="error"></span>

          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group mb-30">
            <input name="reservation_date" class="form-control required date-picker" type="text" placeholder="Reservation Date" aria-required="true">
                   <span class="help-block" id="error"></span>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group mb-0 mt-0">
            <input name="form_botcheck" class="form-control" type="hidden" value="">
            <button type="submit" id="btn-signup" class="btn btn-colored btn-theme-colored btn-lg btn-flat border-left-theme-colored-4px" data-loading-text="Please wait...">Submit Now</button>
          </div>
        </div>
      </div>
    </form>
    <!-- Reservation Form End-->

    <!-- Reservation Form Validation Start-->
    <script type="text/javascript">
    // JavaScript Validation For Registration Page

// $('document').ready(function()
// {      

//      // name validation
//      var nameregex = /^[a-zA-Z ]+$/;
     
//      $.validator.addMethod("validname", function( value, element ) {
//          return this.optional( element ) || nameregex.test( value );
//      }); 
     
//      // valid email pattern
//      var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     
//      $.validator.addMethod("validemail", function( value, element ) {
//          return this.optional( element ) || eregex.test( value );
//      });
     
//      $("#reservation_form_popup").validate({
          
//       rules:
//       {
//         reservation_name: {
//           required: true,
//           validname: true,
//           minlength: 4
//         },
//         reservation_email : {
//         required : true,
//         validemail: true,
//         // remote: {
//         //   url: "check-email.php",
//         //   type: "post",
//         //   data: {
//         //     email: function() {
//         //       return $( "#email" ).val();
//         //     }
//         //   }
//         // }
//         },
//         reservation_phone: {
//           required: true,
//           minlength: 10,
//           maxlength: 15
//         },
//         car_select:{
//           required: true,
//         },
//         reservation_date: {
//           required: true,
//         },

        
//        },
//        messages:
//        {
//         reservation_name: {
//           required: "Name is required",
//           validname: "Name must contain only alphabets and space",
//           minlength: "your name is too short"
//             },
//         reservation_email : {
//           required : "Email is required",
//           validemail : "Please enter valid email address",
//           remote : "Email already exists"
//           },
//         reservation_phone:{
//           required: "Phone is required",
//           minlength: "phone no at least have 10 no",
//           maxlength: "Phone no less than 10 No"
//           },
//         car_select:{
//           required: "Cousrse is required",
//           // minlength: "Select at least one course"
//           },
//         reservation_date: {
//           required: "Date is required",

//         }
        
//        },
//        errorPlacement : function(error, element) {
//         $(element).closest('.form-group').find('.help-block').html(error.html());
//        },
//        highlight : function(element) {
//         $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
//        },
//        unhighlight: function(element, errorClass, validClass) {
//         $(element).closest('.form-group').removeClass('has-error');
//         $(element).closest('.form-group').find('.help-block').html('');
//        },
//         submitHandler: submitForm
//        }); 
       
       
//        function submitForm(){
         
//          $.ajax({
//             url: 'ajax-load/reservation.php',
//             type: 'POST',
//             data: $('#reservation_form_popup').serialize(),
//             dataType: 'json'
//          })
//          .done(function(data){
            
//             $('#btn-signup').html('<img src="ajax-loader.gif" /> &nbsp; signing up...').prop('disabled', true);
//             $('input[type=text],input[type=email]').prop('disabled', true);
            
//             setTimeout(function(){
                   
//             if ( data.status==='success' ) {
              
//               $('#errorDiv').slideDown('fast', function(){
//                 $('#errorDiv').html('<div class="alert alert-info">'+data.message+'</div>');
//                 $("#reservation_form_popup").trigger('reset');
//                 $('input[type=text],input[type=email]').prop('disabled', false);
//                 $('#btn-signup').html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign Me Up').prop('disabled', false);
//               }).delay(3000).slideUp('fast');
              
                     
//               } else {
                     
//                 $('#errorDiv').slideDown('fast', function(){
//                     $('#errorDiv').html('<div class="alert alert-danger">'+data.message+'</div>');
//                   $("#reservation_form_popup").trigger('reset');
//                   $('input[type=text],input[type=email]').prop('disabled', false);
//                   $('#btn-signup').html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign Me Up').prop('disabled', false);
//               }).delay(3000).slideUp('fast');
//             }
                  
//           },3000);
            
//          })
//          .fail(function(){
//             $("#reservation_form_popup").trigger('reset');
//             alert('An unknown error occoured, Please try again Later...');
//          });
//        }
// });
      // $("#reservation_form_popup").validate({
      //   submitHandler: function(form) {
      //     var form_btn = $(form).find('button[type="submit"]');
      //     var form_result_div = '#form-result';
      //     $(form_result_div).remove();
      //     form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
      //     var form_btn_old_msg = form_btn.html();
      //     form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
      //     $(form).ajaxSubmit({
      //       dataType:  'json',
      //       success: function(data) {
      //         if( data.status == 'true' ) {
      //           $(form).find('.form-control').val('');
      //         }
      //         form_btn.prop('disabled', false).html(form_btn_old_msg);
      //         $(form_result_div).html(data.message).fadeIn('slow');
      //         setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
      //       }
      //     });
      //   }
      // });
    </script>
    <!-- Reservation Form Validation Start -->

</div>
<!-- Footer Scripts -->
<script>
  //reload date and time picker
  THEMEMASCOT.initialize.TM_datePicker();
</script>
    <script src="ajax-load/assets/register.js"></script>
    <!-- <script src="ajax-load/assets/jquery.validate.min.js"></script> -->

