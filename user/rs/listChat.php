<?php 
    include 'header.php';
    $idRs = $_SESSION['data']['id'];
    $sql = "SELECT * FROM tb_rekam_medik INNER JOIN tb_detail_user ON tb_rekam_medik.idPasien=tb_detail_user.idUser WHERE tb_rekam_medik.idRs='$idRs'";
    $query = mysqli_query($konek,$sql);
    
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">List Bimbingan</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="list-group">
                    <?php while($data = mysqli_fetch_array($query)): ?>
                        <a href="chat.php?idPasien=<?= $data['idUser'] ?>&nama=<?= $data['namaLengkap'] ?>" class="list-group-item list-group-item-action disabled">
                            <h6><?= $data['namaLengkap'] ?></h6>
                        </a>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-center">
        Copyright Sahabat HIV/AIDS 2019
    </footer>
</div>
<?php include 'footer.php' ?>