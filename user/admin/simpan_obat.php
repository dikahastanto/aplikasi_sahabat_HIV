<?php 

    include '../../settings/koneksi.php';
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];

    $temp = explode(".", $_FILES["image"]["name"]);
    $nama_baru = round(microtime(true)) . '.' . end($temp);

    $folder_cover = "../img/";
    $asal = $_FILES['image']['tmp_name'];
    $foto = $folder_cover. basename($nama_baru);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $foto)) {
        $image = $nama_baru;
        $sql = "INSERT INTO tb_obat (nama, deskripsi, gambar) VALUES ('$nama','$deskripsi','$image')";
        $query = mysqli_query($konek, $sql);
        if ($query) {
            echo    "<script type=text/Javascript> alert('Berhasil Input')
                    window.location = 'obat.php';
                </script>";
        } else {
            echo    "<script type=text/Javascript> alert('Terjadi Kesalahan!')
                    window.location = 'obat.php';
                </script>";
        }
    } else {
        echo    "<script type=text/Javascript> alert('Terjadi Kesalahan Saat Menunggah Gambar!')
                    window.location = 'obat.php';
                </script>";
    }

    

?>