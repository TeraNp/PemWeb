<?php
	session_start();

    include 'conn.php';
	// ambil data file
    if(isset($_POST['submit'])){
    
        $gambar = $_FILES['gambar'];
        $judul = $_POST['judul'];
        $pelukis = $_POST['pelukis'];
        $desc = $_POST['desc'];
        $targetDir = "images/karya/";
        $fileName = $_FILES['gambar']['name'];
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

        $allowedTypes = array('jpg','png','jpeg','gif');

         if(in_array($fileType,$allowedTypes)){
            if(move_uploaded_file($_FILES['gambar']['tmp_name'],$targetFilePath)){
                $sql = "INSERT INTO karya (`id_user`, `gambar`, `judul`, `pelukis`, `desc`)
                VALUES ('$_SESSION[id]', '$fileName', '$judul', '$pelukis', '$desc')";
                if(mysqli_query($conn,$sql)){
                echo "                
                    <script>
                        alert('Karya Anda Berhasil Ditambah')
                        document.location.href = 'karya.php'
                    </script>";
                }else{
                echo "                
                    <script>
                        alert('Karya Anda Gagal Ditambah')
                        document.location.href = 'karya.php'
                    </script>";
                }
        }else{
            echo "
                <script>
                    alert('Karya Anda Gagal Ditambah')
                    document.location.href = 'karya.php'
                </script>
            ";
            }
        }else{
           echo "
                <script>
                    alert('Gambar harus berbentuk jpg, png, jpeg, atau gif')
                    document.location.href = 'karya.php'
                </script>
            ";
        }
    }

	include 'header.php';
	include 'navbar.php';
?>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
          	<h2 class="center">Silahkan Tambah Karya Anda</h2>
            <form action="tambah.php" method="POST" enctype="multipart/form-data" class="center">
           		   <input class="center btmspace-15" type="file" name="gambar" required="" required>
	               <div class="form-group">
	                   <input class="center btmspace-15" type="text" id="judul" name="judul" placeholder="Judul" required>
	               </div>
	               <div class="form-group">
	                   <input type="text" class="center btmspace-15" id="pelukis" name="pelukis" placeholder="Pelukis" required>
	               </div>
	               <div class="form-group">
	               	<label>Deskripsi</label>
                	<textarea class="btmspace-15 center" name="desc" id="desc" cols="25" rows="10" required></textarea>
	                </div>
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>
    </div>
</div>

<?php include 'footer.php'; ?>
