// Form Contact
$("#formsignin").validate({
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
"Username": {
required: !0, minlength: 4
}
,"Password": {
required: !0, minlength: 4
}
},
messages: {
"Username": {
required: " ", minlength: "at least 4 characters"
}
,"Password": {
required: " ", minlength: "at least 4 characters"
}
}
});

