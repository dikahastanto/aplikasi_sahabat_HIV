<?php 

    include 'header.php';
    $sql = "SELECT * FROM tb_obat";
    $query = mysqli_query($konek, $sql);

    $bisaAmbil;
    //1 gak bisa , 2 bisa
    $enabled ;
    if($localStorage['noRekamMedis'] === null) {
        $idUser = $localStorage['idUser'];
        $cek = "SELECT * FROM tb_rekam_medik WHERE idPasien='$idUser'";
        $queryCek = mysqli_query($konek,$cek);
        $dataRekam = mysqli_fetch_array($queryCek);
        $ada = mysqli_num_rows($queryCek);
        if ($ada > 0) {
            $enabled = true;
            if ($dataRekam['status'] == 1) {
                $status = 1;
            } else {
                $status = 2;
            }
        } else {
            $status = 1;
        }
    } else {
        $enabled = false;
        $status = 2;
    }

    $idUser = $localStorage['idUser'];
    $sql2 = "SELECT * FROM tb_book_obat WHERE idUser='$idUser'";
    $query2 = mysqli_query($konek, $sql2);
    $status2 = mysqli_num_rows($query2);


?>
<div class="page-wrapper">
    <div class="container-fluid">
        <?php if($localStorage['noRekamMedis'] === null): ?>
        <?php else: ?>
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <a href="list_booking_obat.php">
                    <button class="btn btn-success">Lihat Data Pemesanan Obat Anda</button>
                </a>
            </div>
        </div>
        <br>
        <?php endif; ?>
        <div class="row">
            <?php while($data=mysqli_fetch_array($query)): ?>
                <div class="col-md-3 col-xs-12">
                    <div class="card">
                        <img src="../img/<?= $data['gambar'] ?>" class="card-img-top" style="padding:5px;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $data['nama'] ?></h5>
                            <p class="card-text"><?= $data['deskripsi'] ?></p>
                            <?php if($status2 > 0): ?>
                                <label class="label label-danger">Tidak Bisa Membeli Obat Lagi</label>
                            <?php else: ?>
                                <?php if($status == 2): ?>
                                    <a href="form_beli_obat.php?id=<?= $data['id'] ?>" class="btn btn-primary">Beli Obat</a>
                                <?php else: ?>
                                    <button disabled class="btn btn-primary">Beli Obat</button>
                                    <p>Mohon Mengajukan No Rekam Medik Terlebih Dahulu / Menunggu Konfirmasi.</p>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <footer class="footer text-center">
        Copyright Sahabat HIV/AIDS 2019
    </footer>
</div>
<?php include 'footer.php' ?>