$(document).ready(function()
{
	// my method for validate username

$.validator.addMethod("username_regex", function(value, element) {

return this.optional(element) || /^[a-z0-9\.\-_]{3,30}$/i.test(value);

}, "Please choose a username with only a-z 0-9.");


$( "#reg_date" ).datepicker({

changeMonth: true,

changeYear: true

});
$("formButton").click(function(){
$("#modal_register").validate(
{
rules:{
'username':{
required: true,
minlength: 3,
username_regex: true,
remote:{
url: "validatorAJAX.php",
type: "post"
}
},
'email':{
required: true,
email: true,
remote:{
url: "validatorAJAX.php",
type: "post"
}
},
'birthdate':{
required: true,
date: true
},
'passmain':{
required: true,
minlength: 8
},
'passconfirm':{
equalTo: '#reg_pass1'
}
},
messages:{
'username':{
required: "The username field is mandatory!",
minlength: "Choose a username of at least 4 letters!",
username_regex: "You have used invalid characters. Are permitted only letters numbers!",
remote: "The username is already in use by another user!"
},
'email':{
required: "The Email is required!",
email: "Please enter a valid email address!",
remote: "The email is already in use by another user!"
},
'passmain':{
required: "The password field is mandatory!",
minlength: "Please enter a password at least 8 characters!"
},
'passconfirm':{
equalTo: "The two passwords do not match!"
}
}
});
});
});
