<?php
    session_start();

    include "conn.php";


    
    if (isset($_POST['submit'])) { 
      
        $id = $_SESSION['id'];
        $username = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];

        $query = "UPDATE user SET
                        `name` = '$name',
                        `username` = '$username', 
                        `email` = '$email',
                        `desc` = '$desc' 
                        WHERE id = $id ";

         if(mysqli_query($conn,$query)){
                    echo "
            <script>
              alert('Profile Berhasil Diupdate')
              document.location.href = 'karya.php'
            </script>
          ";
        } else {
          echo "            
            <script>
              alert('Profile Gagal Diupdate')
              document.location.href = 'karya.php'
            </script>" . mysqli_error($conn);
          }
    
      }

    $tampilPeg    =mysqli_query($conn, "SELECT * FROM user WHERE id='$_SESSION[id]'");
    $peg    =mysqli_fetch_array($tampilPeg);

    mysqli_close($conn);

    include 'header.php';
    include 'navbar.php';
?>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->
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
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- Main Body -->
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->

      <form action="" method="POST">
                <div class="form-group">
                  <label class="center">Nama</label>
                  <input class="btmspace-15 center" type="text" id="name" name="name" value ="<?=$peg['name']?>">
                </div>
                <div class="form-group">
                  <label class="center">Username</label>
                  <input class="btmspace-15 center" type="text" id="username" name="username" value="<?=$peg['username']?>">
                </div>
                <div class="form-group">
                  <label class="center">Email</label>
                  <input type="text" class="btmspace-15 center" id="email" name="email" value="<?=$peg['email']?>">
                </div>
                <div class="form-group">
                  <label class="center">Desc</label>
                  <textarea class="btmspace-15 center" name="desc" id="desc" cols="25" rows="10" ><?=$peg['desc']?></textarea>
                </div>
                <button type="submit" name="submit" id="submit" class="btn center">Update</button>
            </form>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
  </main>
</div>

<?php include 'footer.php'; ?>