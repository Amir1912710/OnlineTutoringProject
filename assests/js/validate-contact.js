// Form Contact
$("#formcontacts").validate({
ignore: [], errorClass: "invalid-feedback", errorElement: "div", errorPlacement: function (e, a) {
$(a).parents(".form-outline").append(e)
}
, highlight: function (e) {
$(e).closest(".form-outline").removeClass("is-invalid").addClass("is-invalid")
}
, success: function (e) {
$(e).closest(".form-outline").removeClass("is-invalid"), $(e).remove()
},
rules: {
"formcontactsfirstname": {
required: !0, minlength: 3
}
, "formcontactslastname": {
required: !0, minlength: 3
}
, "formcontactsemail": {
required: !0, email: !0, emailfull: !0
}
,"formcontactsphone": {
number: !0
}
, "formcontactscountry": {
required: !0
}
, "formcontactsmassage": {
required: !0, minlength: 20
}
},
messages: {
"formcontactsfirstname": {
required: " ", minlength: "at least 3 characters"
}
, "formcontactslastname": {
required: " ", minlength: "at least 3 characters"
}
, "formcontactsemail": " "
,"formcontactsphone": {
number: "Numbers Only" 
}
, "formcontactscountry": " "
, "formcontactsmassage": {
required: " ", minlength: "at least 20 characters"
}
}
});


$('body').on('submit', '#formcontacts',function(e) {
e.preventDefault();
var form_data = new FormData(this);
for (var pair of form_data.entries()) {
}	
$.ajax({
type: "POST",
data: form_data,
cache: false,
contentType: false,
processData: false
}).done(function (data){	
swal("Thank You", "Your message / requirement has been sent and we will contact you shortly", "success");
document.getElementById('formcontacts').reset();
$('.selectpicker').selectpicker('refresh');
})
});


// Full Email
jQuery.validator.addMethod("emailfull", function (value, element) {
return this.optional(element) || /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i.test(value);
}, " ");
