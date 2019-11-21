jQuery.validator.addMethod("noSpace", function(value, element) {
    return value == '' || value.trim().length != 0;
}, "No space please and don't leave it empty");
jQuerCheckDOBy.validator.addMethod("customEmail", function(value, element) {
  return this.optional( element ) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test( value );
}, "Please enter valid email address!");



jQuery.validator.addMethod("", function (value, element) {
       var  minDate = Date.parse("01/01/1950");
        var today=new Date();
        var DOB = Date.parse(value);
        if((DOB <= today && DOB >= minDate)) {
            return true;
        }
        return false;
    }, "NotValid");





jQuery.validator.addMethod("passstrength", function(value, element) {
    return this.optional(element) || /([0-9])/ && /([a-zA-Z])/ && /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/.test(value);});


jQuery.validator.addMethod("alphabetsnspace", function(value, element) {
    return this.optional(element) || /^[a-zA-Z ]*$/.test(value);},"invalid!");


$.validator.addMethod( "alphanumeric", function( value, element ) {
return this.optional( element ) || /^\w+$/i.test( value );
}, "Letters, numbers, and underscores only please" );
var $registrationForm = $('#myform');
if($registrationForm.length){
  $registrationForm.validate({
      rules:{
          //username is the name of the textbox
          hname: {
              required: true,
              //alphanumeric is the custom method, we defined in the above
              alphanumeric: true
          },
          
          email: {
              required: true,
              customEmail: true
          },
          phone:{
              required:true,
              number:true,
              maxlength:10,
              minlength:10
          },
          pwd: {
              required: true,
              passstrength: true,
              minlength:8
          },
          cpass: {
              required: true,
              equalTo: '#pwd'
          },
          name: {
              required: true,
              alphabetsnspace: true
           },
          
          city: {
              required: true,
              //alphanumeric is the custom method, we defined in the above
              alphabetsnspace: true
          },
          
          pin: {
              required: true,
              number: true,
              minlength:6,
              maxlength:6
          },
          

          dis: {
              required: true
          }, 
          uname: {
              required: true,
              minlength:6,
              maxlength:6
          },

      },
      messages:{
          hname: {
              //error message for the required field
              required: 'Please enter house!'
          },
          
          
          pin:{
            required: 'enter Pincode!',
            number: 'invalid!',
            minlength: 'invalid!',
            maxlength: 'invalid!'
          },
          
          
          city: {
              //error message for the required field
              required: 'Please enter City!'
          },
          email: {
              required: 'Please enter email!',
              //error message for the email field
              email: 'Please enter valid email!'
          },
          phone:{
              required:'mobile number required!',
              number:'invalid format!',
              minlength:'invalid!',
              maxlength:'invalid!'
          },
            
          pwd: {
              required: 'Please enter password!',
              passstrength: 'weak password!',
              minlength:'too short!'
          },
          cpass: {
              required: 're-enter password!',
              passstrength: 'weak password!',
              minlength:'too short!',
              equalTo: 'Same password please!'
          },
          name: {
              required: 'Please enter  name!',
              alphabetsnspace:'invalid format!'
          },
          
          dis: {
              required: 'Please select district!'
          },
           uname: {
              required: 'Please select district!'
              minlength:'too short',
              maxlength:'too long'
          },

      },

  });
}
