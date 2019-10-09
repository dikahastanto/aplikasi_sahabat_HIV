<?php 

    include 'header.php';
    $id = $_GET['id'];
    $idUser = $_GET['idUser'];
    $sql = "UPDATE tb_rekam_medik SET status=2 WHERE id='$id'";

    $permitted_chars = '0123456789';
    $noRekam = substr(str_shuffle($permitted_chars), 0,10);
    $sql2 = "UPDATE tb_detail_user SET noRekamMedis='$noRekam' WHERE idUser='$idUser'";
    $query2 = mysqli_query($konek,$sql2);

    $query = mysqli_query($konek,$sql);
    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Mengkonfirmasi')
                window.location = 'data_pasien.php?status=1';
            </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Gagal Mengkonfirmasi!')
                window.location = 'data_pasien.php?status=1';
            </script>";
    }

?>