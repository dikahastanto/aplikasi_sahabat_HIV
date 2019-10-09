<?php 
    include 'header.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_tim_layanan WHERE id='$id'";
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
                                <h4 class="card-title">Update Data Tim Layanan Kesehatan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding:10px;">
                        <div class="col-md-6 col-xs-12">
                            <form action="update_proses_tim_layanan.php?id=<?= $id ?>" method="post" enctype="multipart/form-data">
                                <select class="form-control" name="jenis">
                                    <option disabled>Jenis TIm</option>
                                    <option selected value="<?= $data['jenisTim'] ?>"><?= $data['jenisTim'] ?></option>
                                    <option value="Dokter">Dokter</option>
                                    <option value="PL/PS">PL/PS</option>
                                    <option value="Komunitas">Komunitas</option>
                                </select><br>
                                <input type="text" value="<?= $data['nama'] ?>" required class="form-control" name="nama" placeholder="Nama Tim/Perorangan"><br>
                                <input type="email" value="<?= $data['email'] ?>" required class="form-control" name="email" placeholder="E-Mail"><br>
                                <input type="number" value="<?= $data['noTelp'] ?>" required class="form-control" name="noTelp" placeholder="No. Telp"><br>
                                Ubah Gambar *Kosongkan bila tidak mengubah gambar
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
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        Copyright Sahabat HIV/AIDS 2019
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<?php include 'footer.php' ?>