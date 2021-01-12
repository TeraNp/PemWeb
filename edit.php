<?php
	session_start();

    include 'conn.php';

    $tampilPeg    =mysqli_query($conn, "SELECT * FROM karya WHERE id_user='$_SESSION[id]'");
    $peg    = mysqli_fetch_array($tampilPeg);

    if(isset($_POST['submit'])){
    	
    	$id = $_GET['id'];
        $judul = $_POST['judul'];
        $pelukis = $_POST['pelukis'];
        $desc = $_POST['desc'];

        $sql = "UPDATE karya SET
        		 `judul` = '$judul',
        		 `pelukis` = '$pelukis',
        		 `desc` = '$desc'
        		 WHERE id = $id ";
    
        if (mysqli_query($conn, $sql)) {
        	echo "
        		<script>
        			alert('Data Berhasil Diedit')
        			document.location.href = 'karya.php'
        		</script>
        	";
        } else {
        	echo "        		
        		<script>
        			alert('Data Gagal Diedit')
        			document.location.href = 'karya.php'
        		</script>" . mysqli_error($conn);
        	}
        }
        mysqli_close($conn);




	include 'header.php';
	include 'navbar.php';
?>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
          	<h2 class="center">Ubah Karya Anda</h2>
            <form action="" method="POST" enctype="multipart/form-data" class="center">
            	<input type="hidden" name="id" value="<?=$peg['id']?>">
	               <div class="form-group">
	                   <input class="center btmspace-15" type="text" id="judul" name="judul" value="<?=$peg['judul']?>">
	               </div>
	               <div class="form-group">
	                   <input type="text" class="center btmspace-15" id="pelukis" name="pelukis" value="<?=$peg['pelukis']?>">
	               </div>
	               <div class="form-group">
	               	<label>Deskripsi</label>
                	<textarea class="btmspace-15 center" name="desc" id="desc" cols="25" rows="10" ><?=$peg['desc']?></textarea>
	                </div>
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Edit</button>
            </form>
        </section>
    </div>
</div>

<?php include 'footer.php'; ?>