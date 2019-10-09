<?php 
    include 'header.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_tempat_layanan WHERE id='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query);

?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Update Data Rumah Sakit/Puskesmas</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding:10px;">
                        <div class="col-md-6 col-xs-12">
                            <form action="update_proses_layanan.php?id=<?= $id ?>" method="post" enctype="multipart/form-data">
                                <input value="<?= $data['nama'] ?>" type="text" class="form-control" name="nama" placeholder="Nama RS/Puskesmas"><br>
                                <textarea placeholder="Alamat" name="alamat" class="form-control" cols="30" rows="5"><?= $data['alamat'] ?></textarea><br>
                                <textarea class="form-control" name="layanan" id="" cols="30" rows="5" placeholder="Layanan"><?= $data['layanan'] ?></textarea><br>
                                <input value="<?= $data['biayaRetribusi'] ?>" type="text" class="form-control" name="biayaRetribusi" placeholder="Biaya Retribusi"><br>
                                <input value="<?= $data['biayaHIV'] ?>" type="text" class="form-control" name="biayaHiv" placeholder="Biaya HIV"><br>
                                <input value="<?= $data['biayaIMS'] ?>" type="text" class="form-control" name="biayaIMS" placeholder="Biaya IMS"><br>
                                <input value="<?= $data['jamLayanan'] ?>" type="text" class="form-control" name="jamLayanan" placeholder="Jam Layanan"><br>
                                <input value="<?= $data['cp'] ?>" type="number" class="form-control" name="cp" placeholder="Contact Person"><br>
                                <input value="<?= $data['namaCp'] ?>" type="text" class="form-control" name="namacp" placeholder="Nama Contact Person"><br>
                                Lampiran Gambar *Kosongkan bila tidak mengubah gambar 
                                <input type="file" class="form-control" name="image" placeholder="Gambar"><br>
                                Gambar Saat Ini
                                <img width="100%" src="../img/<?= $data['gambar'] ?>" alt=""><br><br>
                                <input type="submit" class="btn btn-success" value="Simpan">
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