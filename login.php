<?php 
    include "database/database.php";
    session_start();

    if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $sql = "SELECT * FROM dataa WHERE username = '$username' AND email = '$email' AND password = '$password' ";
    $result = $db->query($sql);

    if ($result ->num_rows > 0 ) {
        $data = $result->fetch_assoc();
        $_SESSION['username'] = $data['username'];
        header ("location:dashboard.php");
        echo "anda berhasil login";
    } else {
        echo "anda gagal login";
    }
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
    <br>
        <H2>SILAHKAN LOGIN</H2>
            <form action="login.php" method="POST">
                <label for=""></label>
                <input type="text" name="username" class="input-box" lass="form-control" placeholder="Masukan Username Anda" name="user_username">
        <br>
                <label for=""></label>
                <input type="email" name="email" class="input-box" lass="form-control" placeholder="Masukan Gmail" name="user_gmail">
        <br>
                <label for=""></label>
                <input type="password" name="password" class="input-box" lass="form-control" placeholder="Masukkan Password" name="user_password">
                <button type="submit=" name="login" class="btn-daftar">LOGIN SEKARANG</button>
                </br>
            </form>
    </section>
</body>
</html>
