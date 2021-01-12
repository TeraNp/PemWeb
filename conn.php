<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "karyaseniku";

    $conn = mysqli_connect($servername,$username,$password,$db);

    if(!$conn){
        die("error bang");
    }

?>