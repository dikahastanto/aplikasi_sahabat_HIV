<?php 
session_start();
    include 'settings/koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tb_user WHERE username = '$username'";
    $query = mysqli_query($konek,$sql);
    $cekUsername = mysqli_num_rows($query);

    if ($cekUsername > 0) {
        
        $data = mysqli_fetch_array($query);
        $hashed_password = $data['password'];

        if (password_verify($password,$hashed_password)) {
            // 0 = admin, 1 = pasien, 2 = rs/psukes
            if ($data['status'] == 0) {
                
                $_SESSION['admin'] = true;
                header('location: user/admin/');

            }else if($data['status'] == 1){
                $id = $data['idUser'];
                $sql1 = "SELECT * FROM tb_detail_user WHERE idUser = '$id'";
                $query1 = mysqli_query($konek,$sql1);
                $dataUser = mysqli_fetch_array($query1);
                $_SESSION['pasien'] = true;
                $_SESSION['data'] = $dataUser;
                header('location: user/pasien/');

            } else {
                $id = $data['idUser'];
                $sql1 = "SELECT * FROM tb_tempat_layanan WHERE id = '$id'";
                $query1 = mysqli_query($konek,$sql1);
                $dataUser = mysqli_fetch_array($query1);
                $_SESSION['rs'] = true;
                $_SESSION['data'] = $dataUser;
                header('location: user/rs/');
            }

        }else{

            echo    "<script type=text/Javascript> alert('Password Salah!')
                    window.location = 'login.php';
                </script>";

        }

    }else{

        echo    "<script type=text/Javascript> alert('Username Tidak Terdaftar !')
                    window.location = 'login.php';
                </script>";

    }

?>