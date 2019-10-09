<?php 

    include 'header.php';
    $localStorage = $_SESSION['data'];
    $id = $localStorage['idUser'];
    $sql = "SELECT * FROM tb_book_tes INNER JOIN tb_tempat_layanan ON tb_book_tes.idRs=tb_tempat_layanan.id WHERE tb_book_tes.idUser='$id'";
    $query = mysqli_query($konek, $sql);


?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h3>Data Pemesanan Layanan</h3>
                                <div class="table-responsive">
                                    <table class="table v-middle">
                                        <thead>
                                            <tr class="bg-light">
                                                <th class="border-top-0">Nama RS/Puskesmas</th>
                                                <th class="border-top-0">Alamat</th>
                                                <th class="border-top-0">Jenis Layanan</th>
                                                <th class="border-top-0">Metode Pembayaran</th>
                                                <th class="border-top-0">Tanggal</th>
                                                <th class="border-top-0">Jam Layanan</th>
                                                <th class="border-top-0">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while($data=mysqli_fetch_array($query)): ?>
                                                <tr class="bg-light">
                                                    <th class="border-top-0"><?= $data['nama'] ?></th>
                                                    <th class="border-top-0"><?= $data['alamat'] ?></th>
                                                    <th class="border-top-0"><?= $data['jenisTes'] ?></th>
                                                    <th class="border-top-0"><?= $data['metodePembayaran'] ?></th>
                                                    <th class="border-top-0"><?= $data['tgl'] ?></th>
                                                    <th class="border-top-0"><?= $data['jam'] ?></th>
                                                    <th class="border-top-0">
                                                        <?php if($data['status'] == 1): ?>
                                                            <label class="label label-warning">Status Munungggu Konfirmasi</label>
                                                        <?php else: ?>
                                                            <label class="label label-success">Status Terkonfirmasi</label>
                                                        <?php endif; ?>
                                                    </th>
                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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