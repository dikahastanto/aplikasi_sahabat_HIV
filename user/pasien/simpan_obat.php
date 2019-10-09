<?php 
session_start();
    include '../../settings/koneksi.php';
    $localStorage = $_SESSION['data'];
    $idUser = $localStorage['idUser'];
    $sql = "SELECT * FROM tb_rekam_medik WHERE idPasien = '$idUser'";
    $query = mysqli_query($konek,$sql);
    $data = mysqli_fetch_array($query);
    $idRs = $data['idRs'];
    $idObat = $_GET['id'];

    $tgl = $_POST['tgl'];
    $jam = $_POST['jam'];

    $simpan = mysqli_query($konek, "INSERT INTO tb_book_obat (idRs,idUser,idObat,tgl,jam) VALUES ('$idRs','$idUser','$idObat','$tgl','$jam')");
    if ($simpan) {
        $sql2 = "UPDATE tb_detail_user SET tglPengambilanObat='$tgl' WHERE idUser='$idUser'";
        $query2 = mysqli_query($konek, $sql2);
        echo    "<script type=text/Javascript> alert('Berhasil Booking Obat')
                    window.location = 'list_booking_obat.php';
                </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Terjadi Kesalahan!')
                    window.location = 'index.php';
                </script>";
    }
?>