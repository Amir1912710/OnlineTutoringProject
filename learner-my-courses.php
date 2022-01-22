<?php include("assets-admin/includes/head.php");?>
	
<!-- End Head -->

<body>

<!-- Header -->

<?php include("assets-admin/includes/header-learner.php");?>
	
<!-- End Header -->

	
<!-- Header -->

<?php include("assets-admin/includes/side-menu-learner.php");?>
	
<!-- End Header -->
	
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
$conn2=mysqli_connect($servername,$username,$password,$DB);

if(isset($_POST['submit'])){ 
	$sql2="INSERT INTO rating (CourseID, LearnerID, Name, Comment, ChosenRate)  VALUES ('".$_POST['formcourseIdd']."','".$_SESSION["LearnerID"]."', '".$_SESSION["FirstName"]."','".$_POST["Feedback"]."','".$_POST["rateform"]."')";
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
<span class="title-home-link"><a href="learner-dashboard.php">
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
	
<?php
    $sql= "SELECT * FROM mycourse WHERE LearnerID ='".$_SESSION["LearnerID"]."'";
    $result= $conn->query($sql);
 
  while($row = $result->fetch_assoc()){
    ?>

<div class="col-lg-4 mb-4">
<div class="card">
<?php echo "<img src='./CoursesImages/".$row['Image']."' class='img-fluid' alt=''>";?>
<div class="card-body card-body-01 p-4">
<div class="row">
<div class="col-6">
<h5 class="card-title"><?php echo $row['CourseName'] ?></h5>
</div>
<div class="col-6">

  <?php
    $countaverage = 5;
    $conn3=mysqli_connect($servername,$username,$password,$DB);
    $sql3 = "SELECT ChosenRate FROM rating WHERE CourseID='".$row["CourseID"]."'";
    $averagerate = $conn3->query($sql3);
    while($row2 = $averagerate->fetch_assoc()){
      $countaverage = ($countaverage + $row2['ChosenRate'])/2;
    }
    echo "<input class='rating' value='$countaverage' disabled>";
  ?>

<!-- <input class="rating" value="4" disabled> -->
</div>
<div class="col-6">
<p><span class="fw-bold me-2">Type:</span><?php echo $row['CourseType'] ?></p>
</div>
<div class="col-6">
<span class="fw-bold me-2">Price:</span><?php echo $row['CoursePrice'] ?></p>
</div>
</div>
<div class="d-grid">
<a href="javascript:void(0)" id="addrating" class="btn-lg-01 bg-03" data-bs-toggle="modal" data-bs-target="#CourseContent" data-id="<?php  echo  $row['CourseID'] ?>">Open Course</a>
</div>
</div>
</div>
</div>

<?php
}
$conn->close();
?>

</div>
</div>
</section>

</main>
	
<!-- End Content -->


	
<!-- Footer -->

<?php include("assets-admin/includes/footer.php");?>
	
<!-- End Footer -->


<!-- Modal Course Content -->
<div class="modal fade model-frameless" id="CourseContent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
  
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
<div class="modal-body">
<div class="card">
<div class="card-header bg-03">
<h6 class="text-white"><div id="courseName"></div></h6>
</div>
<div class="card-body">	
<p class="text-center">Course Content</p>

<form id="formrate" name="formrate" action="" method="post">
<input type="hidden" id="formcourseIdd" name="formcourseIdd" value=""/>
<div class="text-center">
<input class="rating" value="5" name="rateform" id="rateform">
<br> 
<textarea name="Feedback" rows="5" cols="30"  placeholder="Write Your Feedback ....."></textarea> 
<br>
<button type="submit" class="btn-small-01 bg-01 mt-2" name="submit">Rate This</button>
</div>
</form>

</div>
</div>
</div>
</div>
</div>
</div>
<!-- End Modal Course Content -->


<!-- JS -->

<?php include("assets-admin/includes/scripts.php");?>

<!-- End JS -->

</body>
</html>

	
<script>
$(document).on("click", "#addrating", function () {

  var courseId=$(this).data('id');

     $.ajax({
        type: 'post',
        url: 'ajax-request.php',
        data: {'getmyCourseDetails':true,'courseId':courseId},
        success: function (data) {
          
          console.log(data);

          const obj = JSON.parse(data);
          console.log(obj[0])
          $(".modal-body #formcourseIdd").val(courseId);
          $(".modal-body #courseName").text( obj[0].CourseName);
          $(".modal-body #courseType").text( obj[0].CourseType);
          $(".modal-body #coursePrice").text( obj[0].CoursePrice);


        }
    });
  
});



</script>

