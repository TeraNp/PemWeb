<div class="bgded overlay light" style="background-image:url('images/demo/backgrounds/Galeri Indonesia.jpeg');"> 
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
      <h1><img src="images/logo.png" style="width: 30px;"> <a href="index.php">KaryaSeniku</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li><a href="index.php">Home</a></li>
        <li><a href="galeri.php">Galeri</a></li>
        <?php if ($_SESSION) : ?>
          <li><a class="drop" href="#">Profile</a>
            <ul>
              <li><a href="profile.php"><?php echo $_SESSION['username']?></a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        <?php else: ?>
          <li><a class="drop" href="#">Profile</a>
            <ul>
              <li><a href="login.php">Login</a></li>
              <li><a href="register.php">Daftar</a></li>
           </ul>
          </li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>
</div>
<div id="breadcrumb" class="hoc clear"> 
</div>