<?php 

    include '../../settings/koneksi.php';
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $layanan = $_POST['layanan'];
    $biayaRestribusi = $_POST['biayaRetribusi'];
    $biayaHiv = $_POST['biayaHiv'];
    $biayaIMS = $_POST['biayaIMS'];
    $jamaLayanan = $_POST['jamLayanan'];
    $cp = $_POST['cp'];
    $namacp = $_POST['namacp'];
    $adaGambar = $_FILES['image']['name'];
    if ($adaGambar !== "") {
        $temp = explode(".", $_FILES["image"]["name"]);
        $nama_baru = round(microtime(true)) . '.' . end($temp);

        $folder_cover = "../img/";
        $asal = $_FILES['image']['tmp_name'];
        $foto = $folder_cover. basename($nama_baru);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $foto)) {
            $image = $nama_baru;
            $sql = "UPDATE tb_tempat_layanan SET nama='$nama',alamat='$alamat',layanan='$layanan',biayaRetribusi='$biayaRestribusi',biayaHIV='$biayaHiv',biayaIMS='$biayaIMS',jamLayanan='$jamaLayanan',cp='$cp',namaCp='$namacp',gambar='$image' WHERE id='$id'";
            $query = mysqli_query($konek, $sql);
            if ($query) {
                echo    "<script type=text/Javascript> alert('Berhasil Update Data')
                        window.location = 'index.php';
                    </script>";
            } else {
                echo    "<script type=text/Javascript> alert('Terjadi Kesalahan!')
                        window.location = 'index.php';
                    </script>";
            }
        } else {
            echo    "<script type=text/Javascript> alert('Terjadi Kesalahan Saat Menunggah Gambar!')
                        window.location = 'index.php';
                    </script>";
        }
    } else {
        $sql = "UPDATE tb_tempat_layanan SET nama='$nama',alamat='$alamat',layanan='$layanan',biayaRetribusi='$biayaRestribusi',biayaHIV='$biayaHiv',biayaIMS='$biayaIMS',jamLayanan='$jamaLayanan',cp='$cp',namaCp='$namacp' WHERE id='$id'";
        $query = mysqli_query($konek, $sql);
        if ($query) {
            echo    "<script type=text/Javascript> alert('Berhasil Update')
                    window.location = 'index.php';
                </script>";
        } else {
            echo    "<script type=text/Javascript> alert('Terjadi Kesalahan!')
                    window.location = 'index.php';
                </script>";
        }
    }

    

?>