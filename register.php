<?php
    session_start();

    include 'conn.php';

    if($_SESSION){
        header('location: index.php');
    } else{

        if(isset($_POST['submit'])){
            if($_POST['password'] !== $_POST['confirm_password'])
            header('Location: register.php');
            
            $name = $_POST["name"];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

            $sql = "INSERT INTO user (`name`, `email`, `username`, `password`)
            VALUES ('$name', '$email', '$username', '$password')";
    
            if (mysqli_query($conn, $sql)) {
                echo "            
                <script>
                  alert('Data Berhasil Ditambah')
                  document.location.href = 'login.php'
                </script>";
            } else {
                echo "    
                <script>
                  alert('Register Gagal)
                  document.location.href = 'register.php'
                </script>" . mysqli_error($conn);
            }
        }
        mysqli_close($conn);

    }
    include 'header.php'
?>
  <!-- ################################################################################################ -->
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
        </ul>
      </nav>
    </header>
  </div>
</div>
<!-- ################################################################################################ -->  
  <div class="jumbotron">
    <div class="container">
      <section class="hoc cta clear"> 
          <h2>Silahkan Daftar</h2>
            <form action="register.php" method="POST">
                <div class="form-group">
                    <input class="btmspace-15" type="text" id="name" name="name" placeholder="nama" required>
                </div>
                <div class="form-group">
                    <input class="btmspace-15" type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="text" class="btmspace-15" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" class="btmspace-15" id="password" name="password" placeholder="Password" onkeyup='check();'  required>
                </div>
                <div class="form-group">
                    <input type="password" class="btmspace-15" id="confirm_password" name="confirm_password" placeholder="Password Validation" onkeyup=' check();' required>
                    <span id="message"></span>
                </div>
                <p>Jika sudah memiliki akun <a href="login.php">Login disini!</a></p>
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
            </form>
          </section>
        </div>
    </div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
   
<script type="text/javascript">
        var check= function(){
            if (document.getElementById('password').value ==
          document.getElementById('confirm_password').value) {
          document.getElementById('message').style.color = 'green';
          document.getElementById('message').innerHTML = 'Password Matches!';
            } else {
          document.getElementById('message').style.color = 'red';
          document.getElementById('message').innerHTML = 'Password is not the same!';
            }
        }
</script>
<<?php include 'footer.php'; ?>