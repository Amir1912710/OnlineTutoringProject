
<?php
session_start();
$error = false;
?>

<?php include("assets/includes/head.php"); ?>

<body>

<!-- Header -->

<?php include("assets/includes/header.php"); ?>

<!-- End Header -->


<!-- Connect DataBase -->

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

$conn = new mysqli($servername, $username, $password, $dbname)or die ("cannot");
if(isset($_POST['submit'])){
$sql="SELECT * FROM learnersignup WHERE Username ='".$_POST["Username"]."' and Password='".$_POST["Password"]."'";
$result = mysqli_query($conn,$sql);		
if($row=mysqli_fetch_array($result))
	{
		$_SESSION["Username"]=$row["Username"];
		$_SESSION["Password"]=$row["Password"];
		$_SESSION["FirstName"]=$row["FirstName"];
		$_SESSION["LastName"]=$row["LastName"];
		$_SESSION["NationalID"]=$row["NationalID"];
		$_SESSION["DateOfBirth"]=$row["DateOfBirth"];
		$_SESSION["MobileNumber"]=$row["MobileNumber"];
		$_SESSION["Email"]=$row["Email"];
		$_SESSION["PersonalPhoto"]=$row["PersonalPhoto"];
		$_SESSION["LearnerID"]=$row["LearnerID"];
		header("Location:learner-dashboard.php");
	}
}

if(isset($_POST['submit'])){
	$sql="SELECT * FROM adminregistration WHERE Username ='".$_POST["Username"]."' and Password='".$_POST["Password"]."'";
	$result = mysqli_query($conn,$sql);		
		if($row=mysqli_fetch_array($result))	
		{
			$_SESSION["ID"]=$row["ID"];
			$_SESSION["Username"]=$row["Username"];
			$_SESSION["Password"]=$row["Password"];
			$_SESSION["Job"]=$row["Job"];
			header("Location:admin-dashboard.php");
		}
}
if(isset($_POST['submit'])){
	$sql="SELECT * FROM auditorregistration WHERE Username ='".$_POST["Username"]."' and Password='".$_POST["Password"]."'";
	$result = mysqli_query($conn,$sql);		
		if($row=mysqli_fetch_array($result))	
		{
			$_SESSION["ID"]=$row["ID"];
			$_SESSION["Username"]=$row["Username"];
			$_SESSION["Password"]=$row["Password"];
			header("Location:auditor-dashboard.php");
		}
	}

if(isset($_POST['submit'])){
				$sql="SELECT * FROM tutorregistration WHERE Username ='".$_POST["Username"]."' and Password='".$_POST["Password"]."'";
				$result = mysqli_query($conn,$sql);		
					if($row=mysqli_fetch_array($result))	
					{
						$_SESSION["ID"]=$row["ID"];
						$_SESSION["Name"]=$row["Name"];
						$_SESSION["Username"]=$row["Username"];
						$_SESSION["Password"]=$row["Password"];
						$_SESSION["CourseName"]=$row["CourseName"];
						$_SESSION["CourseId"]=$row["CourseID"];
						header("Location:tutor-dashboard.php");
					}
					else{
						$error = true;
		}
	}
 ?>





<!-- Content -->

<div class="header-spacer"></div>

<main>
	
<section>
<div class="position-relative">
<div class="page-title-img" style="background-image: url(assets/img/pages/slide-signin.jpg)"></div>
<div class="mask-02"></div>
<div class="page-title-img-text">
<div class="container">
<h1>Sign In</h1>
</div>
</div>
</div>
</section>
	

<section class="py-5">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="widget-body">

<?php
if ($error==true) {
	?>
		<div id="wronglogin" class="my-3 alert alert-danger text-center d-block">username or password is not correct</div>
	<?php
}
?>

<form id="formsignin" name="formsignin" action="" method="post">
<div class="form-outline mb-4">
<input type="text" class="form-control" id="formsigninusername" name="Username"/>
<label class="form-label" for="formsigninusername" >Username</label>
</div>
<div class="form-outline mb-4">
<span toggle="#formsigninpassword" class="toggle-password svg eye"></span>
<input type="password" class="form-control" id="formsigninpassword" name="Password"/>
<label for="formsigninpassword" class="form-label">Password</label>
</div>
<div class="row">
<div class="col-12">
<div class="d-grid mb-4">
<button type="submit" class="cus-btn" name="submit">Sign In</button>
</div>
</div>
<div class="col-12">
<div class="form-outline">
<p class="text-center mb-0">Do not have an account? <a href="signup.php" class="cus-link"><strong>Sign Up</strong></a></p>
</div>
</div>
</div>
</form>
</div>	
</div>
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
<script src="assets/js/validate-signin.js"></script>

<!-- End JS -->



</body>
</html>

