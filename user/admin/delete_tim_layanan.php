<?php 
    include '../../settings/koneksi.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM tb_tim_layanan WHERE id='$id'";
    $query = mysqli_query($konek,$sql);

    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Menghapus')
                    window.location = 'data_tim.php';
                </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Terjadi Kesalahan!')
                    window.location = 'data_tim.php';
                </script>";
    }

?>