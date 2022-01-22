$(document).ready(function (){
	
// DateTime Picker
$('.datetimepicker').datetimepicker({
format: 'YYYY-MM-DD'
});
	
});	

// Form SignUp
$("#formsignup").validate({
ignore:[], errorClass:"invalid-feedback", errorElement:"div", errorPlacement:function(e, a) {
$(a).parents(".form-outline").append(e)
}
, highlight:function(e) {
$(e).closest(".form-outline").removeClass("is-invalid").addClass("is-invalid")
}
, success:function(e) {
$(e).closest(".form-outline").removeClass("is-invalid"), $(e).remove()
},
rules: {
"formsignupfirstname": {
required: !0, minlength: 3
}
,"formsignuplastname": {
required: !0, minlength: 3
}
,"formsignupemail": {
required: !0, email: !0, emailfull: !0
}
,"formsignupphone": {
required: !0, number: !0
}
,"formsignupid": {
required: !0, number: !0, minlength: 16, maxlength: 16
}
,"formsignuptransfer": {
required: !0
}
,"formsignupagree": {
required: !0
}
,"formsignupbirth": {
required: !0,
}
,"formsignupimg": {
    required: !0,
}
,"formsignupusername": {
required: !0, minlength: 4
}
,"formsignuppassword": {
required: !0, minlength: 4
}
,"formsignuprepassword": {
required: !0, minlength: 4, equalTo: "#formsignuppassword"
}
},
messages: {
"formsignupfirstname": {
required: " ", minlength: "at least 3 characters" 
}
,"formsignuplastname": {
required: " ", minlength: "at least 3 characters" 
}
,"formsignupemail": {
    required:  " ", number: "Full Email" 

}
,"formsignupphone": {
required: " ", number: "Numbers Only" 
}
,"formsignupid": {
required: " ", number: "Numbers Only", minlength: "less than 16 number", maxlength: "more than 16 number"
}
,"formsignupbirth": " "
,"formsignupimg": " "
,"formsignupusername": {
required: " ", minlength: "at least 4 characters" 
}
,"formsignuppassword": {
required: " ", minlength: "at least 4 characters" 
}
,"formsignuprepassword": {
required: " ", minlength: "at least 4 characters", equalTo: "password don't match" 
}
}
});


// Full Email
jQuery.validator.addMethod("emailfull", function(value, element) {
 return this.optional(element) || /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i.test(value);
}, " ");