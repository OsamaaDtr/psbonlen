<?php 
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Spicy+Rice&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>Website Pendaftaran Siswa</title>
</head>
<body>
 <div style="position: relative; top: 150px; left: 0px;">
 <div class="box-index">
    <center> <h2>Selamat Datang</h2> </center>
    <center><h2>Website Pendaftaran Calon Siswa/i Baru SMKN 14 MEDAN</h2></center>
    <br>
    <nav>
    <form action="index.php" method="POST">
    <form action="register.php" method="POST">
    <form action="login.php" method="POST">
    <center>
        <button type="submit" name="home" class="btn-index" a href="index.php">HOME</button>
        <button type="submit" name="register" class="btn-index" a href="register.php">REGISTER</button>
        <button type="submit" name="login" class="btn-index" a href="login.php">LOGIN</button>
    </center>
    </nav>
    <br>
        <section>
            <center><h3>SILAHKAN DAFTAR TERLEBIH DAHULU</h3></center>   
    </br>
        </section>
    </body>
</html>
