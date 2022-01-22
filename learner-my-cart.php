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
<h1 class="title-page-name">My Cart</h1>
</div>
</div>
</div>
</div>
</section>
	
<section class="mb-4">
<div class="container-fluid">
<div class="row">

<?php
    $sql= "SELECT * FROM mycart WHERE LearnerID ='".$_SESSION["LearnerID"]."'";
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
<input class="rating" value="4" disabled>
</div>
<div class="col-6">
<p><span class="fw-bold me-2">Type:</span><?php echo $row['CourseType'] ?></p>
</div>
<div class="col-6">
<span class="fw-bold me-2">Price:</span><?php echo $row['CoursePrice'] ?></p>
</div>
</div>
<div class="d-grid">
<!-- <button type="button" class="btn-lg-01 bg-02">Checkout</button> -->
<a href="learner-my-cart.php" id="add_course_tocourses" class="btn-lg-01 bg-01 my-1 d-block"  data-id="<?php  echo  $row['CourseID'] ?>" data-name="<?php  echo  $row['CourseName'] ?>" data-type="<?php  echo  $row['CourseType'] ?>" data-price="<?php  echo  $row['CoursePrice'] ?>" data-image="<?php  echo  $row['Image'] ?>" data-cartid="<?php  echo  $row['CartID'] ?>">Checkout</a>

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
	


<!-- JS -->

<?php include("assets-admin/includes/scripts.php");?>

<!-- End JS -->

</body>
</html>

<script>
  $(document).on("click", "#add_course_tocourses", function () {
  var courseId=$(this).data('id');
  var courseName=$(this).data('name');
  var courseType=$(this).data('type');
  var coursePrice=$(this).data('price');
  var courseImage=$(this).data('image');
  var cartId=$(this).data('cartid');
  
    $.ajax({
        type: 'post',
        url: 'ajax-request.php',
        data: {'addtomycourse':true,'courseId':courseId,'courseName':courseName,'courseType':courseType,'coursePrice':coursePrice,'courseImage':courseImage,'cartId':cartId},
        
    });
  });
  
  </script>