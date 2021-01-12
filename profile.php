<?php
    session_start();
    include "conn.php";

    $tampilPeg    =mysqli_query($conn, "SELECT * FROM user WHERE id='$_SESSION[id]'");
    $peg          =mysqli_fetch_array($tampilPeg);

  include 'header.php';
  include 'navbar.php';
?>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <div class="sidebar one_quarter first"> 
      <h6>Profile</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="profile.php">Profileku</a></li>
          <li><a href="update.php">Update Profileku</a></li>
          <li><a href="karya.php">Karya Seniku</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </div>
    <!-- End Side Bar -->
    <!-- Main Body -->
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->
      <h1 class="header center ">Profile Saya </h1>
      <h1 class="header center ">Nama</h1>
      <p class="center"><?=$peg['name']?></p>
      <h1 class="center ">Username</h1>
      <p class="center"><?=$peg['username']?></p>
      <h1 class="center ">Email</h1>
      <p class="center"><?=$peg['email']?></p>
      <h1 class="center ">Desc</h1>
      <?php if(is_null($peg['desc'])): ?>
        <p>Tidak ada Deskripsi</p>
      <?php else: ?>
        <p class="center"><?=$peg['desc']?></p>
      <?php endif; ?>

    </div>

    <!--  main body -->
  </main>
</div>

<?php include 'footer.php'; ?>