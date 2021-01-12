<?php 
session_start();  
include 'conn.php';

    $tampilPeg    =mysqli_query($conn, "SELECT * FROM karya");

include 'header.php';
include 'navbar.php';
?>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <h1>Galeri</h1>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Gambar</th>
              <th>Judul</th>
              <th>Pencipta</th>
              <th>Deskripsi</th>
            </tr>
          </thead>
          <tbody>
          	<?php while ( $peg = mysqli_fetch_assoc($tampilPeg) ) : ?>
	            <tr>
	              <td><img src="images/karya/<?= $peg['gambar']; ?>"></td>
	              <td><?= $peg['judul']; ?></td>
	              <td><?= $peg['pelukis']; ?></td>
	              <td><?= $peg['desc']; ?></td>
	            </tr>
	        <?php endwhile; ?>
          </tbody>
        </table>
      </div>
      <!-- ################################################################################################ -->
      <?php if ($_SESSION) : ?>
        <a href="tambah.php" class="btn center">Tambah Karyamu</a>
      <?php else : ?>
        <a href="login.php" class="btn center">Tambah Karyamu</a>
      <?php endif; ?>
    </div>
  </main>
</div>
    <!-- ################################################################################################ -->
    <!-- / main body -->

<?php include 'footer.php'; ?>