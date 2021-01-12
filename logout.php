<?php
    session_start();
    session_unset();
    session_destroy();

    include 'header.php';
    include 'navbar.php';
?>
<div class="wrapper row3">
  	<main class="hoc container clear"> 
		<h1 class="header center">Anda Telah Logout</h1>
		<a class="header center" href="index.php">Kembali ke Home</a>
	</main>
</div>

<!-- JAVASCRIPTS -->
<?php include 'footer.php'; ?>