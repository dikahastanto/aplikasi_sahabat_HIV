<?php 
session_start();
    include '../../settings/koneksi.php';
    $idRs = $_GET['reciver'];
    $localStorage = $_SESSION['data'];
    $idUser = $localStorage['idUser'];
    $isiChat = $_POST['isiChat'];

    $sql = "INSERT INTO tb_bimbingan (pengirim,penerima,isiChat) VALUES ('$idUser', '$idRs','$isiChat')";
    $query = mysqli_query($konek, $sql);

    header('location: chat.php');

?>