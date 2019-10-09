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
                                <h4 class="card-title">Input Data Tim Layanan Kesehatan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding:10px;">
                        <div class="col-md-6 col-xs-12">
                            <form action="simpan_tim_layanan.php" method="post" enctype="multipart/form-data">
                                <select class="form-control" name="jenis">
                                    <option disabled selected>Jenis Tim</option>
                                    <option value="Dokter">Dokter</option>
                                    <option value="Petugas Lapangan">Petugas Lapangan</option>
                                    <option value="Petugas Sebaya">Petugas Sebaya</option>
                                    <option value="Komunitas">Komunitas</option>
                                </select><br>
                                <input type="text" required class="form-control" name="nama" placeholder="Nama Tim/Perorangan"><br>
                                <input type="email" required class="form-control" name="email" placeholder="E-Mail"><br>
                                <input type="number" required class="form-control" name="noTelp" placeholder="No. Telp"><br>
                                <textarea class="form-control" placeholder="Deskripsi" name="deskripsi" cols="30" rows="4"></textarea><br>
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