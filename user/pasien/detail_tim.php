<?php 
    
    include 'header.php';
    $id = $_GET['id'];
    $sql ="SELECT * FROM tb_tim_layanan WHERE id = '$id'";
    $query = mysqli_query($konek,$sql);
    $data = mysqli_fetch_array($query);
    
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <img src="../img/<?= $data['gambar'] ?>" width="100%" style="height:200px;" class="card-img-top" style="padding:5px;">
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <h5 class="card-title"><?= $data['nama'] ?></h5>
                        <p class="card-text"><?= $data['jenisTim'] ?></p>
                        <h5 class="card-title"><?= $data['deskripsi'] ?></h5>
                        <p class="card-text"><?= $data['email'] ?></p>
                        <p class="card-text"><?= $data['noTelp'] ?></p>
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