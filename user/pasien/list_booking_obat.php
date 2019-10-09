<?php 

    include 'header.php';
    $localStorage = $_SESSION['data'];
    $id = $localStorage['idUser'];
    $sql = "SELECT * FROM tb_book_obat INNER JOIN tb_obat ON tb_book_obat.idObat = tb_obat.id WHERE tb_book_obat.idUser='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query);

    $sql2 = "SELECT tglPengambilanObat FROM tb_detail_user WHERE idUser='$id'";
    $query2 = mysqli_query($konek, $sql2);
    $tgl = mysqli_fetch_array($query2);


?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Data Pemesanan Obat</h4>
                                <h5 class="card-subtitle">Jangan Lupa Minum Obat Teratur Ya <i class="ti-face-smile"></i></h5>
                                <h3><?= $data['nama'] ?></h3>
                                <?php if($data > 0): ?>
                                    <p>Waktu Pengambilan <?= $data['tgl'] . '. Jam ' . $data['jam'] ?></p>
                                    <?php if($data['status'] == 1): ?>
                                        <label class="label label-warning">Status Munungggu Konfirmasi</label>
                                    <?php else: ?>
                                        <label class="label label-success">Status Terkonfirmasi</label>
                                    <?php endif; ?><br>
                                    Jangan Lupa Anda Mengambil Obat untuk bulan depan pada tanggal 
                                    <?php
                                        // $localStorage['tglPengambilanObat'];
                                        $date = date('Y-m-d', strtotime('+1 month', strtotime( $tgl['tglPengambilanObat'] )));
                                        echo $date;
                                    ?>
                                <?php else: ?>
                                    <label class="label label-warning">Anda belum memesan obat</label>
                                <?php endif; ?>
                                <br><br>
                                <blockquote><p>“Jangan pesimis jika Kamu menderita penyakit AIDS yang dianggap hina oleh sebagian besar masyarakat.</p>
                            <p>Jika penyakit ini disebabkan oleh perilakumu yang menyimpang ataupun karena penyebab lainnya buktikan bahwa Kamu bisa membuat mereka tercengang dengan prestasi yang Kamu miliki.</p>
                            <p>Kamu hanya memiliki satu kelemahan, namun jangan sampai kelemahan itu menutupi semua kelebihan yang Kamu miliki.”</p></blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-center">
        Copyright Sahabat HIV/AIDS 2019
    </footer>
</div>
<?php include 'footer.php' ?>