<?php
    session_start();
    include 'psb/koneksi.php';
    if($_SESSION['stat_login'] != true){
        echo '<script>window.location="logon.php"</script>';
    }

    $peserta = mysqli_query($db, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($peserta);

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
        <h1>Detail Peserta</h1>
        <div class="boxing">
           
        <table>
    <tr>
        <td>Kode Pendaftaran</td>
        <td>:</td>
        <td><?php echo $p->id_pendaftaran ?></td>
    </tr>
    <tr>
        <td>Tahun Ajaran</td>
        <td>:</td>
        <td><?php echo $p->th_ajaran ?></td>
    </tr>
    <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td><?php echo $p->jurusan ?></td>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><?php echo $p->nm_peserta ?></td>
    </tr>
    <tr>
        <td>Tempat, Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $p->tmp_lahir.','.$p->tgl_lahir ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $p->jk  ?></td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>:</td>
        <td><?php echo $p->agama  ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $p->almt_peserta  ?></td>
    </tr>
   </table>

        </div>
     </section>
</body>
</html>
