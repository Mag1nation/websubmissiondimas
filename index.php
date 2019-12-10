<?php
    if(isset($_POST["submit"])){
        $conn       = mysqli_connect("localhost","root","", "dicoding");
        $nama       = $_POST['nama'];
        $pekerjaan  = $_POST['pekerjaan'];
        $mail       = $_POST['mail'];
        $tanggal    = $_POST['tanggal'];
        $query="INSERT INTO dicoding SET nama='$nama', pekerjaan='$pekerjaan', mail='$mail', tanggal='$tanggal'"; 
        $querry=mysqli_query($conn, $query);
        if($querry){
            echo "Data berhasil dimasukkan";
        }
    }        
?>

<html>
    <head>
        <title>Dicoding Submission | Form Input Azure</title>
    </head>
        <body>
    <h2> Form Registrasi Member Dicoding</h1>
        <form method="POST">
            <fieldset>
                <legend>Registrasi</legend>
                <p>
                    <label> Nama Lengkap : </label>
                    <input type="text" name="nama" placeholder="Nama Lengkap">
                </p>
                <p>
                    <label> Pekerjaan : </label>
                    <input type="text" name="pekerjaan" placeholder="Pekerjaan">
                </p>
                <p>
                    <label> e-Mail : </label>
                    <input type="text" name="mail" placeholder="e-Mail">
                </p>
                <p>
                    <label>Tanggal Registrasi:</label>
                    <input type="date" name="tanggal" />
                </p>
                <p>
                    <input type="submit" name="submit" value="Submit" />
                </p>
                <p>
                <a href="show.php">
                       Tampilan Data Terdaftar
                    </a>
                    </p>
             </fieldset>
         </form>
        </body>
</html>