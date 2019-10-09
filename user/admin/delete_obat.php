<?php 
    include '../../settings/koneksi.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM tb_obat WHERE id='$id'";
    $query = mysqli_query($konek,$sql);

    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Menghapus')
                    window.location = 'obat.php';
                </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Terjadi Kesalahan!')
                    window.location = 'obat.php';
                </script>";
    }

?>