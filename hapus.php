<?php
	include 'conn.php';
	$id = $_GET["id"];
	$hapus  = mysqli_query($conn, "DELETE FROM karya WHERE id=$id");

	if ($id > 0) {
		echo "
        		<script>
        			alert('Data Berhasil Dihapus')
        			document.location.href = 'karya.php'
        		</script>
        ";
	} else {
		echo "
        		<script>
        			alert('Data Gagal Dihapus')
        			document.location.href = 'karya.php'
        		</script>
        	";
	}


?>