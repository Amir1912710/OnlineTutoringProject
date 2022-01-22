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

if (isset($_GET['id'])) {
    $user = $_GET['id'];
} else {
    $user = $_SESSION['LearnerID'];
}
$sql = "SELECT * FROM message WHERE sent_by='" . $user  . "'or received_by='" . $user  . "'";
$result = $conn->query($sql);
$inbox = array();

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
<h1 class="title-page-name">Messages</h1>
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



<div class="messages-chat">

<div class="text-center small my-3">Sat, 12 Jan 07:24 PM</div>

<div class="chat-in mb-3">
<div class="row">
<div class="col-10">
<div class="card">
<div class="card-body">
<p class="mb-0">Lorem ipsum dolor sit amet, sectetu adipsc</p>
</div>
</div>
</div>
<div class="col-2">
<div class="chat-img"><img src="assets-admin/img-Extra/man-profile-02.jpg" class="img-fluid" alt=""/></div>
</div>
</div>
</div>
	
<div class="chat-out mb-3">
<div class="row">
<div class="col-2">
<div class="chat-img"><img src="assets-admin/img-Extra/man-profile-01.jpg" class="img-fluid" alt=""/></div>
</div>
<div class="col-10 pl-0">
<div class="card mb-2">
<div class="card-body">
<p class="mb-0">Lorem ipsum dolor sit amet, sectetu adipsc ing varius interdum incid unt quis, libero aenean mturpis. masa laoreet iaculipede mnisl ulamcorper. Tellus er sodale.</p>
</div>
</div>
<div class="card">
<div class="card-body">
<p class="mb-0">Lorem ipsum dolor sit amet, sectetu adipsc ing varius interdum incid unt quis, libero aenean mturpis. masa laoreet iaculipede mnisl ulamcorper. Tellus er sodale.</p>
</div>
</div>
</div>
</div>
</div>
	
<div class="chat-in mb-3">
<div class="row">
<div class="col-10">
<div class="card">
<div class="card-body">
<p class="mb-0">Lorem ipsum dolor sit amet, sectetu adipsc</p>
</div>
</div>
</div>
<div class="col-2">
<div class="chat-img"><img src="assets-admin/img-Extra/man-profile-02.jpg" class="img-fluid" alt=""/></div>
</div>
</div>
</div>
	
<div class="text-center small-text my-3">Mon, 14 Jan 03:30 PM</div>
	
<div class="chat-out mb-3">
<div class="row">
<div class="col-2">
<div class="chat-img"><img src="assets-admin/img-Extra/man-profile-01.jpg" class="img-fluid" alt=""/></div>
</div>
<div class="col-10 pl-0">
<div class="card mb-2">
<div class="card-body">
<p class="mb-0">Lorem ipsum dolor sit amet, sectetu adipsc ing varius interdum incid unt quis, libero aenean mturpis. masa laoreet iaculipede mnisl ulamcorper. Tellus er sodale.</p>
</div>
</div>
</div>
</div>
</div>
	
<div class="chat-in mb-3">
<div class="row">
<div class="col-10">
<div class="card">
<div class="card-body">
<p class="mb-0">Lorem ipsum dolor sit amet, sectetu adipsc ing varius interdum incid unt quis, libero aenean mturpis. masa laoreet iaculipede mnisl ulamcorper.</p>
</div>
</div>
</div>
<div class="col-2">
<div class="chat-img"><img src="assets-admin/img-Extra/man-profile-02.jpg" class="img-fluid" alt=""/></div>
</div>
</div>
</div>
	
<div class="text-center small-text my-3">01:24 PM</div>
	
<div class="chat-in mb-3">
<div class="row">
<div class="col-10">
<div class="card">
<div class="card-body">
<p class="mb-0">Lorem ipsum dolor sit amet, sectetu adipsc ing varius interdum incid unt quis,</p>
</div>
</div>
</div>
<div class="col-2">
<div class="chat-img"><img src="assets-admin/img-Extra/man-profile-02.jpg" class="img-fluid" alt=""/></div>
</div>
</div>
</div>
	
<hr>
	
<form>
<div class="form-outline mb-4">
<div class="input-group">
<textarea class="form-control" rows="1" id="chat-message" name="chat-message" placeholder="Write here..."></textarea>
<button type="button" class="btn-small-01 bg-01 px-3" id="button-addon2"><svg style="fill:#fff;width:1rem;height:1rem;" viewBox="0 0 512 512"><path d="M464 4.3L16 262.7C-7 276-4.7 309.9 19.8 320L160 378v102c0 30.2 37.8 43.3 56.7 20.3l60.7-73.8 126.4 52.2c19.1 7.9 40.7-4.2 43.8-24.7l64-417.1C515.7 10.2 487-9 464 4.3zM192 480v-88.8l54.5 22.5L192 480zm224-30.9l-206.2-85.2 199.5-235.8c4.8-5.6-2.9-13.2-8.5-8.4L145.5 337.3 32 290.5 480 32l-64 417.1z"/></svg></button>
</div>
</div>
</form>
	
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
	


<!-- JS -->

<?php include("assets-admin/includes/scripts.php");?>

<!-- End JS -->

</body>
</html>
