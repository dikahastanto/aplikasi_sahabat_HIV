<?php 
    include 'header.php';
    $localStorage = $_SESSION['data'];
    $idUser = $localStorage['id'];
    $pasien = $_GET['idPasien'];

    $sqlChat = "SELECT * FROM tb_bimbingan WHERE pengirim='$idUser' AND penerima='$pasien' OR pengirim ='$pasien' AND penerima='$idUser'";
    $queryChat = mysqli_query($konek,$sqlChat);
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <?php while($isiChat = mysqli_fetch_array($queryChat)): ?>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <?php if($isiChat['pengirim'] == $idUser): ?>
                    <div class="card-body" style="background:#E6E6FA;">
                    <?php else: ?>
                    <div class="card-body" style="background:white;">
                    <?php endif; ?>
                        <div class="align-items-center">
                        <?php if($isiChat['pengirim'] == $idUser): ?>
                            <p style="text-align:right;">Anda</p>
                            <p style="text-align:right;"><?= $isiChat['isiChat'] ?></p>
                        <?php else: ?>
                            <p><?= $_GET['nama'] ?></p>
                            <p><?= $isiChat['isiChat'] ?></p>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <form method="post" action="send.php?reciver=<?= $pasien ?>&nama=<?= $_GET['nama'] ?>">
                                <textarea name="isiChat" placeholder="Ketik Sesuatu Untuk <?= $_GET['nama'] ?>" class="form-control" cols="60" rows="3"></textarea><br>
                                <button type="submit" class="btn btn-primary mb-2">Kirim</button>
                            </form>
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