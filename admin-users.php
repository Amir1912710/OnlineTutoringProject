<?php include("assets-admin/includes/head.php");?>
	
<!-- End Head -->

<body>

<!-- Header -->

<?php include("assets-admin/includes/header-admin.php");?>
	
<!-- End Header -->

	
<!-- Header -->

<?php include("assets-admin/includes/side-menu-admin.php");?>
	
<!-- End Header -->
	
<!--  Connect to DataBase  -->

<?php
$servername="localhost";
$username="root";
$password="";
$DB="webproject";

$conn=mysqli_connect($servername,$username,$password,$DB);


if(!$conn){
    die("coonection failed: " . mysqli_connect_error());
}
?>	

<?php
if(isset($_POST['submit'])){ 
    $sql="insert into adminregistration (Username , Password , Job) values('".$_POST['formusername']."','".$_POST["formuserpassword"]."','".$_POST["formjobdiscribtion"]."')";
        
	$conn->query($sql); 
    
}

?>

<?php

if(isset($_POST['submitEdit'])){ 
    $conn2=mysqli_connect($servername,$username,$password,$DB);
	$sql2="UPDATE adminregistration SET Username= '".$_POST['formusereditname']."',Password= '".$_POST["formusereditpassword"]."',Job= '".$_POST["formusereditjob"]."' WHERE ID='".$_POST['formusereditid']."'";
	$conn2->query($sql2);
    $conn2->close();
}





?>
	
<!-- Content -->
	
<div class="header-spacer"></div>

<main>
	
<section>
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="page-title">
<span class="title-home-link"><a href="admin-dashboard.php">
<svg class="svg" viewBox="0 0 576 512"><path d="M541 229.16l-232.85-190a32.16 32.16 0 0 0-40.38 0L35 229.16a8 8 0 0 0-1.16 11.24l10.1 12.41a8 8 0 0 0 11.2 1.19L96 220.62v243a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16v-128l64 .3V464a16 16 0 0 0 16 16l128-.33a16 16 0 0 0 16-16V220.62L520.86 254a8 8 0 0 0 11.25-1.16l10.1-12.41a8 8 0 0 0-1.21-11.27zm-93.11 218.59h.1l-96 .3V319.88a16.05 16.05 0 0 0-15.95-16l-96-.27a16 16 0 0 0-16.05 16v128.14H128V194.51L288 63.94l160 130.57z"></path></svg>
</a></span>
<h1 class="title-page-name">Users</h1>
</div>
</div>
</div>
</div>
</section>
	
<section class="mb-4">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="card card-cus-01">
<div class="card-header">
<h6>Add New User</h6>
</div>
<div class="card-body bg-white">
<div class="row">
<div class="col-lg-12">
<form id="formuser" name="formuser" action="" method="POST">
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-4 col-md-4">
<div class="form-outline mb-4">
<input type="text" class="form-control" id="formusername" name="formusername"/>
<label class="form-label" for="formusername">User Name</label>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="form-outline mb-4">
<span toggle="#formuserpassword" class="toggle-password svg eye"></span>
<input type="password" class="form-control" id="formuserpassword" name="formuserpassword"/>
<label class="form-label" for="formuserpassword">User Password</label>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="form-outline mb-4">
<input type="text" class="form-control" id="formjobdiscribtion" name="formjobdiscribtion"/>
<label class="form-label" for="formjobdiscribtion">Job Description</label>
</div>
</div>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="d-grid">
<button type="submit" class="btn-lg-01 bg-01" name="submit">Add User</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>	
	
<section class="mb-4">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
	
<div class="card">
<div class="card-body">

