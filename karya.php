<?php
  session_start();
  include 'conn.php';  
  
  $tampilPeg  = mysqli_query($conn, "SELECT * FROM karya WHERE  id_user='$_SESSION[id]'");
  
  include 'header.php';
  include 'navbar.php';
?>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    
    <!-- Side Bar -->
    <div class="sidebar one_quarter first"> 
      <nav class="sdb_holder">
        <ul>
          <li><a href="profile.php">Profileku</a></li>
          <li><a href="update.php">Update Profileku</a></li>
          <li><a href="karya.php">Karya Seniku</a></li>
        </ul>
      </nav>
    </div>
    <!-- End Side Bar -->

    <!-- Main Body -->
    <div class="content three_quarter"> 
      <table>
        <thead>
          <tr>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Pelukis</th>
            <th>Deskripsi</th>
            <th>Edit</th>
            <th>Hapus</th>
          </tr>
        </thead>
          <?php while ( $peg = mysqli_fetch_assoc($tampilPeg) ) : ?>
          <tr>
            <td><img src="images/karya/<?= $peg['gambar']; ?>"></td>
            <td><?= $peg['judul']; ?></td>
            <td><?= $peg['pelukis']; ?></td>
            <td><?= $peg['desc']; ?></td>
            <td><a href="edit.php?id=<?= $peg['id'];?>">Edit</a></td>
            <td><a href="hapus.php?id=<?= $peg['id']; ?>" onclick="return confirm('Yakin?');">Hapus</a></td>
          </tr>
          <?php endwhile; ?>
      </table>
      <a href="tambah.php" class="btn center">Tambah Karyamu</a>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
  </main>
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php include 'footer.php'; ?>