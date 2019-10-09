<?php 
    include 'header.php';
    $localStorage = $_SESSION['data'];
    
    $tanggal = new DateTime($localStorage['umur']);
    $today = new DateTime('today');
    $y = $today->diff($tanggal)->y;
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Profile Anda</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding:10px;margin-top:-30px;">
                        <div class="col-md-6 col-xs-12" style="margin-left:10px;">
                            <h3><?= $localStorage['namaLengkap'] ?></h3>
                            <h5><?= $localStorage['jenisKelamin'] ?></h5>
                            <h5><?= $y ?> Tahun</h5>
                            <h5>Tahun Diagnosa <?= $localStorage['tahunDiagnosa'] ?></h5>
                            <?php if($localStorage['noRekamMedis'] == null): ?>
                                <h5>Anda belum terdaftar di Rumah Sakit / Puskesmas Sebagai Pasien ODHA</h5>
                            <?php else: ?>
                                <h5>No Rekam Medis <?= $localStorage['noRekamMedis'] ?></h5>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br><br>
    <footer class="footer text-center">
        Copyright Sahabat HIV/AIDS 2019
    </footer>
</div>
<?php include 'footer.php' ?>