<div class="cus-datatable table-cus">
<table id="table-users" class="table table-striped table-bordered table-100 small"> 
<thead>
<tr>
<th>User Name</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php
    $sql= "SELECT * FROM adminregistration ";
    $result= $conn->query($sql);
 
  	while($row = $result->fetch_assoc()){
    ?>
	
<tr>
<td><?php echo $row['Username'] ?></td>
<td>
<a id="user_edit_action" href="javascript:void(0)" class="btn-small-01 bg-01 my-1 d-block" data-bs-toggle="modal" data-bs-target="#UserEdit" data-id="<?php  echo  $row['ID'] ?>">View &amp; Edit User</a>
<a id="user_delete_action" href="" class="btn-small-01 bg-02 my-1 d-block" data-id="<?php  echo  $row['ID'] ?>">Delete User</a>
<!-- <button type="button" class="btn-small-01 bg-02 my-1 d-block w-100 delete-request" onClick="delete(<?php //echo $row['CourseID']; ?>)">Delete User</button> -->
</td>
</tr>
	
<?php
      }
      $conn->close();
?>

</tbody>	
</table>
</div>
	
</div>
</div>

</div>
</div>
</div>
</section>

</main>
	
<!-- End Content -->


	
<!-- Footer -->

<?php include("assets-admin/includes/footer.php");?>
	
<!-- End Footer -->
	
	
<!-- Modal Edit Course -->
<div class="modal fade model-frameless" id="UserEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
<div class="modal-body">
<div class="card">
<div class="card-header bg-01">
<h6 class="text-white">Edit User</h6>
</div>
<div class="card-body">
<form id="formuseredit" name="formuseredit" action="" method="POST">
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-4 col-md-4">
<div class="form-outline mb-4">
<input type="hidden" id="formusereditid" name="formusereditid" value=""/>
<input type="text" class="form-control" id="formusereditname" name="formusereditname" value="Course One" />
<label class="form-label active" for="formusereditname">User Name</label>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="form-outline mb-4">
<span toggle="#formusereditpassword" class="toggle-password svg eye"></span>
<input type="password" class="form-control" id="formusereditpassword" name="formusereditpassword" value="A12" />
<label class="form-label active" for="formusereditpassword">User Password</label>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="form-outline mb-4">
<input type="text" class="form-control" id="formusereditjob" name="formusereditjob" value="Course One" />
<label class="form-label active" for="formusereditjob">Job Description</label>
</div>
</div>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="d-grid">
<button type="submit" class="btn-lg-01 bg-01" name="submitEdit">Edit User &amp; Save</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- End Modal Edit Course -->
	




<!-- JS -->

<?php include("assets-admin/includes/scripts.php");?>
<script>
$(document).ready(function(){
$('#table-users').DataTable({
"columnDefs": [{
"targets": [1],
"orderable": false
}]
});	
});
</script>

<!-- End JS -->
<script type="text/javascript">
        var count = 0;
        var btn = document.getElementById("btn");
        // var disp = document.getElementById("display");
  
        btn.onclick = function () 
		{
            count++;
        }

</script>

</body>
</html>

<script>

// function delete(Id)
//   {
//     $.ajax({
//         type: 'post',
//         url: 'ajax-request.php',
//         data: {'deleteUserDetails':true,'Id':Id},
        
//     });
//   };
  $(document).on("click", "#user_delete_action", function () {
    var Idd=$(this).data('id');
    $.ajax({
        type: 'post',
        url: 'ajax-request.php',
        data: {'deleteUserDetails':true,'Id':Idd},
        
    });
  });


$(document).on("click", "#user_edit_action", function () {

var Id=$(this).data('id');

   $.ajax({
      type: 'post',
      url: 'ajax-request.php',
      data: {'getUserDetails':true,'Id':Id},
      success: function (data) {
        
        console.log(data);

        const obj = JSON.parse(data);
        console.log(obj[0])
        $(".modal-body #formusereditid").val(Id);
        $(".modal-body #formusereditname").val( obj[0].Username);
        $(".modal-body #formusereditpassword").val( obj[0].Password);
        $(".modal-body #formusereditjob").val( obj[0].Job);

        //$(".modal-body #coursePhoto").attr("src","CoursesImages/"+obj[0].Image);

       

      }
  });

});


</script>