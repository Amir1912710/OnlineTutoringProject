<?php include("assets-admin/includes/head.php");?>
	
<!-- End Head -->

<body>

<!-- Header -->

<?php include("assets-admin/includes/header-tutor.php");?>
	
<!-- End Header -->

	
<!-- Header -->

<?php include("assets-admin/includes/side-menu-tutor.php");?>
	
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

$emailError="";

if(isset($_POST['submit'])){ 
    
	{
		$target_dir="./CoursesImages/";
		$targeet = basename($_FILES["formcoursephoto"]["name"]);
		$target_file=$target_dir.basename($_FILES["formcoursephoto"]["name"]);
		$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	if(file_exists($target_file))
	{
		echo "file already exists";
	}
	if($_FILES["formcoursephoto"]["size"]>500000)
	{
		echo "file is too large";
	}
	if(move_uploaded_file($_FILES["formcoursephoto"]["tmp_name"], $target_file))
	{

		$sql="INSERT INTO requestedcourse (CourseName, Price, CourseType, TutorName, Image) VALUES('".$_POST['formcoursename']."','".$_POST["formcourseprice"]."','".$_POST["formcoursetype"]."','".$_SESSION["Name"]."','".$targeet."')";
		
	if ($conn->query($sql) === TRUE) 
    {
		header("Location:tutor-requested-courses.php");
	} 
    
	else 
	{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
	}
}
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
<span class="title-home-link"><a href="tutor-dashboard.php">
<svg class="svg" viewBox="0 0 576 512"><path d="M541 229.16l-232.85-190a32.16 32.16 0 0 0-40.38 0L35 229.16a8 8 0 0 0-1.16 11.24l10.1 12.41a8 8 0 0 0 11.2 1.19L96 220.62v243a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16v-128l64 .3V464a16 16 0 0 0 16 16l128-.33a16 16 0 0 0 16-16V220.62L520.86 254a8 8 0 0 0 11.25-1.16l10.1-12.41a8 8 0 0 0-1.21-11.27zm-93.11 218.59h.1l-96 .3V319.88a16.05 16.05 0 0 0-15.95-16l-96-.27a16 16 0 0 0-16.05 16v128.14H128V194.51L288 63.94l160 130.57z"></path></svg>
</a></span>
<h1 class="title-page-name">My Courses</h1>
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
<h6>Add New Course</h6>
</div>
<div class="card-body bg-white">
<div class="row">
<div class="col-lg-12">
<form id="formcourse" name="formcourse" action="" method="POST" enctype="multipart/form-data">
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="form-outline mb-4">
<input type="text" class="form-control" id="formcoursename" name="formcoursename"/>
<label class="form-label" for="formcoursename">Course Name</label>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-outline mb-4">
<input type="text" class="form-control" id="formcoursetype" name="formcoursetype"/>
<label class="form-label" for="formcoursetype">Course Type</label>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-outline mb-4">
<input type="text" class="form-control" id="formcourseprice" name="formcourseprice"/>
<label class="form-label" for="formcourseprice">Course Price</label>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-outline mb-4">
<input type="file" class="form-control" id="formcoursephoto" name="formcoursephoto"/>
<label class="form-label active" for="formcoursephoto" style="position:relative;margin-right:20px;top:-40px;float:right;">Photo</label>
</div>
</div>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="d-grid">
<button name="submit" type="submit" class="btn-lg-01 bg-01">Add Course</button>
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
<table id="table-courses" class="table table-striped table-bordered table-100 small">
<thead>
<tr>
<th>Course Name</th>
<th>Type</th>
<th>Price</th>
<th>Image</th>
</tr>
</thead>
<tbody>

<?php
    $sql= "SELECT * FROM courses ";
    $result= $conn->query($sql);
 
  while($row = $result->fetch_assoc()){
    ?>	
	
<tr>
<td><?php echo $row['CourseName'] ?></td>
<td><?php echo $row['CourseType'] ?></td>
<td><?php echo $row['CoursePrice'] ?></td>
<td>
<?php echo "<img src='./CoursesImages/".$row['Image']."' width='50' class='img-fluid' alt=''>";?>
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

	
<!-- Modal View Course Details -->
<div class="modal fade model-frameless" id="CourseDetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
<div class="modal-body">
<div class="card">
<div class="card-header bg-01">
<h6 class="text-white">View Course Details</h6>
</div>
<div class="card-body">
<table class="table table-striped mb-0 small">
<tbody>
<tr>
<th scope="row">Name</th>
<td>Course One</td>
</tr>
<tr>
<th scope="row">Type</th>
<td>A12</td>
</tr>
<tr>
<th scope="row">Price</th>
<td>120 $</td>
</tr>
<tr>
<th scope="row">Photo</th>
<td><img src="assets-admin/img-Extra/man-profile-01.jpg" class="personal-photo" alt=""/></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- End Modal View Details -->
	
	
<!-- Modal Edit Course -->
<div class="modal fade model-frameless" id="CourseEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
<div class="modal-body">
<div class="card">
<div class="card-header bg-03">
<h6 class="text-white">Edit Course</h6>
</div>
<div class="card-body">
<form id="formcourseedit" name="formcourseedit">
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="form-outline mb-4">
<input type="text" class="form-control" id="formcoursename" name="formcoursename" value="Course One" />
<label class="form-label active" for="formcoursename">Course Name</label>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-outline mb-4">
<input type="text" class="form-control" id="formcoursetype" name="formcoursetype" value="A12" />
<label class="form-label active" for="formcoursetype">Course Type</label>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-outline mb-4">
<input type="text" class="form-control" id="formcourseprice" name="formcourseprice" value="120 $" />
<label class="form-label active" for="formcourseprice">Course Price</label>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-outline mb-4">
<input type="file" class="form-control" id="formcoursephoto" name="formcoursephoto"/>
<label class="form-label active" for="formcoursephoto" style="position:relative;margin-right:20px;top:-40px;float:right;">Photo</label>
</div>
</div>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="d-grid">
<button type="submit" class="btn-lg-01 bg-03">Edit Course &amp; Save</button>
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
$('#table-courses').DataTable({
"columnDefs": [{
"targets": [3],
"orderable": false
}]
});	
});
</script>

<!-- End JS -->

</body>
</html>
