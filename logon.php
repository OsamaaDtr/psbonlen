<?php 
    session_start();
    include 'psb/koneksi.php';

    if (isset($_POST['login'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];
        // cek akun ada apa tidak
        $cek = "SELECT * FROM tb_admin WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($db, $cek);

        if(mysqli_num_rows($result) > 0){
            $a = mysqli_fetch_object($cek);

            $_SESSION['stat_login'] = true;
            $_SESSION['id'] = $a->id_admin;
            $_SESSION['nama'] = $a->nm_admin;
            echo '<script>window.location="beranda.php"</script>';
        }else{
            echo '<script>alert("Gagal, username atau password salah")</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <!-- bagian main login -->
     <section class="main-login">
        <div class="box-logon">
            <h2>Login Admin</h2>

            <!-- bagian form login -->
            <form action="" method="POST">
                <div class="boxing">
                    <table>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="user" class="input-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td>
                                <input type="password" name="pass" class="input-control">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="login" value="Login" class="btn-logon">
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
     </section>
</body>
</html>
