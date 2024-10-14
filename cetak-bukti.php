<?php
    include 'psb/koneksi.php';

    $peserta = mysqli_query($db, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($peserta);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSB Online</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <script>
        window.print();
    </script>
</head>
<body>
    <div class="table-bukti">
   <h2>Bukti Pendaftaran</h2>
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
</body>
</html>
