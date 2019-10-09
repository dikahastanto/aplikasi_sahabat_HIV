<?php 

    include '../../settings/koneksi.php';
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $adaGambar = $_FILES['image']['name'];
    if ($adaGambar !== "") {
        $temp = explode(".", $_FILES["image"]["name"]);
        $nama_baru = round(microtime(true)) . '.' . end($temp);

        $folder_cover = "../img/";
        $asal = $_FILES['image']['tmp_name'];
        $foto = $folder_cover. basename($nama_baru);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $foto)) {
            $image = $nama_baru;
            $sql = "UPDATE tb_obat SET nama='$nama', deskripsi='$deskripsi', gambar='$image' WHERE id='$id'";
            $query = mysqli_query($konek, $sql);
            if ($query) {
                echo    "<script type=text/Javascript> alert('Berhasil Update Data')
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
    } else {
        $sql = "UPDATE tb_obat SET nama='$nama', deskripsi='$deskripsi' WHERE id='$id'";
        $query = mysqli_query($konek, $sql);
        if ($query) {
            echo    "<script type=text/Javascript> alert('Berhasil Update')
                    window.location = 'obat.php';
                </script>";
        } else {
            echo    "<script type=text/Javascript> alert('Terjadi Kesalahan!')
                    window.location = 'obat.php';
                </script>";
        }
    }

    

?>