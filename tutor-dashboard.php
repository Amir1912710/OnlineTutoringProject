<?php include("assets-admin/includes/head.php");?>
	
<!-- End Head -->

<body>

<!-- Header -->

<?php include("assets-admin/includes/header-tutor.php");?>
	
<!-- End Header -->

	
<!-- Header -->

<?php include("assets-admin/includes/side-menu-tutor.php");?>
	
<!-- End Header -->
	

	
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
<h1 class="title-page-name">All Courses</h1>
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
<th>Survey</th>
</tr>
</thead>
<tbody>
	
<tr>
<td>Course One</td>
<td>A12</td>
<td>120 $</td>
<td>
<a href="javascript:void(0)" class="btn-small-01 bg-01 my-1 d-block" data-bs-toggle="modal" data-bs-target="#CourseDetails">Make a survey</a>
</td>
</tr>
	
<tr>
<td>Course Two</td>
<td>N14</td>
<td>145 $</td>
<td>
<a href="javascript:void(0)" class="btn-small-01 bg-01 my-1 d-block" data-bs-toggle="modal" data-bs-target="#CourseDetails">Make a survey</a>
</td>
</tr>
	
<tr>
<td>Course Three</td>
<td>S16</td>
<td>110 $</td>
<td>
<a href="javascript:void(0)" class="btn-small-01 bg-01 my-1 d-block" data-bs-toggle="modal" data-bs-target="#CourseDetails">Make a survey</a>
</td>
</tr>

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

	
<!-- Modal Survey -->
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
<form>
<div class="row">
<div class="col-lg-12">
<h6 class="mb-4">What is your name?</h6>
</div>
<div class="col-lg-12">
<div class="form-outline mb-4 form-check">
<input type="radio" class="form-check-input" id="yes" name="survey" value="Yes"/>
<label class="form-check-label" for="yes">Yes</label>
</div>
</div>
<div class="col-lg-12">
<div class="form-outline mb-4 form-check">
<input type="radio" class="form-check-input" id="no" name="survey" value="No"/>
<label class="form-check-label" for="no">No</label>
</div>
</div>
<div class="col-lg-12">
<div class="form-outline form-check">
<input type="radio" class="form-check-input" id="maybe" name="survey"/>
<label class="form-check-label" for="maybe">Maybe</label>
</div>
</div>
</div>
	
<hr>
	
<div class="row">
<div class="col-lg-12">
<h6 class="mb-4">What is your name?</h6>
</div>
<div class="col-lg-12">
<div class="form-outline mb-4 form-check">
<input type="radio" class="form-check-input" id="yes" name="survey" value="Yes"/>
<label class="form-check-label" for="yes">Yes</label>
</div>
</div>
<div class="col-lg-12">
<div class="form-outline mb-4 form-check">
<input type="radio" class="form-check-input" id="no" name="survey" value="No"/>
<label class="form-check-label" for="no">No</label>
</div>
</div>
<div class="col-lg-12">
<div class="form-outline form-check">
<input type="radio" class="form-check-input" id="maybe" name="survey"/>
<label class="form-check-label" for="maybe">Maybe</label>
</div>
</div>
</div>
	
<div class="row">
<div class="col-lg-12 mt-4">
<div class="d-grid">
<button type="submit" class="btn-lg-01 bg-01">Survey Now</button>
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
<!-- End Modal Survey -->
	


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
