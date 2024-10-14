<?php 
    session_start();

    if (isset($_POST['logout'])) {
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
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Oswald:wght@200..700&family=Spicy+Rice&display=swap" rel="stylesheet">

    <title>Dashboard</title>
</head>
<body>
    <div style="position: relative; top: 50px; left: 100px;">
    <h1>Selamat Datang! <?= $_SESSION['username'] ?></h1>
    <form action="dashboard.php" method="POST">
        <nav>
    <br>
    <a href="daftar.php" class="btn-dtr">Daftar Peserta Didik Baru</a>
</nav>
    </br>
    <br>
    <button type="submit" class="btn-lo" name="logout">Logout</button>
</br>
</div>
</body>
</html>
