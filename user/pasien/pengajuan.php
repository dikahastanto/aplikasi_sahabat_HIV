<?php 
session_start();
$localStorage = $_SESSION['data'];
    include '../../settings/koneksi.php';
    $idRs = $_GET['id'];
    $idPasien = $localStorage['idUser'];
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $id = substr(str_shuffle($permitted_chars), 0,10);
    $sql = "INSERT INTO tb_rekam_medik (id,idRs,idPasien) VALUES ('$id','$idRs','$idPasien')";
    $query = mysqli_query($konek,$sql);
    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Mengajukan.Silahkan Tunggu Konfirmasi')
                    window.location = 'list_rs.php';
                </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Terjadi Kesalahan!')
                    window.location = 'list_rs.php';
                </script>";
    }

?>