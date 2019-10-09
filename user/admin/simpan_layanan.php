<?php 

    include '../../settings/koneksi.php';
    $username = $_POST['username'];
    $p = '12345678';
    $password = password_hash($p, PASSWORD_DEFAULT);
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $layanan = $_POST['layanan'];
    $biayaRestribusi = $_POST['biayaRetribusi'];
    $biayaHiv = $_POST['biayaHiv'];
    $biayaIMS = $_POST['biayaIMS'];
    $jamaLayanan = $_POST['jamLayanan'];
    $cp = $_POST['cp'];
    $namacp = $_POST['namacp'];

    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $id = substr(str_shuffle($permitted_chars), 0,10);

    $temp = explode(".", $_FILES["image"]["name"]);
    $nama_baru = round(microtime(true)) . '.' . end($temp);

    $folder_cover = "../img/";
    $asal = $_FILES['image']['tmp_name'];
    $foto = $folder_cover. basename($nama_baru);

    $sql_cek = "SELECT * FROM tb_user WHERE username='$username'";
    $query_cek = mysqli_query($konek, $sql_cek);
    $cek = mysqli_num_rows($query_cek);
    if ($cek > 0) {
        echo    "<script type=text/Javascript> alert('Username Sudah Digunakan!')
                    window.location = 'form_input_layanan.php';
                </script>";
    } else {
        $sql1 = "INSERT INTO tb_user (username,password,idUser, status) VALUES ('$username', '$password', '$id', '2')";
        $query1 = mysqli_query($konek,$sql1);
        
        if ($query1) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $foto)) {
                $image = $nama_baru;
                $sql = "INSERT INTO tb_tempat_layanan (id,nama,alamat,layanan,biayaRetribusi,biayaHIV,biayaIMS,jamLayanan,cp,namaCp,gambar) VALUES ('$id','$nama','$alamat','$layanan','$biayaRestribusi','$biayaHiv','$biayaIMS','$jamaLayanan','$cp','$namacp','$image')";
                $query = mysqli_query($konek, $sql);

                if ($query) {
                    echo    "<script type=text/Javascript> alert('Berhasil Input')
                            window.location = 'index.php';
                        </script>";
                } else {
                    echo    "<script type=text/Javascript> alert('Terjadi Kesalahan!')
                            window.location = 'form_input_layanan.php';
                        </script>";
                }

            } else {
                echo    "<script type=text/Javascript> alert('Terjadi Kesalahan Saat Menunggah Gambar!')
                            window.location = 'form_input_layanan.php';
                        </script>";
            }
        } else {
            echo    "<script type=text/Javascript> alert('Terjadi Kesalahan!')
                            window.location = 'form_input_layanan.php';
                        </script>";
        }

    }

    

?>