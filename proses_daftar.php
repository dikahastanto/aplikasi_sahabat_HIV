<?php 

    include 'settings/koneksi.php';
    $username = $_POST['username'];
    $p = $_POST['password'];
    $password = password_hash($p, PASSWORD_DEFAULT);
    $namaLengkap = $_POST['namaLengkap'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];
    $tahunDiagnosa = $_POST['tahunDiagnosa'];
    $email = $_POST['email'];
    $noTelp = $_POST['noTelp'];

    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $id = substr(str_shuffle($permitted_chars), 0,10);

    $sql_cek = "SELECT * FROM tb_user WHERE username='$username'";
    $query_cek = mysqli_query($konek, $sql_cek);
    $cek = mysqli_num_rows($query_cek);

    if ($cek > 0) {
        echo    "<script type=text/Javascript> alert('Username Sudah Digunakan!')
                    window.location = 'daftar.php';
                </script>";
    } else {
        $sql1 = "INSERT INTO tb_user (username,password,idUser) VALUES ('$username', '$password', '$id')";
        $query1 = mysqli_query($konek,$sql1);

        if ($query1) {
            $sql2 = "INSERT INTO tb_detail_user (idUser,namaLengkap,jenisKelamin,alamat,umur,tahunDiagnosa,email,noTelp) VALUES ('$id','$namaLengkap', '$jenisKelamin','$alamat', '$umur','$tahunDiagnosa','$email','$noTelp')";
            $query2 = mysqli_query($konek, $sql2);
            if ($query2) {
                echo    "<script type=text/Javascript> alert('Berhasil Daftar. Silahkan Login')
                    window.location = 'login.php';
                </script>";
            } else {
                echo    "<script type=text/Javascript> alert('Terjadi Kesalahan!')
                    window.location = 'daftar.php';
                </script>";
            }
        } else {
            echo    "<script type=text/Javascript> alert('Terjadi Kesalahan!')
                    window.location = 'daftar.php';
                </script>";
        }
    }



?>