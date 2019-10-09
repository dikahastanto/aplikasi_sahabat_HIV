<?php 
    include 'header.php';
    // $id = $_GET['id'];
    // $sql = "SELECT * FROM tb_obat WHERE id='$id'";
    // $query = mysqli_query($konek, $sql);
    // $data = mysqli_fetch_array($query);
    $sql = "SELECT * FROM tb_tempat_layanan";
    $query = mysqli_query($konek, $sql);
?>
<style>
</style>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Booking Test</h4>
                            </div>
                        </div>
                    </div>
                    <div style="margin-left:10px;margin-bottom:10px;">
                        <a href="list_booking_tes.php">
                            <button class="btn btn-success">Lihat Data Pemesanan Layanan</button>
                        </a>
                    </div>
                    <div class="row" style="padding:10px;">
                        <div class="col-md-6 col-xs-12">
                            <form action="simpan_booking_tes.php" method="post">
                                <select name="jenis" class="form-control">
                                    <option disabled selected>Pilih Jenis</option>
                                    <option value="Tes VCT">Tes VCT</option>
                                    <option value="Tes TB">Tes TB</option>
                                    <option value="Tes IMS">Tes IMS</option>
                                </select><br>
                                <select class="form-control" name="idRs">
                                    <?php while($data=mysqli_fetch_array($query)): ?>
                                        <option value="<?= $data['id'] ?>"><?= $data['nama'] ?></option>
                                    <?php endwhile; ?>
                                </select><br>
                                Tanggal
                                <input type="date" required class="form-control" name="tgl" placeholder="Tanggal"><br>
                                Jam
                                <input type="text" readonly class="form-control" name="jam" placeholder="Jam" id="jam1" /><br>
                                <select name="metodePembayaran" class="form-control">
                                    <option value="BPJS">BPJS</option>
                                    <option value="KIS">KIS</option>
                                    <option value="Mandiri">Mandiri</option>
                                </select><br>
                                <input type="submit" class="btn btn-success" value="Booking">
                            </form>
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
<link rel="stylesheet" href="../dist/js/jquery-ui-1.12.1/jquery-ui.css" type="text/css" />
<link rel="stylesheet" href="../dist/js/jquery.ui.timepicker.css" type="text/css" />
<script type="text/javascript" src="../dist/js/include/jquery-1.9.0.min.js"></script>
<!-- <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script> -->
<script type="text/javascript" src="../dist/js/jquery-ui-1.12.1/jquery-ui.js"></script> 
<script type="text/javascript" src="../dist/js/jquery.ui.timepicker.js"></script>
<script type="text/javascript">
            $(document).ready(function() {
                $('#jam1').timepicker({
                    showPeriodLabels: false
                });
              });
</script>
</div>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <script src="../dist/js/custom.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>
