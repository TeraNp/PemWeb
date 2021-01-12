<?php  
    session_start();
    
    include 'conn.php';

    if($_SESSION){
        header('location: index.php');
    } else{

        if(isset($_GET['redirectProfile'])){
            $profileId = $_GET['redirectProfile'];
        }
    
        if(isset($_POST['submit'])){
            // session_start();
            $username = $_POST['username'];
            $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $password = password_verify($_POST['password'], $hash);
    
            $sql = "SELECT * FROM user WHERE `username`='$username'";
            $result = mysqli_query($conn,$sql);
            $row = $result->fetch_assoc();
            if($row != NULL){
                if(password_verify($_POST['password'],$row['password'])){
                    session_start();
                    $_SESSION['username'] = $username;
                    $_SESSION['id'] = $row['id'];
                    // var_dump($_SESSION['id']);
                    if($profileId != NULL){
                        header('location: profile.php?id='.$profileId);
                    } else{
                        header('Location: index.php');
                    }
                }
            } else{
                echo "No Dataset";
            }
        
        }
        mysqli_close($conn);

    }
    include 'header.php';
?>

<div class="bgded overlay light" style="background-image:url('images/demo/backgrounds/Galeri Indonesia.jpeg');"> 
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="index.php">Karya Seniku</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li ><a href="index.php">Home</a></li>
          <li><a href="galeri.php">Galeri</a></li>
            <li><a class="drop" href="#">Profile</a>
              <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Daftar</a></li>
              </ul>
            </li>
        </ul>
      </nav>
    </header>
  </div>
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
  <div class="jumbotron">
    <div class="container">
      <section class="hoc cta clear"> 
      <h2 class="header">Login</h2>
      <form action="login.php<?php if(isset($_GET['redirectProfile'])){echo "?redirectProfile=".$_GET['redirectProfile'];}?>" method="POST">
        <div class="form-group">
          <input type="text" class="btmspace-15" id="username" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="password" class="btmspace-15" id="password" name="password" placeholder="password">
        </div>
        <p>Jika belum memiliki akun <a href="register.php">daftar disini!</a></p>
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
      </form>
    </section>
    </div>
  </div>

    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
<?php include 'footer.php' ?>