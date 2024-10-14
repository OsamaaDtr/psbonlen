<?php
    session_start();
    include 'psb/koneksi.php';
    if($_SESSION['stat_login'] != true){
        echo '<script>window.location="logon.php"</script>';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSB Online | Administrator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

</head>
<body>
   <!-- Bagian header -->
    <header>
        <h1><a href="beranda.php">Admin PSB</a></h1>
        <ul>
            <li><a href="beranda.php">Beranda</a></li>
            <li><a href="data-peserta.php">Data Peserta</a></li>
            <li><a href="keluar.php">Keluar</a></li>
        </ul>
    </header>

    <!-- bagian content -->
     <section class="content">
        <h1>Beranda</h1>
        <div class="boxing">
            <h3><?php echo $_SESSION['nama'] ?>Selamat Datang Website PSB Online</h3>

        </div>
     </section>
</body>
</html>
