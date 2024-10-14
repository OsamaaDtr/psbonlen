<?php 
    include 'psb/koneksi.php';

    if(isset($_GET['id'])){
        $delete = mysqli_query($db, "DELETE FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
        echo '<script>window.location="data-peserta.php"</script>';
    }
?>
