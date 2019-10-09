<?php 
    
    include 'header.php';
    $jenis = $_GET['jenis'];
    $sql ="SELECT * FROM tb_tim_layanan WHERE jenisTim = '$jenis'";
    $query = mysqli_query($konek,$sql);
    
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <?php while($data = mysqli_fetch_array($query)) : ?>
                <div class="col-md-3 col-xs-12">
                    <div class="card">
                        <img src="../img/<?= $data['gambar'] ?>" width="100%" style="height:200px;" class="card-img-top" style="padding:5px;">
                        <div class="card-body">
                            <h5 class="card-title"><?= substr($data['nama'], 0,20) . '...' ?></h5>
                            <p class="card-text"><?= $data['jenisTim'] ?></p>
                            <p class="card-text"><?= $data['email'] ?></p>
                            <p class="card-text"><?= $data['noTelp'] ?></p>
                            <a href="detail_tim.php?id=<?= $data['id'] ?>">
                                <button class="btn btn-success">Detail Tim</button>
                            </a>
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