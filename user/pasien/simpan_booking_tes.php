<?php 
session_start();
    include '../../settings/koneksi.php';
    $localStorage = $_SESSION['data'];
    $jenis = $_POST['jenis'];
    $idRs = $_POST['idRs'];
    $tgl = $_POST['tgl'];
    $jam = $_POST['jam'];
    $idUser = $localStorage['idUser'];
    $metodePembayaran = $_POST['metodePembayaran'];

    $sql = "INSERT INTO tb_book_tes (jenisTes,idRs,tgl,jam,metodePembayaran,idUser) VALUES ('$jenis','$idRs','$tgl','$jam','$metodePembayaran','$idUser')";
    $query = mysqli_query($konek, $sql);
    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Booing Layanan Tes')
                    window.location = 'booking_tes.php';
                </script>";
    }else {
        echo    "<script type=text/Javascript> alert('Terjadi Kesalahan!')
                    window.location = 'booking_tes.php';
                </script>";
    }

?>