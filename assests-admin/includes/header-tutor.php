<?php
session_start();
?>

<header>
<div class="container-fluid">
<div class="d-flex">

<div class="topbar-right ms-auto">
<ul>

<?php echo "<li class='nav-item'>Welcome, ".$_SESSION["Name"] ."</li>"; ?>
	
<li class="nav-item dropdown">
<a class="dropdown-toggle" href="javascript:void(0)" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
<img class="avatar" src="assets-admin/img-Extra/man-profile-01.jpg" alt="" />
<div class="online"></div>
</a>
<ul class="dropdown-menu" aria-labelledby="profileDropdown">
<li><a class="dropdown-item" href="learner-profile.php"><svg class="svg-item me-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M313.6 288c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4zM416 464c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16v-41.6C32 365.9 77.9 320 134.4 320c19.6 0 39.1 16 89.6 16 50.4 0 70-16 89.6-16 56.5 0 102.4 45.9 102.4 102.4V464zM224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm0-224c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"/></svg>Profile</a></li>
<li><a class="dropdown-item" href="index.php"><svg class="svg-item me-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M388.5 46.3C457.9 90.3 504 167.8 504 256c0 136.8-110.8 247.7-247.5 248C120 504.3 8.2 393 8 256.4 7.9 168 54 90.3 123.5 46.3c5.8-3.7 13.5-1.8 16.9 4.2l3.9 7c3.1 5.6 1.3 12.6-4.1 16C79.9 112 40 179.6 40 256c0 119.9 97.3 216 216 216 119.9 0 216-97.3 216-216 0-77-40.1-144.2-100.3-182.4-5.4-3.4-7.2-10.5-4.1-16l3.9-7c3.4-6.1 11.2-7.9 17-4.3zM272 276V12c0-6.6-5.4-12-12-12h-8c-6.6 0-12 5.4-12 12v264c0 6.6 5.4 12 12 12h8c6.6 0 12-5.4 12-12z"/></svg>Logout</a></li>
</ul>
</li>

</ul>
</div>

</div>
</div>
</header>