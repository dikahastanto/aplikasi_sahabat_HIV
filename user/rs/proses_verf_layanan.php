<?php 

    include 'header.php';
    $id = $_GET['id'];
    $sql = "UPDATE tb_book_tes SET status=2 WHERE id='$id'";
    $query = mysqli_query($konek,$sql);
    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Mengkonfirmasi')
                window.location = 'data_pemesanan_layanan.php?status=1';
            </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Gagal Mengkonfirmasi!')
                window.location = 'data_pemesanan_layanan.php?status=1';
            </script>";
    }

?>