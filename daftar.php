<?php
    include 'psb/koneksi.php';

    if (isset($_POST['submit'])) {
        
        // ambil 1 id terbesar di kolom id_pendaftaran, ambil 5 angka saja dari kanan
        $getMaxId = mysqli_query($db, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");
        $d = mysqli_fetch_object($getMaxId);
        $generateId = 'P'.date('Y').sprintf("%05s", $d->id + 1);
        
        // proses insert
        $insert = mysqli_query($db, "INSERT INTO tb_pendaftaran VALUES (
                '".$generateId."',
                '".date('y-m-d')."',
                '".$_POST['th_ajaran']."',
                '".$_POST['jurusan']."',
                '".$_POST['nm']."',
                '".$_POST['tmp_lahir']."',
                '".$_POST['jk']."',
                '".$_POST['agama']."',
                '".$_POST['tgl_lahir']."',
                '".$_POST['alamat']."'
        )");

        if($insert){
            echo'<script>window.location="berhasil.php?id='.$generateId.'"</script>';
        }else{
            echo 'huft '.mysqli_error($db);
        }
        
    }
    if (isset($_POST['home'])) {
        session_unset();
        session_destroy();
        header ("location:index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSB Online</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

</head>
<body>
    
    <!-- bagian box formulir -->
     <section class="box-formulir">
    <h2>Formulir Pendaftaran Siswa Baru</h2>

    <!-- bagian form -->
     <form action="" method="post">
        <div class="box-utama">
            <table border=0 class="table-form">
                <tr>
                    <td>Tahun Ajaran</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="th_ajaran" class="input-control" value="2025/2026" readonly>
                    </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select class="input-control" name="jurusan">
                            <option value="">--Pilih--</option>
                            <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Desain Pemodelan dan Informasi Bangunan">Desain Pemodelan dan Informasi Bangunan</option>
                            <option value="Bisnis Konstruksi dan Properti">Bisnis Konstruksi dan Properti</option>
                            <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                            <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                            <option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
                            <option value="Teknik Bodi Otomotif">Teknik Bodi Otomotif</option>
                            <option value="Teknik Instalasi Tenaga Listrik">Teknik Instalasi Tenaga Listrik</option>
                            <option value="Teknik Elektronika Industri">Teknik Elektronika Industri</option>
                            <option value="Perhotelan">Perhotelan</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        <div class="teks-diri">
            <h3>Data Diri Calon Siswa</h3>
        </div>
            <div class="box-utama">
            <table border=0 class="table-form">
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nm" class="input-control" required>
                    </td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="tmp_lahir" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" class="input-control" value="Laki-Laki"> Laki Laki &nbsp&nbsp&nbsp&nbsp
                        <input type="radio" name="jk" class="input-control" value="Perempuan"> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select class="input-control" name="agama">
                            <option value="">--Pilih--</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budhha">Budhha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Konguchu">Konguchu</option>
                            <option value="Katolik">Katolik</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgl_lahir" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <textarea class="input-control" name="alamat"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
                        <button type="submit" name="home" class="btn-home" a href="login.php">HOME</button>
                    </td>
                </tr>
            </table>
        </div>
     </section>
</body>
</html>
