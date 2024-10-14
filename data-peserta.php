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
        <h1>Data Peserta</h1>
        <div class="boxing">
            <a href="cetak-peserta.php" target="_blank" class="btn-cetak">Print</a>
            <table class="table" border="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pendaftaran</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        $list_peserta = mysqli_query($db, "SELECT * FROM tb_pendaftaran");
                        while($row = mysqli_fetch_array($list_peserta)){
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['id_pendaftaran'] ?></td>
                        <td><?php echo $row['nm_peserta'] ?></td>
                        <td><?php echo $row['jk'] ?></td>
                        <td>
                            <a href="detail-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>">Detail</a> |
                            <a href="hapus-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>" onclick="return confirm('Anda Yakin?')">Hapus</a> |
                            <a href="edit-data.php?id=<?php echo $row['id_pendaftaran'] ?>">Update</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
     </section>
</body>
</html>
