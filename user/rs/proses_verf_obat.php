<?php 

    include 'header.php';
    $id = $_GET['id'];
    $sql = "UPDATE tb_book_obat SET status=2 WHERE id='$id'";
    $query = mysqli_query($konek,$sql);
    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Mengkonfirmasi')
                window.location = 'data_pemesanan_obat.php?status=1';
            </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Gagal Mengkonfirmasi!')
                window.location = 'data_pemesanan_obat.php?status=1';
            </script>";
    }

?>