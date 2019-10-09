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
                                <h4 class="card-title">Input Data Rumah Sakit/Puskesmas</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding:10px;">
                        <div class="col-md-6 col-xs-12">
                            <form action="simpan_layanan.php" method="post" enctype="multipart/form-data">
                                <input type="text" class="form-control" name="username" placeholder="Username"><br>
                                <input type="text" class="form-control" name="nama" placeholder="Nama RS/Puskesmas"><br>
                                <textarea placeholder="Alamat" name="alamat" class="form-control" cols="30" rows="4"></textarea><br>
                                <textarea name="layanan" placeholder="Layanan" class="form-control" cols="30" rows="4"></textarea><br>
                                <input type="text" class="form-control" name="biayaRetribusi" placeholder="Biaya Retribusi"><br>
                                <input type="text" class="form-control" name="biayaHiv" placeholder="Biaya HIV"><br>
                                <input type="text" class="form-control" name="biayaIMS" placeholder="Biaya IMS"><br>
                                <input type="text" class="form-control" name="jamLayanan" placeholder="Jam Layanan"><br>
                                <input type="number" class="form-control" name="cp" placeholder="Contact Person"><br>
                                <input type="text" class="form-control" name="namacp" placeholder="Nama Contact Person"><br>
                                Lampiran Gambar
                                <input type="file" class="form-control" name="image" placeholder="Gambar"><br>
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