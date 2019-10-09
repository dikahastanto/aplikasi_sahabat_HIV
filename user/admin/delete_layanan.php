<?php 
    include '../../settings/koneksi.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM tb_tempat_layanan WHERE id='$id'";
    $query = mysqli_query($konek,$sql);
    $sql1 = "DELETE FROM tb_user WHERE idUser='$id'";
    $query1 = mysqli_query($konek,$sql1);

    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Menghapus')
                    window.location = 'index.php';
                </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Terjadi Kesalahan!')
                    window.location = 'index.php';
                </script>";
    }

?>