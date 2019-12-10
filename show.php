<?php
$conn=mysqli_connect("localhost", "root", "", "dicoding");
$show=mysqli_query($conn, "SELECT * FROM dicoding");
?>
<html>
    <head>
    <title>Data Registrasi | Dicoding </title>
    </head>
    <body>
    <center><h1> Daftar Registrasi Member Dicoding</h1></center><hr>
    <?php
    while($showdb=mysqli_fetch_assoc($show)){
        echo "Nama : ". $showdb['nama'] . "<br>";
        echo "Pekerjaan : ". $showdb['pekerjaan'] . "<br>";
        echo "e-Mail : ". $showdb['mail'] . "<br>";
        echo "Tanggal : ". $showdb['tanggal'] . "<br>";
        echo "<hr>";
    }
    ?>
    </body>
</html>

