<?php 

    include '../../settings/koneksi.php';
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $email = $_POST['email'];
    $dekripsi = $_POST['deskripsi'];
    $notelp = $_POST['noTelp'];

    $temp = explode(".", $_FILES["image"]["name"]);
    $nama_baru = round(microtime(true)) . '.' . end($temp);

    $folder_cover = "../img/";
    $asal = $_FILES['image']['tmp_name'];
    $foto = $folder_cover. basename($nama_baru);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $foto)) {
        $image = $nama_baru;
        $sql = "INSERT INTO tb_tim_layanan (jenisTim, nama, email, noTelp,deskripsi, gambar) VALUES ('$jenis','$nama','$email','$notelp','$dekripsi','$image')";
        $query = mysqli_query($konek, $sql);
        if ($query) {
            echo    "<script type=text/Javascript> alert('Berhasil Input')
                    window.location = 'data_tim.php';
                </script>";
        } else {
            echo    "<script type=text/Javascript> alert('Terjadi Kesalahan!')
                    window.location = 'data_tim.php';
                </script>";
        }
    } else {
        echo    "<script type=text/Javascript> alert('Terjadi Kesalahan Saat Menunggah Gambar!')
                    window.location = 'data_tim.php';
                </script>";
    }

    

?>