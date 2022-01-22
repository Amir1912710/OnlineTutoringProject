<?php include("assets/includes/head.php"); ?>

<body>

<!-- Header -->

<?php include("assets/includes/header.php"); ?>

<!-- End Header -->


<!--  Connect to DataBase  -->

<?php
$servername="localhost";
$username="root";
$password="";
$DB="webproject";

$conn=mysqli_connect($servername,$username,$password,$DB);


if(!$conn){
  die("connection failed: " . mysqli_connect_error());
  $myfile = fopen("errorFile.txt", 'a') or die("Unable to open file!");
	$txt = "connection failed: " . mysqli_connect_error();
	fwrite($myfile, $txt);
	fclose($myfile);
}
?>


<!-- Content -->

<div class="header-spacer"></div>

<main>
	
<section>
<div class="position-relative">
<div class="page-title-img" style="background-image: url(assets/img/Courses/slide-courses.jpg)"></div>
<div class="mask-02"></div>
<div class="page-title-img-text">
<div class="container">
<h1>Courses</h1>
</div>
</div>
</div>
</section>


<section class="mt-5 mb-2">
<div class="container">
<div class="row">

	 <?php
    $sql= "SELECT * FROM courses ";
    $result= $conn->query($sql);
 
  while($row = $result->fetch_assoc()){
    ?>
	
<div class="col-lg-6 mb-4">
<div class="card">
<a href="signin.php">
<div class="img-overlay">
 <?php echo "<img src='./CoursesImages/".$row['Image']."' class='img-fluid' alt=''>";?>
<div class="overlay">
<div class="text">Enroll</div>
</div>
</div>
</a>
<div class="card-body card-body-01 p-4">
<div class="row">
<div class="col-8">
<h5 class="card-title"><?php echo $row['CourseName'] ?></h5>
<div class="card-icons-02">
<p class="fw-bold d-inline-block mb-0 me-2">Type:</p><?php echo $row['CourseType'] ?>
</div>
</div>
</div>
<p class="fw-bold d-inline-block mb-0 me-2">Price:</p><?php echo $row['CoursePrice'] ?>
<a href="signin.php" class="float-end">Enroll</a>
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

<?php include("assets/includes/footer.php"); ?>

<!-- End Footer -->



<!-- JS -->

<?php include("assets/includes/scripts.php"); ?>

<!-- End JS -->

</body>
</html>
