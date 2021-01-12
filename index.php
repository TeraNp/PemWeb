<?php  
  session_start();
  include 'conn.php';

  $sql = "SELECT * FROM user";

  $rows = mysqli_query($conn, $sql);
  mysqli_close($conn);

  include 'header.php';
  include 'navbar.php';

?>
<div id="pageintro" class="hoc clear"> 
  <article>
    <h3 class="heading" >Selamat Datang</h3>
    <p>Website karyaseniku, tempat untuk menampung seluruh karya senimu agar dilihat puluhan juta orang</p>
  </article>
  </div>
</div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <h1 class="heading">Berita & Info</h1>
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="group excerpt">
      <article class="one_third first"><a class="imgover btmspace-30" href="news1.php"><img src="images/demo/Berita2.jpg" alt=""></a>
        <h6 class="heading">Disambut Antusias, Oppo Art Jakarta Virtual 2020 Diperpanjang Hingga Awal 2021</h6>
        <p><b>KOMPAS.com</b> – OPPO Art Jakarta Virtual 2020 telah sukses digelar pada Oktober 2020 hingga November 2020. Sebanyak 800 karya seni telah dipamerkan kepada lebih dari 30.000 pengunjung...&hellip;</p>
        <footer><a href="news1.php">Lihat Selengkapnya &raquo;</a></footer>
      </article>
      <article class="one_third"><a class="imgover btmspace-30" href="news2.php"><img src="images/demo/berita1.jpg" alt=""></a>
        <h6 class="heading">Jokowi: Pandemi Covid-19 Bukan Penghalang untuk Berkreasi</h6>
        <p><b>Sindo.com</b> - Jokowi menegaskan pandemi bukan penghalang bagi insan seni dan budaya untuk tetap...&hellip;</p>
        <footer><a href="news2.php">Lihat Selengkapnya &raquo;</a></footer>
      </article>
      <article class="one_third"><a class="imgover btmspace-30" href="news"><img src="images/demo/berita3.jpg" alt=""></a>
        <h6 class="heading">800 Karya Seni Siap Meriahkan Pameran Art Virtual Jakarta 2020</h6>
        <p><b>Suara.com</b> - Masa pandemi tidak menjadi penghalang adanya pameran karya seni rupa. Namun, berbeda dari tahun sebelumnya pameran ini dilakukan di Jakarta secara virtual...&hellip;</p>
        <footer><a href="news3.php">Lihat Selengkapnya &raquo;</a></footer>
      </article>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<?php include 'footer.php'; ?>