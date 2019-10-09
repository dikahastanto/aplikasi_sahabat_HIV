<?php 
    include 'header.php';
    
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Dashboard Rumah Sakit / Puskesmas</h4>
                            </div>
                        </div>
                    </div>
                    <img style="padding:10px;" src="../img/<?= $localStorage['gambar'] ?>" alt="">
                    <div style="margin-left:20px;padding-bottom:20px;">
                        <i class="ti-location-pin"></i> <?= $localStorage['alamat'] ?><br>
                        <i class="ti-mobile"> </i><?= $localStorage['cp'] . ' (' . $localStorage['namaCp'] . ')' ?>
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