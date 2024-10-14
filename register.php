<?php 
    include "database/database.php";
    if (isset($_POST['daftar'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO dataa (username, email, password) VALUES ('$username', '$email', '$password')";
    
    if ($db->query($sql)) {
        echo "Data Berhasil Diinput";
        header ("location:login.php");
    } else {
        echo "Data Gagal Diinput! Username Atau Email Sudah Terpakai!";
    }
    }
    session_start();

    if (isset($_POST['home'])) {
        session_unset();
        session_destroy();
        header ("location:index.php");
        exit();
    }
    if (isset($_POST['register'])) {
        session_unset();
        session_destroy();
        header ("location:register.php");
    }
    if (isset($_POST['login'])) {
        session_unset();
        session_destroy();
        header ("location:login.php");
    }
    if (isset($_POST['daftar'])) {
        session_unset();
        session_destroy();
        header ("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Spicy+Rice&display=swap" rel="stylesheet">

    <title>Website Pendaftaran Siswa</title>
</head>
<body>
    <section class="box-register">
    <div class="box">
<div class="text-slmt">
    <h2>Selamat Datang</h2>
</div>
</table>
<br>
    <section>
        <style>
            </style>
            <div class="form-daftar">
        <h2>SILAHKAN DAFTAR</h2>
            <form action="register.php" method="POST">
                <label for=""></label>
                <input type="text" class="input-box" name="username" lass="form-control" placeholder="Username">
        <br>
                <label for=""></label>
                <input type="email" class="input-box" name="email" lass="form-control" placeholder="Alamat Email">
        <br>
                <label for=""></label>
                <input type="password" class="input-box" name="password" lass="form-control" placeholder="Password">
                <button type="submit" name="daftar" class="btn-daftar">DAFTAR AKUN</button>
            </form>
    </section>
</body>
</html>
</section>
