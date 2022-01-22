// Delete Request	
$('.delete-request').on('click', function(){
var delrow = this;
swal({
title: "Are you sure?",
text: "You won't be able to revert this",
type: "warning",
showCancelButton: true,
confirmButtonText: "Yes, Delete it",
cancelButtonText: "Cancel",
closeOnConfirm: false,
closeOnCancel: false
},
function(isConfirm){
if(isConfirm){
swal("Deleted", "Course has been deleted", "success");
$(delrow).parents('tr').remove();
} else {
swal("Cancelled", "Course is safe", "error");
}
});
});


// Reject Request	
$('.reject-request').on('click', function(){
var delrow = this;
swal({
title: "Are you sure?",
text: "You won't be able to revert this",
type: "warning",
showCancelButton: true,
confirmButtonText: "Yes, Reject it",
cancelButtonText: "Cancel",
closeOnConfirm: false,
closeOnCancel: false
},
function(isConfirm){
if(isConfirm){
swal("Deleted", "Course has been Rejected", "success");
$(delrow).parents('tr').remove();
} else {
swal("Cancelled", "Course is safe", "error");
}
});
});


// Approve Request	
$('.approve-request').on('click', function(){
var delrow = this;
swal({
title: "Are you sure?",
text: "",
type: "warning",
showCancelButton: true,
confirmButtonText: "Yes, Approve it",
cancelButtonText: "Cancel",
closeOnConfirm: false,
closeOnCancel: false
},
function(isConfirm){
if(isConfirm){
swal("Deleted", "Course has been Approved", "success");
$(delrow).parents('tr').remove();
} else {
swal("Cancelled", "Course is safe", "error");
}
});
});
